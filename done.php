<?php
	$ifuser = ($_COOKIE["user"]);
	$guest = 'guest';
	$zip = 'zip';
	$fn = $_FILES["file"]["name"];
	if ($ifuser == $guest) {
            header("location: index.php");
          }else {
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $ifuser.'-'.$fn);
	header ("location: is_ok.php");
	}
?>
