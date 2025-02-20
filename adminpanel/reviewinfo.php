<?php
session_start();
require_once('login_session.php');
require_once("../connection.php");


?>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Question - Muhammadan Quran School</title>
    <link rel="icon" href="../pictures/logo.png">
    <link rel="stylesheet" href="../files/reset.css">
    <link rel="stylesheet" href="../files/bootstrap.min.css">
    <link rel="stylesheet" href="../files/font_os/css/font-awesome.min.css">
    
</head>
<body>
    
    <p class="bg-info h3 p-3 text-center text-white font-weight-bold">Reviews</p>
 	<a href="?action=logout" class="col-lg-2 ml-3  col-4 btn btn-outline-primary btn-info text-white">log out</a>
        
    <?php

			if(isset($_POST["btn_del"])){
			$id = $_POST["id"];
			$qu = "DELETE FROM review_db WHERE id = '$id'";
				$res = mysqli_query($conn,$qu);
				if($res){
				
				}
			else{
				echo "not delete";
				
			}	
				
			}
		
?>
   
   
   
   
   
<form action="" method="post">
    


	
</form>
	
                    <div class="col-lg-12">
        <table class="table table-striped table-bordered table-hove">
            <thead class="thead-dark">
                <tr>
                
                    <th scope="col">Reviews</th>
                   
                    <th scope="col">Delete</th>
             
                 
                </tr>
            </thead>
            
            
                     <?php
		

			
$q = "SELECT *  FROM `review_db`";
    $res = mysqli_query($conn,$q);
    if(mysqli_num_rows($res) > 0){
     while($row = mysqli_fetch_assoc($res)){
        
    
    ?>  
        
             
                  
                       
                                                  
         
                
                
<tr>
<th scope="row"><?php echo $row["reviews_db"];?></th>
  



 
   
   <td>
   
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"];?>"> 
  <input  type="submit" value="Delete"  name="btn_del" class=" text-white col-lg-4 bg-danger form-control  " >

    </form>  
   
  
   	  
   
   </td>
   
   
   
  
    
</tr>
<?php }}?>  
            
            
			  </table>
	</div>
   
       
      
      
      
      
      
      
    <script src="../files/jquery-3.3.1.min.js"></script>
<script src="../files/bootstrap.bundle.min.js"> </script>
<script src="../files/bootstrap.min.js"></script> 

   <script>if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
    
</body>
</html>