<?php
if(!isset($_COOKIE['username'])){
  header("Location:index.php");
}
else{
  $notSet = "hidden";
  $isSet = "";

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hacker News</title>
    <link rel="icon" href="icon.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>
  <body>
    <br>
    <?php include 'mainBar.php'; ?>
          </tr>
      </tr>
      <br>
      <tr>
        <div id = "profile_container">
        <table class="profile">
          <tr>
            <td>
              user:
            </td>
            <td>
              hackerfrommars
            </td>
          </tr>
          <tr>
            <td>
              created:
            </td>
            <td>
              28 days ago
            </td>
          </tr>
          <tr>
            <td>
              about:
            </td>
            <td>
              <textarea name="name" rows="4" cols="40" placeholder="Type information about you" ></textarea>
            </td>
          </tr>
          <tr >
            <td id = "tabbed">
              <a href="login.php">change password</a>
            </td>
          </tr>
          <tr >
            <td id = "tabbed">
              <a href="index.php">change email</a>
            </td>
          </tr>
          <tr>
            <td id = "tabbed">
              <a href="index.php">submissions</a>
            </td>
          </tr>
          <tr>
            <td id = "tabbed">
              <a href="comments.php">comments</a>
            </td>
          </tr>
        </table>
        <button type="submit" class="btn btn-default" style="background-color:#FF8C05;color:white;margin-left:5%;margin-top:1%;" onclick="index.php">Save</button>
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
