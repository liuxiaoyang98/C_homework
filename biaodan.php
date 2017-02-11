<html>
<head>
<style>
.error{color: #FF0000;}
</style>
</head>
<body>
<div><?Php include 'suoyin.php'?>
<?php
$nameErr=$telErr=$QQErr=$emailErr="";
$name=$email=$tel=$QQ=$email="";
if ($_SERVER[REQUEST_METHOD] =="POST"){
	if (empty($_POST["name"])){$nameErr="请填写姓名";}
	if (empty($_POST["email"])) {
		$emailErr="请填写邮箱";
	}else{
		$email=test_input($_POST["email"]);
		if(!preg_match("/([\w\-]+@[\w\-]+\.[\w\-]+)/",$email)){
			$emailErr="email格式无效";
		}
	}
	if (empty($_POST["tel"])){
		$telErr="填写你的电话";
	} else {
		$tel=test_input($_POST["tel"]);
		if(!preg_match("/(^[0-9\-]*$)/",$tel)){
			$telErr="电话填写错误";
		}
	}
	if (empty($_POST["QQ"])) {
		$QQErr="填写你的QQ";
	} else {
		$QQ=test_input($_POST["QQ"]);
		if(!preg_match("/(^[0-9]*$)/",$QQ)){
			$QQErr="QQ输入错误";	
		}
	}
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
你的名字:<input type="text" name="name" >
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
电话号码:<input type="text" name="tel">
<span class="error">*<?php echo $telErr;?></span>
<br><br>
你的QQ号码:<input type="text" name="QQ">
<span class="error">*<?php echo $QQErr;?></span>
<br><br>		
你的email地址<input type="text" name="email">
<span class="error">*<?php echo $emailErr;?></span>
<br><br>
<input type="submit" name="submit" value="提交">
<div class="email">
<?php 
$to=$email;
$subject="我们已经收到你的反馈" ;
$message="但是我们不会做出任何改变";
$form="2212856568@qq.com";
mail($to,$subject,$message,$from);
echo "邮件已经发送"
?>
</form>
</body>
</html>
