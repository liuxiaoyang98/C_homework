#!/usr/bin/php
<?php
for($x=1;;$x++){
if($x%2==1 
and $x%3==0
and $x%4==1
and $x%5==4
and $x%6==3
and $x%7==0
and $x%8==1
and $x%9==0){
        break;
 }
}
echo $x;
