<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
   <?php
   session_start();
   $username = $_SESSION['username'];
   $name = $_SESSION['name'];
   $host = '127.0.0.1';

   $user = 'root';
   
   $pw = 'root';
   
   $db_name = 'login';
      $mysqli = new mysqli($host, $user, $pw, $db_name); //db 연결
      
      $q = "SELECT * FROM state WHERE id = '$username'";
      $result = $mysqli->query($q);

      while($row = mysqli_fetch_assoc($result)){
         $attendance = $row['attendance'];
         $absence = $row['absence'];
         $late = $row['late'];
         $vacated = $row['vacated'];
         $time = $row['time'];
      }
      
      ?>
</body>
</html>
