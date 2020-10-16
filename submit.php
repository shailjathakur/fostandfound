<style>

	body{
		background-image: url(thank.jpg);
		background-repeat: no-repeat;
		background-size: cover
	}
</style>




<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = false; 
  
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
	$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
 
    $age =  filter_var($_POST['age'], FILTER_VALIDATE_INT,['min_range' =>10, 'max_range' => 120]);
	$comment =  filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
	
    
    if ($age < 10 || $age > 120)
	{
		
     $error = true;
     echo "age can only be between 18 to 120<br>";
    }    
    if($error == false)
	{
        
		echo "<p align='center'> <font color=white size =20px >Details submitted. <br> <br> WE WILL GET BACK TO YOU,THANK YOU</font> </p>";
    }
	else
	{
        echo "Failed! Please check the details again<br>" ;
    }
}
?>
