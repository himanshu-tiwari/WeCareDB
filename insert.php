<?php
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','test123');
	define('DB','myDatabase');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$bloodsugarlevel = $_POST['bloodsugarlevel'];
	$bloodcount = $_POST['bloodcount'];
	$bloodpressureul = $_POST['bloodpressureul'];
	$bloodpressurell = $_POST['bloodpressurell'];
	$ironlevel = $_POST['ironlevel'];
	$cholestrol = $_POST['cholestrol'];
	$pulse = $_POST['pulse'];
	$bodymassindex = $_POST['bodymassindex'];
	
	$sql = "insert into users 
			(bloodsugarlevel, 
			 bloodcount,
			 bloodpressureul,
			 bloodpressurell,
			 ironlevel,
			 cholestrol,
			 pulse, 
			 bodymassindex
			 ) 
			values 
			('$bloodsugarlevel',
			 '$bloodcount',
			 '$bloodpressureul',
			 '$bloodpressurell',
			 '$ironlevel',
			 '$cholestrol',
			 '$pulse',
			 '$bodymassindex'
			 )";
	
	if(mysqli_query($con, $sql)){
		echo 'success';
	}
?>