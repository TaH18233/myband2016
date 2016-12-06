<?php

//NR_ITEMS_PER_PAGE
//page_nr
    
$offset = ($page_nr-1) * NR_ITEMS_PER_PAGE;
$sql = "SELECT * FROM newsarticles ORDER BY date_created DESC LIMIT  " .$offset .", " . NR_ITEMS_PER_PAGE;
$result = $mysqli->query($sql);
$result = convertResultToArray($result);
?>
