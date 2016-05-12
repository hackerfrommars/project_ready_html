<?php
if(!isset($_COOKIE['username'])){
  $notSet = "";
  $isSet = "hidden";
}
else{
  $notSet = "hidden";
  $isSet = "";
}

include 'functions.php';
$result = returnByScore();
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
    <style>
    a:visited{
      color:  black;
    }
    </style>

  </head>
  <body>
    <br>
    <table id = "main_body">
      <tr>
        <?php include 'mainBar.php'; ?>
      </tr>
      <br>
      <tr>
        <div class="threads">

          <?php
          while($row = mysqli_fetch_assoc($result)) {
            $url = $row['url'];
            $title = $row['title'];
            $score = $row['score'];
            $uid = $row['uid'];
            $username = findByUid($uid);
            $timeline = $row['timeline'];
            echo "<div id = 'thread'>";
            echo "<img src='upvote_big.gif' alt='up' id = 'upvote_pic' $isSet/>";
            echo "<div id = 'thread_title'>";
            echo "<a href=https:$url>$title</a>";
            echo "<br>";
            echo "<p id = 'thread_footer' >$score points by <a href='profile.php'>$username</a> | ";
            echo "$timeline | <a href='comments.php'>250 comments</a></p></div>";
            echo "</div>";
          } ?>

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
