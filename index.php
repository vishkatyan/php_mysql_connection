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
</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['Submit'])){
    $fname = $_POSt['fname'];
    $lname = $_POSt['lname'];
    $country = $_POSt['country'];
    $subject = $_POSt['subject'];

    $insertquery ="insert into contactus(First Name, Last Name, Country, Subject) values('$fname','$lname', '$country', '$subject' )";

    $result= mysqli_query($conn, $insertquery);
 
    if($result){

        ?>
        <script>
            alert('Data Saved')
        </script>
        <?php 
    } else{
        ?>
        <script>
            alert('Oops, Something went wrong!')
        </script>
        <?php
    }

}

?>
