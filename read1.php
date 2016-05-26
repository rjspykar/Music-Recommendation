<html>
<link rel="stylesheet" href="style/style.css" >
<body>
<?php
//error_reporting(-1);
$file = file_get_contents('./Top_charts.txt', true);
$t=explode(PHP_EOL, $file,10000);
//$l=count($t);
?>
<table style="height:100%;width:100%;">
<tr>
<td>
Artist Id
</td>
<td>
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
<td><?php echo $z[0]; ?></td>
<td>
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
