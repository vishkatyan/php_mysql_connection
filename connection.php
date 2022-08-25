<?php
$username = "root";
$password ="";
$server = 'localhost';
$db ='test';

$conn= mysqli_connect($server, $username, $password, $db);


if($conn){
    // echo "Connection Successful";
    ?>
    <script>
        alert('Connection Successful');

    </script>
    <?php
} 
else{
    echo "Connection Failed!";
}

?>