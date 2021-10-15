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
      <form action="tr.php" method="post">
        <h1>Training</h1>
        <input type="text" placeholder="USN" name="usn" class="txtb"  pattern=[A-Za-z0-9]{10} required>
        <input type="text" placeholder="Soft Skills" name="ss" class="txtb" >
        <input type="text" placeholder="Personal Development" name="pd" class="txtb" >
        <input type="text" placeholder="Aptitude" name="ap" class="txtb" >
        <input type="text" placeholder="Technical" name="te" class="txtb" >
        <input type="text" placeholder="CGPA" name="cgpa" class="txtb" >
        <input type="submit" value="Update" class="signup-btn" href="#">
      </form>
    </div>
  </body>
</html>
