<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  </head>
  <body>

    <div class="signup-form">
      <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <input type="text" placeholder="Full Name" name="name" class="txtb" tabindex="-1" autofocus required>
        <input type="email" placeholder="Email" name="email" class="txtb" tabindex="-1" autofocus required/>
        <input type="password" placeholder="Password" name="pwd" class="txtb" pattern={6} tabindex="-1" autofocus required>
        <input type="Date" placeholder="Date of Birth [YYYY-MM-DD]" name="dob" class="txtb" pattern=[0-9,-]{10} tabindex="-1" autofocus required>
        <input type="text" placeholder="USN" name="usn" class="txtb"  pattern=[A-Za-z0-9]{10} tabindex="-1" autofocus required>
        <input type="Number" placeholder="Semester" name="sem" class="txtb" pattern=[1-8]{1} tabindex="-1" autofocus required>
        <input type="text" placeholder="Branch" name="branch" class="txtb" tabindex="-1" autofocus required>
        <input type="Number" placeholder="Phone Number" name="phone" class="txtb" pattern="[0-9]{10}" tabindex="-1" autofocus required>
        <input type="submit" value="Create Account" class="signup-btn" tabindex="-1" autofocus href="#">
        <a href="http://localhost/website/login_form/login.php">Already Have one ?</a>
        <script>
            document.onkeydown = function (t) {
             if(t.which == 9){
              return false;
             }
            }
            </script>
      </form>
    </div>
  </body>
</html>
