<html>
<head>
<title>Top Chart</title>

<link rel="stylesheet" href="style/style.css" >
</head>
<body>
<div style="float:right;"><a href="index.php">Home</a></div>
<h1><center>Top Charts</center></h1>

<hr>
<?php
//error_reporting(-1);
$file = file_get_contents('./Top_charts.txt', true);
$t=explode(PHP_EOL, $file,10000);
//$l=count($t);
?>
<table style="height:100%;width:100%;">
<tr style="background: rgb(219, 198, 219) none repeat scroll 0% 0%;">
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
Artist Id
</td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
Artist Name
</td>
<td>
Playcount
</td>

</tr>


<?php
for($j=1;$j<9900;$j++)
{
echo '<tr>';
$z=explode(' ',$t[$j]);
$l=count($z);
//echo $l;

?>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;"><?php echo $z[0]; ?></td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
<?php 
for($i=1;$i<$l-1;$i++)
{echo $z[$i]." ";}

?>
</td>
<td><?php echo $z[$l-1]; ?></td>

<?php


echo '</tr>';

}?>

</table>
</body>
</html>
