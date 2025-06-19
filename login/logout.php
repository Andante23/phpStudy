<?php
   session_start();
   session_destroy();
?>

<script>
	alert('로그아웃되었어요')
	location.replace("../login/login.php")
</script>