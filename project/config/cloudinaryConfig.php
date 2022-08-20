<?php
require "cloudinary/vendor/autoload.php";
require "cloudinary/config-cloud.php";

function getURL($file)  /// getURL($_FILES['input wala name']['tmp_name'])
{
    $cloudUpload = \Cloudinary\Uploader::upload($file, array("timeout" => "60000"));
    $address = $cloudUpload['secure_url'];
    return $address;
}
