<!--
Nav bar appears below each post
 -->
<?php
$nextID = "#navPost".$NextPostID;	//anchor name of bottom of next post
$prevID = "#navPost".$PreviousPostID;		//anchor name of top of previous post
 ?>
<a id="<?php echo "navPost".$PostID; ?>" style="display:inline;"></a><!-- target for next/previous buttons -->
<div class="nav">
	<a href="#top"><img src="images/top.png" title="top" length="50" height="50" /></a>
	<a href="#bottom"><img src="images/bottom.png" title="bottom" length="50" height="50" /></a>
	<a href="<?php echo $prevID ?>"><img src="images/prev.png" title="previous" length="50" height="50" /></a>
	<a href="<?php echo $nextID ?>"><img src="images/next.png" title="next" length="50" height="50" /></a>
</div>
