<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MySQL/PHP Experiments</title>
</head>

<?php

include 'connect.php';

?>

<hr>

<?php 

$sql = <<<SQL
    SELECT *
    FROM contacts
	WHERE contact_number < 4
     
SQL;

if(!$result = $lrbdb->query($sql)){
    die('There was an error running the query [' . $lrbdb->error . ']');
}

	echo '<strong>The email addresses and phone numbers in the Contacts table are:</strong> <br /> <br />';

while($row = $result->fetch_assoc()){ 
	echo $row['name'] . ' -- ' . $row['email'] . ' -- ' . $row['telephone'] . '<br />' . '<br />';
}

echo '<strong>Total results: ' . $result->num_rows . '<br />' . '<br />' . '<br /></strong>' ;

$result->free();

?>

<hr>

<?php

//Next Segment

$sql = <<<SQL
    SELECT artist, track
    FROM  genres, artists, albums, tracks
	WHERE ((genres.idgenres = artists.genres_idgenres) and (artists.idartists = albums.artists_idartists) and (albums.idalbums = tracks.albums_idalbums)) and genres.idgenres = 2
	
     
SQL;

if(!$result = $lrbdb->query($sql)){
    die('There was an error running the query [' . $lrbdb->error . ']');
}

	echo '<strong>The Rock tunes in the music database are:</strong> <br /> <br />';
	
while($row = $result->fetch_assoc()){
   
	echo $row['genre'] . ' ' . $row['artist'] . ' -- ' . $row['track'] . '<br />' . '<br />';
}

echo '<strong>Total results: ' . $result->num_rows . '<br />' . '<br /> </strong>' ;

$result->free();


mysqli_close($lrbdb);

?>

<body>

</body>
</html>