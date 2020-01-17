<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_keywords.css">
	<script type="text/javascript" src="autocomplete.js"></script>
	<title></title>
</head>
<body>


   <div class="submit_form" id="1" >
 	<?php
    /*var_dump($_POST);
    var_dump($_FILES);
    die*/;
 	 //$file = file('access.log');
 	if (isset($_POST['word1']) ) 
 	{	
     $word_search = $_POST['word1'];

     //$file = $_POST['myFile'];

 	  $file = file('C:\Users\user\Downloads\Telegram Desktop\\'.$_POST['myFile']);
 	  foreach ($file as $key => $value) 
 	  {
 	  	if ( stripos($value,$word_search,0) !== false ) 
 	  	{
 	  		echo $key.'-'.$value."<br>";
 	  	}
 	  }
 	 } 
 	?>
   </div>

 <form action="" method="POST">
 	<div class="complete" style="width: 300px;"  >
        <input type="file" name="myFile" id="myFile" required="required" >
        <!--<input type="submit" name="btn">-->
    </div>
     <div class="word_complete" style="width: 300px;"  >
 	 <input type="text" name="word1" id="word1" placeholder="Enter your search text..." required="required" >
     <!--<input type="submit">-->
     </div>
     <button type="submit">Search</button>
 </form>	
    <script type="text/javascript">
		var keywords = ["Android", "iPhone", "Windows", "Linux"];
		autocomplete(document.getElementById("word1"), keywords);
	</script>
</body>
</html>

