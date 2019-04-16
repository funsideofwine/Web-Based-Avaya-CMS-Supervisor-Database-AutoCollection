<?php
define('UPLOAD_DIR', 'screenshoot/');  //folder to save screenshoot

//get properly base64 image data passed via post in 'cnvimg'
$cnvimg = trim(strip_tags($_POST['cnvimg']));
$cnvimg = str_replace(['data:image/png;base64,', ' '], ['', '+'], $cnvimg);

//set image name from 'imgname', or unique name set with uniqid()
$imgname = (isset($_POST['imgname']) && !empty(trim($_POST['imgname']))) ? trim(strip_tags($_POST['imgname'])) : uniqid();

//get image data from base64 and save it on server
$data = base64_decode($cnvimg);
$file = UPLOAD_DIR . $imgname .'.png'; 
$save = file_put_contents($file, $data);

//set and output response
$resp = $save ?['re'=>$file] :['er'=>'Unable to save: '. $file];
echo json_encode($resp);