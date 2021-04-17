<?php 
    require_once 'dbconnection.php';

    // extract($_POST);
    $FIRSTNAME = $conn -> real_escape_string($_POST['FIRSTNAME']);
    $LASTNAME = $conn -> real_escape_string($_POST['LASTNAME']);
    $EMAIL = $conn -> real_escape_string($_POST['EMAIL']);
    $PASSWORD = $conn -> real_escape_string($_POST['PASSWORD']);
    $HOMEADDRESS = $conn -> real_escape_string($_POST['HOMEADDRESS']);
    $HOMEPHONE = $conn -> real_escape_string($_POST['HOMEPHONE']);
    $CELLPHONE = $conn -> real_escape_string($_POST['CELLPHONE']);

    $sql2 = "INSERT INTO users(Fname, Lname, email, homeAddress, homePhone, cellPhone, pass ) VALUES ('$FIRSTNAME', '$LASTNAME','$EMAIL', '$HOMEADDRESS', '$HOMEPHONE','$CELLPHONE', '$PASSWORD');";
    if ($conn->query($sql2) === TRUE) {
        echo "<script>
                alert('Sign up successful');
                window.location.href='/FoodWebsite-master/index.php';
                </script>";
      } else {
        echo "Failed query: " . $conn->error;
      }

     // Close connection
    $conn->close(); 
?>