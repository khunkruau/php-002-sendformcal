<html>
<head>
	<title>รับข้อมูลฟอร์ม คำนวณ</title>
</head>
<body>
<h4>#หน้ารับข้อมูลฟอร์ม คำนวณ</h4>
<?php
	$rfw = $_POST["fw"];
	$rfh = $_POST["fh"];
	$area = $rfw*$rfh;
	echo "กว้าง ".$rfw."<br>";
	echo "ยาว ".$rfh."<br>";
	echo "พื้นที่สี่เหลี่ยม เท่ากับ ".$area." ตาราง ซม.";
?>
</body>
</html>