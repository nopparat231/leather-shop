<meta charset="UTF-8" />
<?php
include('../Connections/condb.php');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$t_id = $_GET['t_id'];


mysql_select_db($database_condb);
$sql ="DELETE FROM tbl_type WHERE t_id=$t_id";

		$result = mysql_query($sql, $condb) or die("Error in query : $sql" .mysql_error());


		mysql_close();

		if($result){
			echo "<script>";
			echo "window.location ='list_product_type.php'; ";
			echo "</script>";
		} else {

			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='list_product_type.php'; ";
			echo "</script>";
		}



?>
