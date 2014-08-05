<!doctype html>
<html>

<body>



<?php

include 'connect2.php';

$fiber = <<<SQL
    SELECT fiberartistname, galleryname, fibertitle
    FROM  fiberartists, fibergalleries, fiberartworks
	WHERE ((fiberartists.idfiberartist = fibergalleries.fiberartistid_fibergalleryid) and (idfibergallery = fiberartworks.fiberartworkid_fibergalleryid)) ORDER  BY fiberartistname, galleryname, fibertitle
     
SQL;

	
	if(!$result = $lrbdb2->query($fiber)){
    die('There was an error running the query [' . $lrbdb2->error . ']');
}
	
?>
<h3>Displaying Fiber Artwork in Tabular Form</h3>

<table border="2" cellspacing="20" cellpadding="10" style="border-collapse:collapse">
<tr>
<td><strong><font face="Arial, Helvetica, sans-serif">Artist</font></strong></td>
<td><strong><font face="Arial, Helvetica, sans-serif">Gallery</font></strong></td>
<td><strong><font face="Arial, Helvetica, sans-serif">Title</font></strong></td>
</tr>

<?php

while($row = $result->fetch_assoc()) {

$varartist = $row['fiberartistname'];
$vargallery = $row['galleryname'];
$vartitle = $row['fibertitle'];
?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $varartist; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $vargallery ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $vartitle ?></font></td>

</tr>

<?php

}
$result->free();
mysqli_close($lrbdb2);
?>
</body>
</html>