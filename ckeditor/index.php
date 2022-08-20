<?php 

if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost', 'root', '', 'db');
    $content = $_POST['editor'];
    $added_od = date('Y-m-d h:i:s');
    $sql = "";
    mysqli_query($con, $sql);
    echo "Data inserted";
}

?>

<script src="ckeditor/ckeditor.js"></script>

<form method="post">
    <textarea id="editor" name="editor">

    </textarea>

    <input type="submit" name="submit">
</form>

<script>
    CKEDITOR.replace('editor');
</script>