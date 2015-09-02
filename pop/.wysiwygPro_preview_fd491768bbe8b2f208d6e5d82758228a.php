<?php
if ($_GET['randomId'] != "CjhTTxPCV5FSA3WHduPQAfDcKsfkUPj8nJiUpx1VYuejxpe60OIrbk2l6kvSu8no") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
