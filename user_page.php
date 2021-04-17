<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<link rel="stylesheet" type="text/css" href="resource/css/style.css" />
</head>

<body>


    <?php
    require_once "dbconnection.php";
    extract($_POST);


    // Prepare a select statement
    $sql = "SELECT userId, email, pass FROM users WHERE email = ?";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $param_email);

        // Set parameters
        $param_email = $EMAIL;

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Store result
            $stmt->store_result();

            // Check if email exists, if yes then verify password
            if ($stmt->num_rows == 1) {
                // Bind result variables
                $stmt->bind_result($userId, $email, $hashed_password);
                if ($stmt->fetch()) {
                    if ($PASSWORD == $hashed_password) {
                        // Password is correct, so start a new session
                        echo ("hello ".$email);
                        // Redirect user to welcome page
                    } else {
                        // Password is not valid, display a generic error message
                        echo "<script>
                    alert('Log in error. Check your username and password.');
                    window.location.href='/FoodWebsite-master/index.php';
                    </script>";
                    }
                }
            } else {
                // Username doesn't exist, display a generic error message
                echo "<script>
                alert('Log in error. Check your username and password.');
                window.location.href='/FoodWebsite-master/index.php';
                </script>";
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        $stmt->close();
    }
    $sql = "SELECT Fname, Lname, email, homePhone, cellPhone FROM users;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($Fname, $Lname, $email, $homePhone, $cellPhone);
    //  $userList = 

    $LnameArray = array();
    $emailArray = array();
    $homePhoneArray = array();
    $cellPhoneArray = array();
    $FnameArray = array();
    // list($Fname, $Lname, $email, $homePhone, $cellPhone) =
    while ($stmt->fetch()) {

        array_push($FnameArray, $Fname);
        array_push($LnameArray, $Lname);
        array_push($emailArray, $email);
        array_push($homePhoneArray, $homePhone);
        array_push($cellPhoneArray, $cellPhone);
    }
    //  $stmt->bind_result($Fname, $Lname, $email,$homePhone, $cellPhone);
    ?>
    <div style="margin-top: 50px">
        <label for='searchBar'>Search: </label>
        <input type="text" name='SEARCHBAR' id='searchBar' placeholder="Search for user"/>
    </div>
    <div id='results'></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        let Fnames = <?php echo json_encode($FnameArray); ?>;
        let Lnames = <?php echo json_encode($LnameArray); ?>;
        let emails = <?php echo json_encode($emailArray); ?>;
        let homePhones = <?php echo json_encode($homePhoneArray); ?>;
        let cellPhones = <?php echo json_encode($cellPhoneArray); ?>;
        $('#searchBar').on('keyup', function(event) {

            let searchTerm = $('#searchBar')[0].value.toLowerCase();
            console.log(searchTerm);
            $('#results').html('');
            let displayValues = '';
            if (searchTerm.length > 0) {
                for (i = 0; i < Fnames.length; i++) {
                    if (Fnames[i].toLowerCase().search(searchTerm) > -1 || Lnames[i].toLowerCase().search(searchTerm) > -1 || emails[i].toLowerCase().search(searchTerm) > -1 || homePhones[i].toLowerCase().search(searchTerm) > -1 || cellPhones[i].toLowerCase().search(searchTerm) > -1) {
                        displayValues += `<div class = "userInformation">
                        <span>${Fnames[i]}</span>
                        <span>${Lnames[i]}</span>
                        <span>${emails[i]}</span>
                        <span>${homePhones[i]}</span>
                        <span>${cellPhones[i]}</span>
                    </div>`
                    }
                }
                $('#results').html(displayValues);
            }
        });
    </script>
</body>


</html>