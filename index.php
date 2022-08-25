<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>icoder-Contact Us</title>
    <?php include 'links.php' ?>
    <?php include 'css/style.css' ?>
</head>
<body>
        <div class="container">
        <form method="POST">
            <h1 style="height: 50px;">Any Query?</h1>
            <p>Please fill in this form, we'll reach you soon.</p>
            <hr>
      
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your first name...">
      
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Your last name...">
      
          <label for="country">Country</label>
          <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">India</option>
            <option value="usa">Japan</option>
            <option value="usa">Russia</option>
            <option value="usa">USA</option>
          </select>
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write your message..." style="height:200px"></textarea>
          <input type="submit" value="Submit" name="submit>
      
        </form>
      </div>

       <footer>
          <p>Copyright © 2022 All Rights Reserved<br> </p>
            <a href="#" class="fa fa-facebook"></a>  
            <a href="#" class="fa fa-twitter"></a>  
            <a href="#" class="fa fa-linkedin"></a>  
            <a href="#" class="fa fa-instagram"></a>  
            <a href="#" class="fa fa-youtube"></a>  
            <a href="#" class="fa fa-pinterest"></a>  
            <a href="#" class="fa fa-google"></a>  
      </footer>
</body>
</html>

<?php
include ("connection.php");

if(isset($_POST['Submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    $insertquery ="INSERT INTO contactus(firstname, lastname, country, subject) values('$fname','$lname', '$country', '$subject')";

    $result= mysqli_query($conn, $insertquery);
 
    if($result){

        ?>
        <script>
            alert('Data Saved');
        </script>
        <?php 
    } else{
        ?>
        <script>
            alert('Oops, Something went wrong!');
        </script>
        <?php
    }
}
?>
