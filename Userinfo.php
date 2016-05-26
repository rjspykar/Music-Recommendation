<html>
<head><link rel="stylesheet" href="style/style.css" >
<title>User List</title>

</head>
<body>
<div style="float:right;"><a href="index.php">Home</a></div>
<h1><center>User Info</center></h1>

<hr>
<?php

$file = file_get_contents('./Display_user_list.txt', true);
$t=explode(PHP_EOL, $file);
$l=count($t);
?>
<table style="height:100%;width:100%;" >
<tr style="background: rgb(219, 198, 219) none repeat scroll 0% 0%;">

<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
Serial No.</td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
User Id
</td>


</tr>


<?php
for($j=0;$j<$l;$j++)
{
echo '<tr>';
$z=explode(' ',$t[$j]);

?>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;"><?php echo $z[0]; ?></td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
<a href="Recom.php?value=<?php echo $z[1];?>" style="text-decoration:none;color:black;" title="get recomendation"> 

<?php echo $z[1]; ?></a></td>


<?php


echo '</tr>';

}?>

</table>
</body>
</html>
