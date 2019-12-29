<?php
	$ifuser = ($_COOKIE["user"]);
	$guest = '';
	$zip = 'zip';
	$fn = $_FILES["file"]["name"];
	if ($ifuser == $guest) {
            header("location: index.php");
          }else {
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $ifuser.'-'.$fn.'.'.'rename');
	//header ("location: is_ok.php");
	header ("location: is_ok.php?filename=$ifuser-$fn.rename");
	}
?>
