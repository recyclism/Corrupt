<?php
	$upfile_name = $_FILES['upfile']['name'];
	$upfile_size = $_FILES['upfile']['size'];
	$upfile_type = $_FILES['upfile']['type'];
	$upfile      = $_FILES['upfile']['tmp_name'];
	// this value tells this code how many (succesful) corrupted files should be generated
	// with a maximum of set retries
	$nCorrupts = 10;
	$nRetries = 1000;
	if($upfile_size > (500 * 1024)) die("File is too big");

	function jpegIsValid($filename) {
		// load the file
		$img = @imageCreateFromJPEG($filename);
		
		// return 0 if the image is invalid
		if(!$img) return(0);

		// return 1 otherwise
		return(1);
	}

	function scramble($content, $size) {
		$sStart = 10;
		$sEnd = $size-1;
		$nReplacements = rand(1, 30);

		for($i = 0; $i < $nReplacements; $i++) {
			$PosA = rand($sStart, $sEnd);
			$PosB = rand($sStart, $sEnd);

			$tmp = $content[$PosA];
			$content[$PosA] = $content[$PosB];
			$content[$PosB] = $tmp;
		}

		return($content);
	}

	// first check if 'upfile' is set
	if(empty($upfile) or empty($upfile_name)) {
		die("No file to corrupt, please go back and select a JPEG image to upload.");
	}

	// then check if it is a JPEG file
	if($upfile_type != "image/jpeg") {
		die("The image does not seem to be JPEG but of type '$upfile_type', please go back and select a JPEG image to upload.");
	}

	// load the file and get its size
	$content = file_get_contents($upfile);
	$size = $upfile_size;

	// now store the original one
	$fd = fopen("images/$upfile_name", "w") or die("The first fopen went wrong, e-mail webmaster Ben.");
	fwrite($fd, $content, $size) or die("The first fwrite went wrong, e-mail webmaster Ben.");
	fclose($fd);

	// check the copied image
	if(!imageCreateFromJPEG("images/$upfile_name")) {
		die("This JPEG is not valid, please go back and try another one.");
	}

	// create a folder to store the corrupted versions
	@mkdir("images/$upfile_name-corrupted");

	// corrupt it a few times
	for($c = 0, $r = 0; $c < $nCorrupts && $r < $nRetries; $r++) {
		// corrupt the file
		$corrupted = scramble($content, $size);

		// save it to disc
		$fd = fopen("images/$upfile_name-corrupted/$c.jpg", "w") or die("The fopen went wrong, e-mail webmaster Ben.");
		fwrite($fd, $corrupted, $size) or die("The fwrite went wrong, e-mail webmaster Ben.");
		fclose($fd);

		// count succeeded corrupts
		if(jpegIsValid("images/$upfile_name-corrupted/$c.jpg")) $c++;
	}

	// jippie! we're done! now go to the list of images...
	Header("Location: index.php");
?>
