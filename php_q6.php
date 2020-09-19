<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    input[type=submit] {
  background-color: #4CAF50;
  color: white;
 margin-top:10px;
  padding: 8px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

    </style>

</head>
<body>
        <form method = 'post' > 
			<h5 style="color:#4d0000; ">SELECT SUJECTS</h5> 
            <div class="col-75">
			<select name = 'subject[]' multiple size = 6 style="width:200px; "> 
				<option value = 'html'>HTML5</option> 
				<option value = 'css'>CSS3</option> 
				<option value = 'javascrpit'>JAVASCRPIT</option> 
				<option value = 'jquery'>JQUERY</option> 
				<option value = 'nodejs'>NODE JS</option> 
				<option value = 'php'>PHP</option> 
			</select> 
            </div>
			<input type = 'submit' name = 'submit' value = Submit> 
		 </form> 
</body>
</html>


<?php 
	
	
	if(isset($_POST["submit"])) 
	{ 
		echo("<br>");
		if(isset($_POST["subject"])) 
		{ 
            
			foreach ($_POST['subject'] as $subject) 
				echo "You selected $subject<br/>"; 
		} 
	else
		echo "Select an option .."; 
	} 
?> 
