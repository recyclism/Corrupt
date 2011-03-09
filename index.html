<?php $width = 500; ?>
<?php $first = 3; ?>
<HTML>
<HEAD>
<title>CORRUPT&trade;</title>
<link rel="stylesheet" href="styles.css" type="text/css">

</HEAD>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>

<center>

<TABLE ALIGN=LEFT CELLSPACING=10 BGCOLOR=#FFFFFF>

<TD colspan=2>

<!--  This part needs to stay on your page somewhere - visible -->
<p><strong>Corrupt&trade; - data corruption software 3.0</strong></p>
<p<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" /></a><br /><span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dc:title" rel="dc:type">Corrupt</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.recyclism.com/corrupt.php" property="cc:attributionName" rel="cc:attributionURL">Corrupt by Recyclism</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://www.recyclism.com/corrupt/corrupt.zip" rel="dc:source">www.recyclism.com</a>.
</p>
<!--  End -->


<!--  Feel free to modify from here -->
<TR>
		 <TD colspan=2><IMG SRC="line.gif" WIDTH=5548 HEIGHT=5 ALT=""></TD>
</TR>
<TD colspan=2>
<BR>
<A href=upload.php><font color="#FF0000">Upload and Corrupt&trade; a JPEG file - Max 500kb</font></A>
<br>
<br>
</TD>
</p>
</TD>

<TR>
		 <TD colspan=2><IMG SRC="line.gif" WIDTH=5548 HEIGHT=5 ALT=""></TD>
</TR>

<TR><TD align=left><strong>3 Latest uploaded image</strong></TD><TD align=left><strong>Corrupted version</strong></TD></TR>

<?php
	// open the images directory
	$dir = opendir("images");

	// list all files in the images directory
	for($images = Array(); $file = readdir($dir);) {
		// get full path
		$img = "images/$file";

		// skip directories
		if(is_dir($img)) continue;

		// store create time
		$images[$img] = filectime($img);
	}

	// close the images directory
	closedir($dir);

	// sort images (backwards)
	arsort($images);

	// get image names
	$images = array_keys($images);

	// show images
	for($i = 0; $i < $first && $i < count($images); $i++) {
		// get filename
		$fname = $images[$i];

		// show the image
		echo("<TR>");
		echo("<TD><IMG src=\"$fname\" alt=\"$fname\" border=0 width=$width></TD>");
		echo("<TD>");
		echo("<TABLE border=0>");
		echo("<TR>");

		// open the directory containing the corrupted versions
		$dir = opendir("$fname-corrupted");

		// list all files in the corrupted directory
		while($file = readdir($dir)) {
			// skip directories in the corrupted folder
			if(is_dir("$fname-corrupted/$file")) continue;

			// show corrupted image
			echo("<TD><IMG src=\"$fname-corrupted/$file\" alt=\"$fname ($file)\" border=0 width=$width></TD>");
		}

		// close table row
		echo("</TR>");
		echo("</TABLE>");
		echo("</TD>");
		echo("</TR>");
	}
?>



</TABLE>
</center>


</BODY>
