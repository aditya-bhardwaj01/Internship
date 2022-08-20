<?php
    include 'messenger.php';
    if(isset($_POST['id']))
    {
        $id=realEscape($_POST['id']);
        $message=realEscape($_POST['message']);
        if ($res = sendMessage($id, $message)) {
            echo 1;
        } else {
            echo $res ;
        } 

    }

?>