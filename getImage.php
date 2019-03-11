<!--   defunct file   -->

<?php
/*$email = $_GET['email'];
$db = mysqli_connect('localhost', 'root', 'collabcove', 'registration');
$sql = "SELECT profile_picture FROM users WHERE email='$email'";
$row = mysqli_fetch_assoc($sql);
//mysql_close($link);
header("Content-type: image/jpeg");
echo $row['profile_picture'];*/


echo "testtesttesttesttesttesttest";
    $email      = $_GET['email'];
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'collabcove';
    $dbName     = 'registration';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT profile_picture FROM users WHERE email = '$email'");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
?>