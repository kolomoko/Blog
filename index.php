<?php
include "includes/application_top.php";
include "../../../utility/dbconnect.php";
include "includes/header.php";
 ?>

    <!-- <article id="blog-start">
      <h2><a href="#blog-start">A blog</a></h2>
      <p>03/21/2019</p>
			<p>
				This is an experiment in minimalist HTML/CSS/JavaScript, and PHP.  It might also be about other stuff, but for the moment it's experimental and a bit of a training exercise.
			</p>
			<p>
				Credit where it's due:  The layout and CSS is based on Chris Were's design blog: <a href="https://chriswere.neocities.org/design.html" target="_blank">https://chriswere.neocities.org/design.html</a>.  I'm rather fond of dark background/white text, with other colors used sparingly as highlights.  I might mess with this design, but for now it's easy, clear, and simple.  Thanks, Chris.
			</p>
			<p>
				Philosophy:  Keep it simple and elegant.  Avoid bandwidth-hogging bloated frameworks and libraries that slow page loads and complexify development.  And get to the point.
			</p>
			<p>
				I'll add features on the fly.  Sometimes they may fail, but hopefully not too often.  This is a work in progress.
			</p>
    </article> -->

<?php

//get blog entries
$query = "SELECT * FROM Posts ORDER BY PostID ASC";

//load result set into an array, to allow navigation forward/backward through entire result set
$result = $pdo->query($query);
foreach($result as $row){
	$aResult[] = $row;
}
//clean up database stuff
$result = null;	//clear result set
$pdo = null;		//close db connection



if(!empty($aResult)){
	$PreviousPostID = 0;
	$NextPostID = 0;
	for($i = 0; $i < count($aResult); $i++){
		$PostID = $aResult[$i][0];
		$Title = $aResult[$i][1];
		$Content = $aResult[$i][2];
		$PostDate = date_create_from_format('Y-m-d H:i:s', $aResult[$i][3]);	//format: 2019-03-24 09:40:31
		$Tags = $aResult[$i][4];
		$PreviousPostID = $aResult[$i-1][0];
		$NextPostID = $aResult[$i+1][0];
		echo "<article id=Post$PostID>";
		echo "<h2><a href=#Post".$PostID.">".$Title."</a></h2>";
		echo "<p>".date_format($PostDate, 'd M Y H:m:s')."</p>";	//DEV: seconds are only for dev
		echo "<p>".$Content."</p>";
		echo "</article>";
		include "includes/nav.php";
	}
}

include "includes/footer.php";

?>
