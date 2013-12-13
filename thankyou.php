<?php include("includes/head.php"); ?>
  <?php include("includes/header.php"); ?>
	
	<?php 
            $to="tanyargrimes@gmail.com";
            $subject="WWCC Inquiry";
            $message= $_POST["firstname"]." ".$_POST["lastname"]." has sent the following message: \r\n"."\r\n";
            $message.= $_POST["comments"]."\r\n"."\r\n";
            $message.= "They can be reached at: ".$_POST["email"]."\r\n"."\r\n";
            $from = $_POST["email"];
        
            mail($to,$subject,$from,$message);
        
    ?>

    <div class="content-wrapper">
        <div class="container">
            <p id="response">Thank you for your comments.  Someone will respond to your inquiries shortly.</p>
        </div>
    </div>
<?php include("includes/footer.php"); ?>