<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   	
	
	<?php
    include "connect.php";
	
	if(isset($_POST["submit"]))
	{
		 $name=$_POST["name"];
         $files=$_FILES["file"];
       
            if(empty($name) or empty($files))
            {
                echo"<span>Choose your file....</span>";
            }else{
                
                 $filename=$files["name"];
                $filerror=$files["error"];
                $filetemp=$files["tmp_name"];

                $fileext=explode('.',$filename);
                $filecheck=strtolower(end($fileext));
        
               $filearray=array("jpg","png","jpeg");
        
             if(in_array($filecheck,$filearray))
             {
                 $filestor='upload/'.$filename;
                 move_uploaded_file($filetemp,$filestor);
             }
        
        
        
    
		$sql="INSERT INTO upload(name,upload)value('$name','$filestor')";
		if(mysqli_query($link,$sql))
		{
			echo"data add successfully";
			 header('location:index.php');
		}else{
			echo"faild to add data".$sql;
		}
            }
          
		
        }else{

           header("location:insert.php");

        }

        ?>

    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>