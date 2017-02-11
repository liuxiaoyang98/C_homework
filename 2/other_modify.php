<html>
<body>
<?php
include "suoyin.php";
$n=1;
$name=$_POST[poem];
$title=fgets($name);
$poem="<th><?php echo " . fgets($name) . "?></th><tr>";
while(!feof($name)){
	if($n%2!=0){
		$poem=$poem . "<tr><td><?php echo " . $fgets($name) . "?></td>";
	} else {
		$poem=$poem . "<td><?php echo " . $fgets($name) . "?></td></tr>";
	}
}
fclose($name);
?>
<title><?php echo $title ?></title>
<div>
<table border="1"><tr><td>
<img src="http://d.hiphotos.baidu.com/baike/w%3D268%3Bg%3D0/sign=176befc2c8ef76093c0b9e9916e6c4f1/78310a55b319ebc4acda9dc68126cffc1f1716ca.jpg"/></td>
<?php echo $poem; ?>
</table>
</div>
<br>
<a href="getOther.php">返回上一页</a>
</body>
</html>
