<?php
    if($_POST['FirstName'] || $_POST['email']  || $_POST['Write-message']){
        
        echo "FirstName "  . " : " . $_POST['FirstName'] . "<br />";
        echo "email  "  . " : " . $_POST['email'] . " <br />";
        echo "message "  . " : " . $_POST['Write-message'] . " <br />";

    };

?>