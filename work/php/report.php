<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        input[id^="spoiler"] {
            display: none;
        }

        input[id^="spoiler"]+label {
            display: block;
            width: 200px;
            margin: 0 auto;
            padding: 5px 20px;
            background: rgb(99, 204, 155);
            color: #fff;
            text-align: center;
            font-size: 24px;
            border-radius: 8px;
            cursor: pointer;
            transition: all .6s;
        }

        input[id^="spoiler"]:checked+label {
            color: #333;
            background: #ccc;
        }

        input[id^="spoiler"]~.spoiler {
            width: 90%;
            height: 0;
            overflow: hidden;
            opacity: 0;
            margin: 10px auto 0;
            padding: 10px;
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: all .6s;
        }

        input[id^="spoiler"]:checked+label+.spoiler {
            height: auto;
            opacity: 1;
            padding: 10px;
        }
    </style>
    <meta charset="utf-8">
    <title>Report from the course sections</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico">
</head>

<body id="bg">

    <div style="text-align: center;">
        <header>
        <?php require __DIR__ . "../view/header.php" ?>
        </header>

        <article>

            <header>
                <h1 style="text-align: center;">A report from the course software development for the web</h1>
            </header>

            <section>
                <input type="checkbox" id="spoiler1" />
                <label for="spoiler1">S01</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-01-20</div>
                    <p>
                        This is my reflection on lecture one and creating github pages. The whole concept "github pages"
                        was
                        new
                        to me.
                        Otherwise I have
                        been using github for all my projects since the first year at HKR.
                        I have created a website before. In the last project course I was in the website group. We used
                        Vue.js
                        to create it.
                        In the
                        examnination course I will be working in Angular.
                        <p style="font-style: italic; text-align: center;">
                            Today I Learned
                        </p>

                        Today I learned about github pages. Im looking forward to learn vanilla javascript since all
                        I've
                        been
                        using before
                        has been
                        typescript.</p>
                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler2" />
                <label for="spoiler2">S02</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-01-22</div>
                    <p>
                        Today I've been working with CSS and HTML code. I do have some previous experience within both
                        of
                        them since I've
                        been working on websites before. When it comes to vanilla javascript, I dont have that much
                        experience because
                        I have previously been using typescript. A lot of things are the same though.
                        <p style="font-style: italic; text-align: center;">
                            Give a brief explanation of how the browser, the HTTP protocol and the web server interacts.
                        </p>
                        The browser sends an HTTP-request to a webserver which replies with an HTTP-response. The
                        response
                        is often
                        a new HTML document. The HTTP protocol is the most commonly used data transfer protocol on the
                        internet and
                        works on the
                        application layer. HTTP uses TCP so a handshake is necessary and a connection will be
                        established
                        between
                        the browser and the webserver.
                        <p style="font-style: italic; text-align: center;">
                            Today I Learned
                        </p>
                        Today I learned a lot about what is posible to do with only CSS. In a very short perios of time
                        I
                        found a lot of new features that I didn't know of.
                    </p>

                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler3" />
                <label for="spoiler3">S03</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-01-29</div>
                    <p>I find it very fun to work on this project. I spend a lot of time on it! Some of the code looks
                        like in
                        Angular or Vue but somehow I find it easier to learn vanilla Javascript. I would not say that I
                        have
                        previous experience in client side Javascript. Atleast not like this.
                        Javascript is not really comparable to other languages that I've used but some things are
                        similar and
                        that makes it a whole lot easier.
                        I aimed for the higest grade, mostly because I thought it was really fun. I have not been using
                        the code
                        examples very much. Instead I used google. Google is a quite good friend of mine!
                        <p style="font-style: italic; text-align: center;">
                            Today I Learned
                        </p>
                        Today I learned a lot. I don't even know where to begin. My overall knowledge of
                        javascript/html/css has
                        increased quite a bit. I also learned a lot about managing JSON files, that was probably the
                        most tricky bit
                        on this task.
                    </p>
                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler4" />
                <label for="spoiler4">S04</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-MM-DD</div>
                    <p>Here is the text for this section.</p>
                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler5" />
                <label for="spoiler5">S05</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-MM-DD</div>
                    <p>Here is the text for this section.</p>
                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler6" />
                <label for="spoiler6">S06</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-MM-DD</div>
                    <p>Here is the text for this section.</p>
                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler7" />
                <label for="spoiler7">S07</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-MM-DD</div>
                    <p>Here is the text for this section.</p>
                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler8" />
                <label for="spoiler8">S08</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-MM-DD</div>
                    <p>Here is the text for this section.</p>
                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler9" />
                <label for="spoiler9">S09</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-MM-DD</div>
                    <p>Here is the text for this section.</p>
                </div>
            </section>

            <section>
                <input type="checkbox" id="spoiler10" />
                <label for="spoiler10">S10</label>
                <div class="spoiler">
                    <div style="font-style: italic; font-size: large; text-align: center;">2020-MM-DD</div>
                    <p>Here is the text for this section.</p>
                </div>
            </section>

            <div id="duck" class="duck"></div>

            <?php require __DIR__ . "../view/footer.php" ?>

        </article>


        <script type="text/javascript" src="js/duck.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
</body>

</html>