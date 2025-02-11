

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>계산기</title>
</head>
<body>
    <form method="POST" action="cal.php">
        <p><input id="num1" name="num1" type="number"  min="0"></p>
        <p><input id="num2" name="num2" type="number" min="0">
        </p>
        
        <select id="cal_select" name="cal_select">
             
            <option value="">--Please choose an option--</option>
          <option value="+">+</option>
            <option value="-" >-</option>
            <option value="/">/</option>
            <option value="*">*</option>
             <option value="%">%</option>
        </select>
        <input type="submit" value="제출">
        <input type="reset"  value="제거">
    </form>

    
   
</body>
</html>
