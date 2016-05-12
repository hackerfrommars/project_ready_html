<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hacker News</title>
    <link rel="icon" href="icon.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <table>
      <tr>
        <table class = "main_bar">
          <tr>
            <td id = "main_pic_container"><a href="index.php"><img src="mainPic.gif" id = "main_pic"></a></td>
            <td id="main_menu_container">
              <span>
                <p style="margin-left: 5px; display:inline; font-weight:bold;">Welcome Page</p>
              </span>
            </td>
            <td id = "login">
              <div class="dropdown">
                <span>Register</span>
                <div class="dropdown-content">
                  <form class = "login_drop" action="index.php" method="post">
                    username <input type="text" name="username" id = "login_inf" class="input_line"><br>
                    password <input type="password" name="password" id = "login_inf" class="input_line"><br>
                    repeat password <input type="password" name="username" id = "login_inf" class="input_line"><br>
                    <input type="submit" name="submit_thread" id="login_submit">
                  </form>
                </div>
              </div>
               |
              <div class="dropdown">
                <span>login</span>
                <div class="dropdown-content">
                  <form class = "login_drop" action="index.php" method="post">
                    username <input type="text" name="username" id = "login_inf" class="input_line"><br>
                    password <input type="password" name="password" id = "login_inf" class="input_line"><br>
                    <input type="submit" name="submit_thread" id="login_submit" value="Sign in">
                  </form>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </tr>
      <tr>
        <div class="threads">
          <div id = "thread">
            <!-- comments -->
          </div>
        </div>
      </tr>
      <tr>
        <hr>
      </tr>
      <tr>
        <footer>
            &copy 2016 Yerbolat Amangeldi Inc.</br> All Rights Reserved.
          </footer>
      </tr>
    </table>
  </body>
</html>
