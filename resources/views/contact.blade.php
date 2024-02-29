<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>contact</title>
        <style>
            /* Add a black background color to the top navigation */
            .topnav{
                background-color: #333; 
                overflow: hidden;
            }

            /* Style the links inside the navigation bar */
            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            /* Change the color of links on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Add a color to the active/current link */
            .topnav a.active {
                background-color: #04AA6D;
                color: white;
            }

            /*css for the form*/
            form { 
                max-width: 500px; 
                padding: 20px; 
                border: 1px solid #ccc; 
                border-radius: 5px; 
            }
            input, textarea { 
                width: 100%;
                margin-bottom: 20px; 
                padding: 10px; 
                border: 1px solid #ccc; 
                border-radius: 5px; 
                box-sizing: border-box;
            }
            select {
                width: 50%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 20px;
                box-sizing: border-box;
            }
            .button-container {
                display: flex;
                justify-content: space-between;
                gap: 10px;
            }
            input[type="submit"], input[type=button] { 
                cursor: pointer; 
                flex: 1;
                box-sizing: border-box;
            }

        </style>
    </head>
    <body>
        <header>
            <div class="topnav">
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ url('/holiday') }}">Holiday</a>
            <a  href="{{ url('/man') }}">ManagerPage</a>
            <a class="active" href="{{ url('/contact') }}">Contact</a>
            <a href="#about">About</a>
            </div>
        </header>

        <main>
            <h1>Contact Form</h1>
            <p>Here you can ask us questions.</p>

            <form id="contactForm">
                <div>
                    <label for="type">Type:</label>
                    <select id="type" name="type">
                        <option value="Question">Question</option>
                        <option value="Comment">Comment</option>
                        <!-- Possible other names will be used for these categories-->
                    </select>
                </div>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                <!-- This part is temporary, later the script will fetch the email and first + last name from the currently logged in person and use those. -->

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Question/Comment:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <div class="button-container">
                    <input type="button" value="Clear" onclick="document.getElementById('contactForm').reset();">
                    <input type="submit" value="Send" onclick="sendEmail(); return false;">
                </div>
            </form>
        </main>

        <script>
            function sendEmail() {
                var type = document.getElementById('type').value;
                var email = document.getElementById('email').value;
                var subjectInput = document.getElementById('subject').value;
                var message = document.getElementById('message').value;
                var mailtoLink = 'mailto:hr@energyCompany.com';

                var subject = "Employee " + type + " - " + subjectInput;
                var emailBody = "Greetings HR,\n\n" + "text text text:\n" + message + "\n\n" + "Kind regards,\n" + email;
                // Body of email might be changed later on. different greetings, regards and content. It will make a contructed line that includes the date and time the request was posted etc.

                mailtoLink += '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(emailBody);
                
                window.location.href = mailtoLink;
                // Eventually we will change this so it doesn't open your own email and makes it. It will construct a full email itself + send it, without having to do anything yourself.
                // it will also be sent from a hr-ish email adress which is why eventually the users email-address will also be presented in the email.
            }
        </script>
    </body>
</html>