<?php
foreach ($biodata->result_array() as $row) {
	echo $row['id']."<br>";
	echo $row['nama']."<br>";
	echo $row['nim']."<br>";
	echo $row['alamat']."<br>";
}

?>