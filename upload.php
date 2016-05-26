<html>
<head>
<link rel="stylesheet" href="style/style.css" >
<title>Recommendation</title>

</head>
<body>
<div style="float:right;"><a href="index.php">Home</a></div>
<h1><center>Music Recommendations</center></h1>

<hr>

<?php
$value=$_POST['input'];
//$menu=$_POST['iselect'];

$cmd="./music '{$value}' ";
/*switch($menu){
case 'user':
exec('',$txt);
break;
case 'artist':
exec('',$out);
break;
case 'chart';
exec($cmd,$out);
break;

}*/
exec($cmd,$out);?>
<table style="width:100%;">
<tr style="background: rgb(219, 198, 219) none repeat scroll 0% 0%;">
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4"><b>Artist Id</b></td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4"><b>Artist Name</b></td>

</tr>
<?php
foreach($out as $new){?>
<tr>
<?php
$t=explode(" ",$new);
$l=count($t);
?>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4"><?php echo $t[0];?></td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4"><?php //echo $t[1];
for($i=1;$i<$l;$i++)
{echo $t[$i]." ";}


?></td>

<?php

?> </tr> <?php
}
?>
</table>
</body>
</html>
