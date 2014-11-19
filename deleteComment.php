<?php
require_once "Comments.php";
      
	 if($_SERVER['REQUEST_METHOD']=="GET"){
		 $id = (int)$_GET["id"]; 
		 $comment = Comments::find($id);
		 $comment->destroy();
		 header("Location:index.php");
	 }
?>