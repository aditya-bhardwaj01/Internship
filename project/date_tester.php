<?php
date_default_timezone_set('Asia/Kolkata');
$curr_date = date('Y-m-d H:i:s');

$m = 0;
if (isset($_GET['month'])) {
    $m = $_GET['month'];
}

$month = date("m", strtotime(date("Y-m-d") . $m . " month"));
$year = date("Y", strtotime("2004-02-08"));

$start_date = date("Y-m-d", strtotime($year . "-" . $month . "-01"));
$end_date = date("Y-m-d", strtotime($start_date . "+1 month -1 day"));

//$year = array();
//array_push($year, "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
echo $start_date . " to " . $end_date . "<br>";
//echo $year[date("m", strtotime($start_date))]."<br>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="data_tester.css">
</head>

<body>
    <a href="date_tester.php?month=<?php echo $m - 1 ?>">Previous</a>
    <a href="date_tester.php?month=<?php echo $m + 1 ?>">Next</a> <br>
    <?php 
	$color= "#F1F1F1";
	$color1 = "#F1F1F1";
	$color2 = "#FBFBFB";

    ?>

    <table class="month-table">
        <thead>
        <tr>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $date_runner = $start_date;
        while ($date_runner <= $end_date) {
        ?>
            <tr style="background-color: <?php echo $color; ?>;">
                <?php
                $days = array();
                array_push($days, "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                if (date("l", strtotime($date_runner)) != 'Sunday') {
                    $i = 0;
                    while (date("l", strtotime($date_runner)) != $days[$i]) {
                ?>
                        <td></td>
                <?php $i++;
                    }
                }
                ?>

                <?php
                do { ?>
                    <td><?php echo $date_runner; ?></td>
                <?php
                    $date_runner = date("Y-m-d", strtotime($date_runner . "+1 day"));
                    if(date("d", strtotime($date_runner)) == '1') break;
                } while (date("l", strtotime($date_runner)) != 'Sunday')
                ?>
            </tr>
        <?php
        $color == $color1 ? $color=$color2 : $color=$color1;
        }
        ?>
        </tbody>
    </table>
</body>


</html>