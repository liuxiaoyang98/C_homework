<html>
<head>
</head>
<body>

<?php
$w1=$_POST["word-2"];
$w2=$_POST["word-4"];
if ($w1==疑是地上霜){
echo "question.1 is right! <br>";
}
else{
echo "question.1 is false! <br>";
}

if ($w2==低头思故乡){
echo "question.2 is right!";
}
else{
echo "question.2 is false!";

}
?>

<a href="libai.html">返回主页 </a>
<button type="button" onclick="alert('床前明月光  疑是地上霜  举头望明月  低头思故乡。')">显示正确答案</button>
</body>
</html>
