<?php


$sourcePath = $_FILES['userImage']['tmp_name'];			//saving images in directory til line 7
$targetPath = "images/".$_FILES['userImage']['name'];
move_uploaded_file($sourcePath,$targetPath)



?>


