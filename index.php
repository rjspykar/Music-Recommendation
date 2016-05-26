<html>
<head>
<title>Music Recommeder</title>
<style>
.button{
display: block;
    width: 115px;
    height: 25px;
    background: #4E9CAF;
    padding: 30px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    position:relative; 
    margin:10px;

}

</style>
<link rel="stylesheet" href="style/style.css" >
</head>
<body>


<h1 align = center>
	<title> Music Recommendation Engine </title>
	<head> Music Recommendation Engine </head>
</h1>


<hr/>



<div>

<form action="upload.php" method="POST">

<input type='text' id="input" name="input">
<input type="submit" value="Recommend">
</form>
<a href="User_Artist_Playcount.php"  class="button">Main Dataset</a>
<a href="Artist_Info.php"  class="button">Artist Details</a>
<a href="Topcharts.php"  class="button">Top Charts</a>
<a href="Userinfo.php"  class="button">User Info</a>

</div>





</body>

</html>
