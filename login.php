<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
   <?php
   session_start();
   $host = '127.0.0.1';

   $user = 'root';
   
   $pw = 'root';
   
   $db_name = 'login';
      $mysqli = new mysqli($host, $user, $pw, $db_name); //db 연결
      
      //login.php에서 입력받은 id, password
      $username = $_POST['id'];
      $userpass = $_POST['password'];
      
      $q = "SELECT * FROM student WHERE id = '$username' AND password = '$userpass'";
      $result = $mysqli->query($q);
      $row = $result->fetch_array(MYSQLI_ASSOC);
      
      //결과가 존재하면 세션 생성
      if ($row != null) {
         $_SESSION['username'] = $row['id'];
         $_SESSION['name'] = $row['name'];
         echo "<script>alert('{$_SESSION['username']}님 환영합니다.')</script>";
         echo "<script>location.replace('logedpage.php');</script>";
         exit;
      }
      
      //결과가 존재하지 않으면 로그인 실패
      if($row == null){
         echo "<script>alert('존재하지 않는 정보입니다.')</script>";
         echo "<script>location.replace('homepage.php');</script>";
         exit;
      }
      ?>
   </body>