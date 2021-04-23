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
    $sql = "SELECT Fname, Lname FROM users;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($Fname, $Lname);
    //  $userList = 

    $LnameArray = array();
    $FnameArray = array();
    // list($Fname, $Lname, $email, $homePhone, $cellPhone) =
    while ($stmt->fetch()) {

        array_push($FnameArray, $Fname);
        array_push($LnameArray, $Lname);
    }
    //  $stmt->bind_result($Fname, $Lname, $email,$homePhone, $cellPhone);
    ?>
    <div style='margin-left:15px'>
        <div>
            <h1 style='color:black'>Index of users</h1>
        </div>
        <div id='results'></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        let Fnames = <?php echo json_encode($FnameArray); ?>;
        let Lnames = <?php echo json_encode($LnameArray); ?>;
        $('#results').html('')
        let displayValues = '';
        for (i = 0; i < Fnames.length; i++) {
            displayValues += `<div class = "information">${Fnames[i]} ${Lnames[i]} </div>`

        }
        $('#results').html(displayValues);
    </script>
</body>

</html>