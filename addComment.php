<?php
require_once "Comments.php";
 
	 if($_SERVER['REQUEST_METHOD']=="POST"){
		if(
			isset($_POST['author']) && !empty($_POST['author']) &&
			isset($_POST['comment']) && !empty($_POST['comment'])  
		){
			 // TODO: filter incoming data
			$author = stripslashes(trim(htmlspecialchars($_POST['author'],ENT_QUOTES)));
			$comment = stripslashes(trim(htmlspecialchars($_POST['comment'],ENT_QUOTES)));
			$comments->author = $author ;
			$comments->content = $comment;
			$comments->save();
		     
	     }
	 }
	 header("Location:index.php");


?>