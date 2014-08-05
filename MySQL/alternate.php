<!doctype html>
<html>

<body>



<?php

include 'connect.php';

$music = <<<SQL
    SELECT genre, artist, album, track
    FROM  genres, artists, albums, tracks
	WHERE ((genres.idgenres = artists.genres_idgenres) and (artists.idartists = albums.artists_idartists) and (albums.idalbums = tracks.albums_idalbums)) ORDER  BY genre, artist, album, track
	
     
SQL;

	
	if(!$result = $lrbdb->query($music)){
    die('There was an error running the query [' . $lrbdb->error . ']');
}
	
?>
<h3>Displaying Music DB Data in Tabular Form</h3>

<table border="2" cellspacing="20" cellpadding="10" style="border-collapse:collapse">
<tr>
<td><strong><font face="Arial, Helvetica, sans-serif">Genre</font></strong></td>
<td><strong><font face="Arial, Helvetica, sans-serif">Artist</font></strong></td>
<td><strong><font face="Arial, Helvetica, sans-serif">Album</font></strong></td>
<td><strong><font face="Arial, Helvetica, sans-serif">Track</font></strong></td>
</tr>

<?php

while($row = $result->fetch_assoc()) {

$vargenre = $row['genre'];
$varartist = $row['artist'];
$varalbum = $row['album'];
$vartrack = $row['track'];
?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $vargenre; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $varartist ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $varalbum ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $vartrack ?></font></td>

</tr>

<?php

}
$result->free();
?>
</body>
</html>