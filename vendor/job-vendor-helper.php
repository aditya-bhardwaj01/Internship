<?php
include "../config/connection.php";
if (isset($_POST['delete_btn_set'])) {
    $del_id=realEscape($_POST['deleteid']);
    $query="delete from marketplace_jobs where id ='$del_id'";
    $r=mysqli_query($conn,$query);
}
else if(isset($_POST['update']))
{
    $id = realEscape($_POST['id']);
    $place = realEscape($_POST['place']);
    $category = realEscape($_POST['category']);
    $industry = realEscape($_POST['industry']);
    $job_title = realEscape($_POST['job_title']);
    $openings = realEscape($_POST['openings']);
    $validity = realEscape($_POST['validity']);
    $department = realEscape($_POST['department']);
    $position_level = realEscape($_POST['position_level']);
    $min = realEscape($_POST['min']);
    $max = realEscape($_POST['max']);
    $job_desc = realEscape($_POST['job_desc']);
    $perks = realEscape($_POST['perks']);
    $skills = realEscape($_POST['skills']);
    $sql = "UPDATE `marketplace_jobs` SET `job_title`='$job_title',`job_category`='$category',`skills_required`='$skills',`work_type` = '$place',`job_desc`='$job_desc',`sal_max`='$max',`sal_min`='$min',`num_opening`='$openings',`validity`='$validity',`department`='$department',`position_lvl`='$position_level',`industry`='$industry',`perks` = '$perks' WHERE `id`= '$id'";
    $r= mysqli_query($conn, $sql);
    if($r) { echo "1"; }
    else { errlog(mysqli_error($conn), $sql);}
}
?>