<?php   
  include "db/dbconn.php";  
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/default.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Profile</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .profile-info {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .profile-info b {
            color: black;
        }

        .buttons{
          display:flex;
          justify-content:end;
        }
        .buttons a {
            font-size: 1rem;
            color:white;
            text-decoration: none;
            margin-right: 20px;
        }
        .buttons a:hover {
            text-decoration: underline;
        }
        header {
            padding: 10px 20px;
          
            color: black;
        }
        header a {
            color: black;
            text-decoration: none;
            font-size: 1.2rem;
        }
        header a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <a href="../home.php">Home</a>
</header>

<div class="container">
    <h1 class="header">My Profile</h1>
    <div class="profile-info">
        <p>이름: <b><?php echo $_SESSION['nickname']; ?></b></p>
    </div>

    <div class="buttons">
        <a href="../profile/changePw.php" class="btn btn-primary">비밀번호 변경</a>
        <a href="../profile/profileDelete.php" class="btn btn-danger">계정 삭제</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
