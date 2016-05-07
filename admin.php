<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Open Admin Site</title>
    <link rel="stylesheet" href="/css/foundation.css">
    </head>

	<body>
        <div class="row">
            <div class="medium-8 medium-centered large-6 large-centered columns">
                <form method="post" action="/admin.php">
                  <div class="row column reset-form">
                    <h4 class="text-center">Admin Login</h4>
                    <div id="response" class="callout hide"></div>
                    <label>What is the password?
                      <input type="text" id="password" name="password" placeholder="Enter password here...">
                    </label>
                    <p><input type="submit" class="button expanded" value="Submit Password"></input></p>
                  </div>
                </form>
            </div>
        </div>

        <script src="/js/jquery.js"></script>
        <script src="/js/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
        <?php
			 if ($_POST["password"] == "secrets!") {
				echo('<script>$("#response").removeClass("hide alert").addClass("success").html(atob("ZmxnOmRvbnQtcG9zdC1zZWNyZXRz"));</script>');
			 } elseif ($_POST["password"] == "") {
				 echo('<script>$("#response").addClass("success alert").addClass("hide").html("");</script>');
			 } else {
				 echo('<script>$("#response").removeClass("hide success").addClass("alert").html("The password is not correct - try again");</script>');
			 }
         ?>
         </body>
         </html>

