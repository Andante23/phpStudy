<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>비밀번호 변경</title>
    <link href="../style/default.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 100px;
            max-width: 500px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 20px;
        }
        .form-button {
            width: 100%;
            font-size: 1.2rem;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
        }
        .form-button:hover {
            background-color: #0056b3;
            cursor: pointer;
        }
        .form-button:focus {
            outline: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="form-title">비밀번호 변경</h2>
    <form method="post" action="../profile/changePwPro.php">
        <div class="mb-3">
            <input type="password" name="curPw" id="curPw" class="form-control" placeholder="현재 비밀번호" required>
        </div>
        <div class="mb-3">
            <input type="password" name="newPw" id="newPw" class="form-control" placeholder="새 비밀번호" required>
        </div>
        <div class="mb-3">
            <input type="password" name="confirmPw" id="confirmPw" class="form-control" placeholder="새 비밀번호 확인" required>
        </div>
        <button type="submit" class="form-button">제출</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
