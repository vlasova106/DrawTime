<?php

$img = $_POST['image'];
$ref = $_POST['ref_id'];
$comment = $_POST['comment'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = "image_name.png";
$success = file_put_contents($file, $data);

if (Auth::check()) {
    $user = Auth::user()->id;
}

echo $img;
echo "<br>".$ref;
echo "<br>".$user;
echo "<br>".$comment;
echo "<br><img src='data:image/png;base64,".$img."'>";

?>




