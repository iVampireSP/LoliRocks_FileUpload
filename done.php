<?php
	$ifuser = ($_COOKIE["user"]);
	$guest = 'guest';
	$zip = 'zip';
	$name = ($ifuser .".". $zip);
	if ($ifuser == $guest) {
            header("location: index.php");
          }else {
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $name);
	header ("location: is_ok.php");
	}
?>
