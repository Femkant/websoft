
using System;
using System.IO;
using System.Text.Json;
using System.Text.Json.Serialization;
using System.Collections.Generic;

//using Newtonsoft.Json;
//using Newtonsoft.Json.Linq;

namespace menu
{
    class Program
    {
        static void Main(string[] args)
        {
            bool showMenu = true;
            while (showMenu)
            {
                showMenu = MainMenu();
            }
        }

        private static bool MainMenu()
        {
            Console.Clear();
            Console.WriteLine("Choose an option:");
            Console.WriteLine("1) View accounts");
            Console.WriteLine("2) View accounts by ID");
            Console.WriteLine("3) Exit");
            Console.Write("\r\nSelect an option: ");
         
            switch (Console.ReadLine())
            {
                case "1":
                    ViewAccounts();
                    return true;
                case "2":
                    ViewAccountsByNumber();
                    return true;
                case "3":
                    return false;
                default:
                    return true;
            }
        }

        public static int IntLength(int i) {
            if (i < 0)
             throw new ArgumentOutOfRangeException();
             if (i == 0)
             return 1;
            return (int)Math.Floor(Math.Log10(i)) + 1;
}
        private static void ViewAccounts() {
            Console.Clear();

            var accounts = ReadAccounts();

            Console.WriteLine("------------------------------------");
            Console.WriteLine("| Number | Balance | Label | Owner |");
            Console.WriteLine("------------------------------------");

        foreach (var account in accounts) {

            if (IntLength(account.Number) <= 2) {
            Console.WriteLine("|   " + account.Number + "   |       " + account.Balance + "| " + account.Label + "| " + account.Owner + "    |"); 
            Console.WriteLine("------------------------------------"); 
            } else if (account.Label == "Savings") {
            Console.WriteLine("| " + account.Number + " |       " + account.Balance + "|" + account.Label + "| " + account.Owner + "    |");
            Console.WriteLine("------------------------------------");
            } else {
            Console.WriteLine("| " + account.Number + " |       " + account.Balance + "| " + account.Label + "| " + account.Owner + "    |");
            Console.WriteLine("------------------------------------");
            }
        }
            Console.Write("\r\nPress Enter to return to Main Menu");
            Console.ReadLine();
            
            
        }
 
        private static void ViewAccountsByNumber()
        {
            Console.Clear();
            Console.WriteLine("View accounts by number");
            Console.WriteLine("Enter an ID: ");
            var id = Console.ReadLine();

            //var jo = JObject.Parse(jsonString);
            

                var accounts = ReadAccounts();

                foreach (var account in accounts) {
                    if (account.Owner == Convert.ToInt32(id)){
                        Console.WriteLine("Account number: " + account.Number);
                        Console.WriteLine("Balance: " + account.Balance);
                        Console.WriteLine("Label: " + account.Label);
                        Console.WriteLine("Owner: " + account.Owner + "\n");
                    }
                }
            

            Console.Write("\r\nPress Enter to return to Main Menu");
            Console.ReadLine();
            
        }

            static IEnumerable<Account> ReadAccounts() {
            String file = "../../../data/account.json";

            using (StreamReader r = new StreamReader(file))
            {
                string data = r.ReadToEnd();
                // Console.WriteLine(data);

                var json = JsonSerializer.Deserialize<Account[]>(
                    data,
                    new JsonSerializerOptions {
                        PropertyNameCaseInsensitive = true
                    }
                );
                return json;
            }
        }
    }

public class Account {
    public int Number { get; set; }
    public int Balance { get; set; }
    public string Label { get; set; }
    public int Owner { get; set; }

    public override string ToString(){
        return JsonSerializer.Serialize<Account>(this);
    }
}
}
