<?php
$pi = '3,14159265358979323846264338327950288419716939937510582097494459230781640628620899862803482534211706798214808651328230664709384460955058223172535940812848111745028410270193852110555964462294895493038196442881097566593344612847564823378678316527120190914564856692346034861045432664821339360726024914127372458700660631558817488152092096282925409171536436789259036001133053054882046652138414695194151160943305727036575959195309218611738193261179310511854807446237996274956735188575272489122793818301194912983367336244065664308602139494639522473719070217986094370277053921717629317675238467481846766940513200056812714526356082778577134275778960917363717872146844090122495343014654958537105079227968925892354201995611212902196086403441815981362977477130996051870721134999999837297804995105973173281609631859502445945534690830264252230825334468503526193118817101000313783875288658753320838142061717766914730359825349042875546873115956286388235378759375195778185778053217122680661300192787661119590921';

if ($_POST['number'] > 0) {
  $num=substr($pi, 2, $_POST['number']);
  $ech = '3,' . $num; ?>
  <script>alert('<?=$ech?>');</script>
  <?php } ?>
<!DOCTYPE html>
	<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">
		<title>Колличество цифр после запятой</title>
	</head>
	<body>
    <div id="container">
  		<form action="index.php" method="post">
  			<label for="name">Подсчет PI:</label>
  			<input name="number" type="name">
  			<p><a href="#">Введите колличество цифр после запятой</a></p>
  			<div id="lower">
  				<input type="submit" value="Посчитать">
  			</div>
  		</form>
  	</div>
	</body>
</html>
