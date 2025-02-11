<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $number1 = $_POST["num1"];
   $number2 = $_POST["num2"];
   $oper = $_POST["cal_select"];

   switch ($oper) {
   	case "+":
   		 $res = $number1 + $number2;
   	break;

    case "-":
         $res = $number1 - $number2;
    break;

    case "/":
         if($number2 == 0){
         	$res = "0으로 나눌수 없어요";
         }else{
         	$res = $number1 / $number2;
         }
    break;

    case "%":
          if($number2 == 0){
         	$res = "0으로 나눌수 없어요";
         }else{
         	$res = $number1 % $number2;
         }
    break;


    case "*":
         $res = $number1 * $number2;
      break;


    default:
          $res = "no result";
    break;  
   }

    
    echo "결과". $res;
}
?>