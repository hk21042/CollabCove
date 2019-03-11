<?php
    session_start();
    $name = "";
    $email = "";
    $password = "";
    $errors = array();
    // connects to the database
    $db = mysqli_connect('localhost', 'root', 'collabcove', 'registration');

    // if registration button is clicked
    if  (isset($_POST['register'])) {
        $errors = array();
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        // make sure form fields are filled
        if  ($password_1 != $password_2)  {
            array_push($errors, "Passwords must match");
        }

        // make sure email isn't already in use
        $email_query = "SELECT * FROM users WHERE email= '$email'";
        $rows = mysqli_query($db, $email_query);
        if  (mysqli_num_rows($rows) >= 1)   {
            array_push($errors, "Email is already in use");
        }

        // check email validity
        if (filter_var($email, FILTER_VALIDATE_EMAIL)==false) {
            array_push($errors, "Invalid email");
        }

        // if there are no errors, save user to database
        if  (count($errors) == 0)   {
            $image = $_FILES['media/profile.png']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
          
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password_1;
            $password_1 = md5($password_1); //encrypts password before storing in database
            $sql = "INSERT INTO users (name, email, password, profile_picture) VALUES ('$name', '$email', '$password_1', '$imgContent')";
            mysqli_query($db, $sql);
            $_SESSION['success'] = "You are now logged in";
            /*if(mysqli_query($db, $sql)){ 
              echo "Record was updated successfully.";
            } else { 
              echo "ERROR: Could not able to execute $sql. ". mysqli_error($db); 
            }*/
            header('location: home.php'); //redirect to home page
        }    
  }

    //login
    if  (isset($_POST['login']))    {
        $errors = array();
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password_1 = md5($password);
        $query = "SELECT * FROM users WHERE email= '$email' AND password = '$password_1'";
        $result = mysqli_query($db, $query);
        if  (mysqli_num_rows($result) == 1) {
            // log user in
            //$name = "SELECT name FROM users WHERE email= '$email' AND password = '$password'";
            //$sql = "SELECT name FROM users WHERE email= '$email' AND password = '$password'";
            //$name = $row["name"];
          
$sql = "SELECT name FROM users WHERE email= '$email'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo $row["name"]. "<br>";
      $name=$row["name"];
    }
} else {
    echo "0 results";
}
          
          //echo $name;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['name'] = $name;
            //$_SESSION['name'] = mysqli_query($db, $name);//need code to set user's name to session
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php'); //redirect to home page
        }
        else    {
            array_push($errors, "Invalid email or password");
        }
    }

    //logout
    if  (isset($_GET['logout']))    {
        session_destroy();
        unset($_SESSION['email']);
        header('location: index.php');
    }

    //update
    if  (isset($_POST['update']))    {
        $db = mysqli_connect('localhost', 'root', 'collabcove', 'registration');
        $errors = array();
        $oldEmail = $_SESSION['email'];
      
        $query = "SELECT * FROM users WHERE email= '$email'";
        $name = mysqli_real_escape_string($db, $_POST['changeName']);
        $email = mysqli_real_escape_string($db, $_POST['changeEmail']);
        $password = mysqli_real_escape_string($db, $_POST['changePassword']);
        $password_1 = md5($password);
      
      // make sure email isn't already in use
        $email_query = "SELECT * FROM users WHERE email= '$email'";
        $rows = mysqli_query($db, $email_query);
        if  (mysqli_num_rows($rows) >= 1 && $email != $oldEmail)   {
            array_push($errors, "Email is already in use");
        }

        // check email validity
        if (filter_var($email, FILTER_VALIDATE_EMAIL)==false) {
            array_push($errors, "Invalid email");
        }
      
      if  (count($errors) == 0)   {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $sql = "UPDATE users SET name='$name', password='$password_1', email='$email' WHERE email='$oldEmail'";
        if(mysqli_query($db, $sql)){ 
          echo "Record was updated successfully."; 
          header('location: profile.php');
        } else { 
          echo "ERROR: Could not able to execute $sql. ". mysqli_error($db); 
        }
        //$query = "SELECT * FROM users WHERE email= '$email'";
      
        //$sql = "UPDATE users SET name='$name', password='b', email='$email' WHERE email= 'a@a.com'";
        //header('location: home.php');
      echo '<center>Updated</center>';
      }
      //$sql="UPDATE users SET password='b' WHERE email='a@a.com'";
      
      
      
        /*$name = mysqli_real_escape_string($db, $_POST['changeName']);
        $sql = "UPDATE users SET name='$name' WHERE email= '$email' AND password= '$password'";
        $email = mysqli_real_escape_string($db, $_POST['changeEmail']);
        $sql = "UPDATE users SET email='$email' WHERE email= '$email' AND password= '$password'";
        $password = mysqli_real_escape_string($db, $_POST['changePassword']);
        $password_1 = md5($password);
        $sql = "UPDATE users SET password='[$password_1]' WHERE email= '$email' AND password= '$password'";
        header('location: home.php');*/
    }

if (isset($_POST['pic']) && !empty($_FILES["file"]["tmp_name"])) {
  /*$db = mysqli_connect('localhost', 'root', 'collabcove', 'registration');
  $query = "SELECT * FROM users WHERE email= '$email'";
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  $image = $_FILES['image']['tmp_name'];
  $imgContent = addslashes(file_get_contents($image));
  $sql = "UPDATE users SET profile_picture='$imgContent' WHERE email='$email'";
  if(mysqli_query($db, $sql)){
    echo "Record was updated successfully.";
    header('location: home.php');
  } else {
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($db);
  }*/
  
  
  
  /*$image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = 'collabcove';
        $dbName     = 'registration';
        $email      = $_SESSION['email'];
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insert image content into database
        $insert = $db->query("UPDATE users SET profile_picture='$imgContent' WHERE email='$email'");
        if($insert){
            echo "File uploaded successfully.";
            header('location: home.php');
        }else{
            echo "File upload failed, please try again.";
        }*/
  include("config.php");
  $email = $_SESSION['email'];
  /*$name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $query = "UPDATE users SET profile_picture='$image' WHERE email='$email'";
    mysqli_query($con,$query);
  
    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }*/
  $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
//you keep your column name setting for insertion. I keep image type Blob.
$query = "UPDATE users SET profile_picture='$image' WHERE email='$email'";  
$qry = mysqli_query($db, $query);
  //header('location: profile.php');
}
?>