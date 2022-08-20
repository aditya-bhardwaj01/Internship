<?php
session_start();



// echo "<pre>";
// print_r(($_SESSION['full_response']));
// echo "</pre>";
// echo "<br><br><hr><br><br>";


if (isset($_POST['submit'])) {
    $_SESSION[$_POST['name']] = $_POST['value'];
}

if (isset($_POST['destroy'])) {
    session_destroy();
}

// $data = json_decode($_SESSION['response']) ;
// echo "<pre>" ;
// print_r($data) ;
// echo "</pre>" ;
// echo "<br><br><hr><br><br>";





// $client_id = $consumer_key;
// $client_secret = $x;
// $token = $token;
// $token_secret = $y;

// require_once "ideal_village/twitter/vendor/autoload.php";

// use Abraham\TwitterOAuth\TwitterOAuth;

// define('CONSUMER_KEY', $client_id);
// define('CONSUMER_SECRET', $client_secret);
// define('ACCESS_TOKEN', $token);
// define('ACCESS_TOKEN_SECRET', $token_secret);

// $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

// $status = 'This is a test tweet.';
// $result = $connection->post("statuses/update", ["status" => $status]);
// if ($connection->getLastHttpCode() == 200) {
//     echo "Your Tweet posted successfully.";
// } else {
//     echo 'error: ' . $result->errors[0]->message;
// }

// echo "<br><br><hr><br><br>";


echo "<h2>" ;
print_r($_SESSION);
echo "</h2>" ;

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
        <input type="text" name="name" id="" placeholder="Session Name">
        <input type="text" name="value" id="" placeholder="Session Value">
        <input type="submit" name="submit" id="" value="Set">
        <input type="submit" name="destroy" value="Reset">
    </form>
</body>

</html>