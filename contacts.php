<?php 
    $myContacts = new SplFileObject("contacts.txt");
    $infoTag = array("Name", "Phone", "Address");
    $i=0;
    while (!$myContacts->eof()) {
            echo '<div><span id="contactInfo">'.$infoTag[$i].':</span>'.$myContacts->fgets().'</div>';
            $i+=1;
    }
?>