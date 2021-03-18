<!--  
THIS IS CODE FOR CALLING VALUES FROM DATABASE TO AUTOSUGGESTBOX ----- START
--> 
<?php
include 'includes/connection.inc.php';
$connread = dbConnect('read', 'pdo');
$connwrite = dbConnect('write', 'pdo');
$auto_suggest=$_GET['auto_suggest'];
?>
<div class="autosuggest-h4 notclickable"><h4>Search Suggestions</h4></div>
<?php
$select_autosuggest_query = "SELECT * FROM  search_tags WHERE search_tags_title LIKE '%$auto_suggest%'";		
    foreach ($connread->query($select_autosuggest_query) as $row) { 
	$search_tags_id=$row['search_tags_id'];
	$search_tags_title=$row['search_tags_title'];
?>
<p id="autosuggestp<?php echo $search_tags_id;?>" class="autosuggest-p notclickable"><?php echo $search_tags_title;?></p>
<?php } ?>
<?php
$select_autosuggest_query = "SELECT COUNT(*) FROM  search_tags WHERE search_tags_title LIKE '%$auto_suggest%'";		
    foreach ($connread->query($select_autosuggest_query) as $row) { 
	$count_tags=$row['COUNT(*)'];
	if($count_tags==0){
?>
<p  class="autosuggest-p notclickable">No data</p>
<?php } ?>
<?php } ?>
<!--  
THIS IS CODE FOR CALLING VALUES FROM DATABASE TO AUTOSUGGESTBOX ----- END
--> 