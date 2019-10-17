<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
	Cari : <input type="text" name="cari"> 
			<input type="submit" name="bt1" value="Cari"><br><br>
	Group : <select name="group">
		<option value="game console">game console</option>
		<option value="phone">phone</option>
	</select> <input type="submit" name="bt2" value="Group"><br><br>
</form>

<?php

$barang = array(array("barang"=>"ps4","kategori"=>"game console","harga"=>4500000),
				array("barang"=>"iphone X","kategori"=>"phone","harga"=>7500000),
				array("barang"=>"vivo v14","kategori"=>"phone","harga"=>3500000),
				array("barang"=>"nintendo switch","kategori"=>"game console","harga"=>4100000));
				
	echo "<table border='1' cellpadding='0' cellspacing='0'>";
	echo "<tr><td> Barang </td><td> Kategori </td><td> Harga </td></tr>";

if(isset($_GET['bt1']) && $_GET['cari']!=""){
	$cari=$_GET['cari'];
	foreach($barang as $row){
		if(strstr($row["barang"],$cari)){
			echo "<tr><td>".$row["barang"]."</td><td>".$row["kategori"]
			    ."</td><td>".$row['harga']."</td></tr>";
		}
	}
	
}else if(isset($_GET['bt2'])){
	$total=0;
	foreach($barang as $row){
		if($_GET['group']==$row["kategori"]){
			echo "<tr><td>".$row["barang"]."</td><td>".$row["kategori"]
			    ."</td><td>".$row['harga']."</td></tr>";
			$total+=$row['harga'];
		}
	}
	echo "<tr><td colspan='2' align='right'>Total : </td><td>".$total."</td></tr>";
	
}else{
	
	foreach($barang as $row){
		echo "<tr><td>".$row["barang"]."</td><td>".$row["kategori"]
		    ."</td><td>".$row['harga']."</td></tr>";
	}
	
}

	echo "</table>";
?>
</body>
</html>