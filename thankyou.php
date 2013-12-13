<?php include("includes/head.php"); ?>
  <?php include("includes/header.php"); ?>
	
	<?php 
            $to="tanyargrimes@gmail.com";
            $subject="Inquiry";
            $message= "Hi ".$_POST["firstname"]." ".$_POST["firstname"].", \r\n";
            $message.= $_POST["comments"]."\r\n"."\r\n";
            $message.= $_POST["email"]."\r\n"."\r\n";
            $from = $_POST["email"];
        
            mail($to,$subject,$from,$message);
        
    ?>

<?php include("includes/footer.php"); ?>