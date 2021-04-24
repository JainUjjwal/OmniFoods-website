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

    $LnameArray = array();
    $FnameArray = array();

    while ($stmt->fetch()) {
        array_push($FnameArray, $Fname);
        array_push($LnameArray, $Lname);
    }

    $arr = array("Sindhana's user list","Shaktivel's user list","Poonam's user list");
    //Create a cURL handle.
    $webpages = array();
    $urls = array('http://skyvah.com/user-list-skyvah/', 'https://www.hikelife.org/appusers.php', 'http://py-projects.com/appUsers.php');
    for ($x = 0; $x < 3; $x++) {

        $ch = curl_init($urls[$x]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        array_push($webpages, $result);
    }
    ?>
    <div style='margin-left:15px'>
        <div>
            <h1 style='color:black'>Index of users</h1>
        </div>
        <div id='data_div'></div>
        <div id='data_div2'></div>
        <table id='My_Users'>
            
        </table>
        <div id='other_users'>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        let Fnames = <?php echo json_encode($FnameArray); ?>;
        let Lnames = <?php echo json_encode($LnameArray); ?>;
        $('#My_Users').html('')
        let displayValues = `<tr><th>First Name</th><th>Last Name</th></tr>`;
        for (i = 0; i < Fnames.length; i++) {
            displayValues += `<tr><td>${Fnames[i]}</td><td>${Lnames[i]}</td></tr>`

        }
        $('#My_Users').html(displayValues);

        let newWeb = <?php echo json_encode($webpages); ?>;
        let arr2 = <?php echo json_encode($arr);?>
        // console.log(newWeb[1])
        const parser = new DOMParser();
        let data_to_show = ''
        $('#other_users').html('')
        for (j = 0; j < newWeb.length; j++) {
            data_to_show += `<h1 style='color:black'> ${arr2[j]}</h1>`
            data_to_show += `<table><tr><th>First Name</th><th>Last Name</th></tr>`
            let doc = parser.parseFromString(newWeb[j], "text/html");
            let arr = doc.getElementsByClassName('information')
            for (i = 0; i < arr.length; i++) {
                let names = arr[i].innerHTML.split(' ');
                data_to_show += `<tr><td>${names[0]}</td><td>${names[1]}</td></tr>`
            }
            data_to_show += `</table>`
        }
        $('#other_users').html(data_to_show);
    </script>
    </script>
</body>

</html>