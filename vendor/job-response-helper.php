<?php
    include 'messenger.php';
    if(isset($_POST['sid']))
    {
        $id=realEscape($_POST['sid']);
        $message=realEscape($_POST['message']);
        if ($res = sendMessage($id, $message)) {
            echo 1;
        } else {
            echo $res ;
        } // 79 id h hi nhi aapki table m isliye send nhi kar rha vo :|

    }

?>