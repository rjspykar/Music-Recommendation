<html>
<head><link rel="stylesheet" href="style/style.css" >
<title>Artist Info</title>

</head>
<body>
<div style="float:right;"><a href="index.php">Home</a></div>
<h1><center>Artist Info</center></h1>

<hr>
<?php
//error_reporting(-1);
$file = file_get_contents('./Artist_data.txt', true);
$t=explode(PHP_EOL, $file,20000);
//$l=count($t);
?>
<table style="height:100%;width:100%;" >
<tr style="background: rgb(219, 198, 219) none repeat scroll 0% 0%;">
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
Artist Id
</td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
Artist Name
</td>

</tr>


<?php
for($j=1;$j<19900;$j++)
{
echo '<tr>';
$z=explode('	',$t[$j]);
$l=count($z);
//echo $l;

?>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;"><?php echo $z[0]; ?></td>
<td style="border-left: 1px solid #cdd0d4;border-bottom: 1px solid #cdd0d4;">
<a href="https://www.youtube.com/results?search_query=<?php for($i=1;$i<$l;$i++)
{echo $z[$i].' ';}  ?>" title="Go to Youtube" style="text-decoration:none;color:black;">
<?php 
for($i=1;$i<$l;$i++)
{echo $z[$i]." ";}

?>
</a>
</td>

<?php


echo '</tr>';

}?>

</table>
</body>
</html>
