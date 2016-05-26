<html>
<head>
<link rel="stylesheet" href="style/style.css" >
<title>Main Dataset</title>
</head>
<body>
<div style="float:right;"><a href="index.php">Home</a></div>
<h1><center>Main Dataset</center></h1>

<hr>

<?php
//error_reporting(-1);
$file = file_get_contents('./User_data.txt', true);
$t=explode(PHP_EOL, $file,10000);
//$l=count($t);
?>
<table style="height:100%;width:100%;">
<tr style="background: rgb(219, 198, 219) none repeat scroll 0% 0%;">
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
User Id
</td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
Artist ID
</td>
<td>
Playcount
</td>

</tr>


<?php
for($i=1;$i<9900;$i++)
{
echo '<tr>';
$z=explode(' ',$t[$i]);
?>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;"><?php echo $z[0]; ?></td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;"><?php echo $z[1]; ?></td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;"><?php echo $z[2]; ?></td>
<?php
echo '</tr>';

}?>

</table>
</body>
</html>
