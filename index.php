<?php  
require_once "Comments.php";
$rows = Comments::find(); 
//$tt = Comments::find(352);
//$tt->author = "andrey abramow";
//$tt->save();

?>
<html>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="b-container">
	<div class="b-container__comments">
	<div class="b-comments">
		<div class="b-comments__header">
			<h2>Comments list</h2>
		</div>
		<div class="b-comments__body">
			<div class="b-body">
				<fieldset>
					<legend>Comments:</legend>
			         
					<?php
							if($rows){
								 foreach($rows as $row){
									$author  = $row->author;
									$comment = $row->content;
									$id      = $row->id;
									
									echo "<div class='b-body__item'>";
									echo "<h3 class='b-body__item-name'>$author</h3>";
									echo $comment;
									echo "<a class='b-body__item-delete' href='deleteComment.php?id=$id'>Delete comment</a>";
									echo " </div>";
								}	 
							}else{
								echo "There are not comments!";
							
							}
					?>	
                   			
				</fieldset>      
		    </div>
		</div>
		<div class="b-comments__form">
		    <h2>Add new comment</h2>
			<div class="b-form">
			   <form method="POST" action="addComment.php">
					<input class="b-comments__formItem" type="text" name="author" placeholder="Name"><br>
					<textarea class="b-comments__formItem" name="comment" placeholder="Comment text" ></textarea>
					<input class="b-comments__formItem-button" type="submit" value="Add comment">
			   </form>
			</div>	
		</div>
		</div>
	 </div>
 </div>
</body>
</html>