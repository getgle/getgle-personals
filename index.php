<head>
<style>
#post{
	padding-left:20px;
	margin:5px;
}

#category{
background:#ddddff;
margin-bottom:0px;
display:inline-block;
color:#000;
border:#f1f1ff solid;
border-radius: 100px;
padding:2px;
margin:5px;
}
</style>
</head>

<body>
<span style="font-size:60px;color:#6666dd">Getgle Personals</span> <a href="post.php" style="">make a listing</a>
<hr>
<span id="category">Internet Services</span><br>
<?php
$list = scandir("is/");
for($i = 2; $i < count($list); $i++){
echo "<a id='post' href='is/" . $list[$i] . "'>" . htmlspecialchars(file_get_contents("is/" . $list[$i] . "/title.txt")) . "</a><br>";
}
?>
<span id="category">Platonic Relationship</span><br>
<?php
$list = scandir("pr/");
for($i = 2; $i < count($list); $i++){
echo "<a id='post' href='pr/" . $list[$i] . "'>" . htmlspecialchars(file_get_contents("pr/" . $list[$i] . "/title.txt")) . "</a><br>";
}
?>
<span id="category">Man Seeking Man</span><br>
<?php
$list = scandir("msm/");
for($i = 2; $i < count($list); $i++){
echo "<a id='post' href='msm/" . $list[$i] . "'>" . htmlspecialchars(file_get_contents("msm/" . $list[$i] . "/title.txt")) . "</a><br>";
}
?>
<span id="category">Man Seeking Woman</span><br>
<?php
$list = scandir("msw/");
for($i = 2; $i < count($list); $i++){
echo "<a id='post' href='msw/" . $list[$i] . "'>" . htmlspecialchars(file_get_contents("msw/" . $list[$i] . "/title.txt")) . "</a><br>";
}
?>
<span id="category">Woman Seeking Woman</span>
<?php
$list = scandir("wsw/");
for($i = 2; $i < count($list); $i++){
echo "<a id='post' href='wsw/" . $list[$i] . "'>" . htmlspecialchars(file_get_contents("wsw/" . $list[$i] . "/title.txt")) . "</a><br>";
}
?>
<hr>
<span>
<i>Getgle Personals is intended for 18+ users, user discretion is advised.  Getgle does not endorse and is not responsible for any user postings made on this page.</i><br>
report law-breaking posts to admin@getgle.org
</span>
</body>