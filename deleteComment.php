<?php
require_once "Comments.php";
     // TODO: filter incoming data
	 if($_SERVER['REQUEST_METHOD']=="GET"){
		 $id = $_GET["id"]; 
		 $comments->destroy($id);
		 header("Location:index.php");
	 }
?>