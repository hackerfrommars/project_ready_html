<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fucking bitch</title>
  </head>
  <body>


    <form action="validateTester.php" method="post" onsubmit="return validateForm()" name="tester">
      <input type="email" name="email" value="" required>
      <!-- <input type="password" name="rePassword" value="" required> -->
      <input type="submit" name="submit" value="Submit">
    </form>
    <script type="text/javascript">
      function validateForm(){
          // var username = document.forms["tester"]["username"].value;
          var email = document.forms["tester"]["email"].value;
          // var password = document.forms["tester"]["password"].value;
          // var rePassword = document.forms["tester"]["rePassword"].value;
      // Username validation
      // working
          // alert(password);
          // alert(rePassword);
          // if (!validateUname(username)){
          //   alert("Username should be only english alphabet letters and numbers");
          //   return false;
          // }
      // Email validation
      // working
      alert(email);
          if(!validateEmail(email)){
            alert("Wrong email address");
            return false;
          }
          else{
            alert("all's good");
          }
      // Password validation
      // working
          // if (!validatePass(password)){
          //   alert("Password lenght must be at least 6 symbols and should not exceed 18 symbols");
          //   return false;
          // }
          // else{
          //   alert("all's good pass");
          // }
      // Re Password validation
      // working
          // if(password != rePassword){
          //   alert("passwords are not the same");
          //   return false;
          // }
      }
      function validateUname(username){
          var re = /^[a-zA-Z0-9]{1,16}$/;
          if (re.test(username)){
              alert("legit");
              return true;
          }
          else {
              alert("not legit");
              return false;
          }
      }
      function validateEmail(email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
      }
      function validatePass(password){
        if (password.length > 18 || password.length < 6){
          return false;
        }
        else{
          return true;
        }
      }

    </script>
  </body>
</html>
