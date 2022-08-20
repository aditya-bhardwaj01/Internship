<?php
session_start();

if (isset($_POST['submit'])) {
    if ($_POST['name'] == 'admin_id') {
        $_SESSION['vendor_id'] = 1;
    }
    $_SESSION[$_POST['name']] = 1;
}

if (isset($_POST['destroy'])) {
    session_destroy();
}

echo "<pre>" ;
print_r($_SESSION);
echo "</pre>" ;

echo "<br><br><hr><br><br>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <select name="name" id="">
            <option value="">Select Type</option>
            <option value="vendor_id">Vendor</option>
            <option value="admin_id">Admin</option>
            <option value="user_id">User</option>
        </select>
        <input type="submit" name="submit" id="" value="Login">
        <input type="submit" name="destroy" value="Logout">
    </form>
</body>

</html>