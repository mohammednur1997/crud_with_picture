	
	
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>See your employer here</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
	
	<h2>Your all employer is here!</h2>
	 
	 <h2><a href="insert.php">Add Employer</a> </h2>
	
	 <table class="table table-responsive table-striped table-hover table-bordered table-condensed text-center">
                         	<tr class="text-center">
                         		<th class="text-center">id</th>
                         		<th class="text-center">Username</th>
                         		<th class="text-center">picture</th>
                         	</tr>

                        <?php
                        include 'connect.php';

                        $sql="SELECT * FROM upload";
                        $result=mysqli_query($link,$sql);
                        while($rows=mysqli_fetch_assoc($result))
                        {
                        ?>
                        <tr>
                            	<td><?php echo $rows['id'];?> </td>
                           		<td><?php echo $rows['name'];?> </td>
                           		<td> <img src="<?php echo $rows['upload'];?>" alt="" height="100px" width="100px" />   </td>         		
    
                  	</tr>
                        
                   <?php
                      }
                   ?>
	
	
	
	
	
	
		
	</body>
	</html>