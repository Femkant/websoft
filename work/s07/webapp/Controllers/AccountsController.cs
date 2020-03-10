using System.Collections.Generic;
using Microsoft.AspNetCore.Mvc;
using System.Text.Json;
using webapp.Models;
using webapp.Services;
using System.Linq;
using Microsoft.AspNetCore.Http;

namespace webapp.Controllers
{
    [ApiController]
    [Route("api/[controller]")]
    public class AccountsController : ControllerBase
    {
        public AccountsController(JsonFileAccountService accountService)
        {
            AccountService = accountService;
        }

        public JsonFileAccountService AccountService { get; }

        [HttpGet]
        public IEnumerable<Account> Get()
        {
            return AccountService.GetAccounts();
        }

        [HttpGet("/account/{id}")]
        public string Get(int id) {
            var accounts = AccountService.GetAccounts().ToList();

            foreach(var a in accounts){
                if(id == a.Number) {
                    List<Account> list = new List<Account>();
                    list.Add(a);
                    var json = JsonSerializer.Serialize<IEnumerable<Account>>(list);
                    return json;
                }
            }
            return "[{\"error\":\"Account does not exist\"}]";
        }
    }
}
