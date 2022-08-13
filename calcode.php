<?php
$f=$_POST['f'];
//echo $f;
$s=$_POST['s'];
//echo $s;
$op=$_POST['a'];
//echo $op;
if($op=='add')
{
 $res=$f+$s;
 echo "$res";
}
if($op=='sub')
{
 $res=$f-$s;
 echo $res;
}
if($op=='mul')
{
 $res=$f*$s;
 echo $res;
}
if($op=='div')
{
 $res=$f/$s;
 echo $res;
}
?>