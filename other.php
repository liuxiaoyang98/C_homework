<html>
<body>
<?php
include "suoyin.php";
$name=$_POST[poem];
$file=file("shici/$name.txt");
fclose($file);
?>
<title><?php echo $file[0] ?></title>
<div>
<table border="1"><tr><td>
<img src="http://d.hiphotos.baidu.com/baike/w%3D268%3Bg%3D0/sign=176befc2c8ef76093c0b9e9916e6c4f1/78310a55b319ebc4acda9dc68126cffc1f1716ca.jpg"/></td>
<th><?php echo $file[1];?></th></tr>
<tr><td><?php echo $file[2] ?></td><td><?php echo $file[3] ?></td></tr>
<tr><td><?php echo $file[4] ?></td><td><?php echo $file[5] ?></td></tr>
</table>
</div>
<br>
<a href="getOther.php">返回上一页</a>
</body>
</html>
