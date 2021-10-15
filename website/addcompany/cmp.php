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
      <form action="http://localhost/website/addcompany/addcmp.php" method="post">
        <h1>Add Company</h1>
        <input type="text" placeholder="Company Name" name="cn" class="txtb" required>
        <input type="text" placeholder="Location" name="loc" class="txtb" required/>
        <input type="text" placeholder="Job Offered" name="job" class="txtb" required>
        <input type="text" placeholder="Package" name="pack" class="txtb" required>
        <input type="submit" value="Add Company" class="signup-btn" href="#">
      </form>
    </div>
  </body>
</html>
