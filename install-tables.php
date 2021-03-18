<?php
include 'includes/connection.inc.php';
$connread = dbConnect('read', 'pdo');
$connwrite = dbConnect('write', 'pdo');
// sql to create table
$now=time();
$create_table_s_tags = "CREATE TABLE IF NOT EXISTS search_tags(
search_tags_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
search_tags_title VARCHAR(255) NOT NULL
)";
 $stmt = $connwrite->prepare($create_table_s_tags); 
  $stmt->execute();
  $OK = $stmt->rowCount();
		
 $add_st_query = "INSERT INTO  search_tags
 (
 search_tags_title
 )
 VALUES
 (
 'Web Developing'
 )";
        $stmt = $connwrite->prepare($add_st_query);     
		$stmt->bindParam(':admin_timestamp', $now, PDO::PARAM_STR);		
        $stmt->execute();
        $OK = $stmt->rowCount();
		
 $add_st_query = "INSERT INTO  search_tags
 (
 search_tags_title
 )
 VALUES
 (
 'Web Design'
 )";
        $stmt = $connwrite->prepare($add_st_query);     
		$stmt->bindParam(':admin_timestamp', $now, PDO::PARAM_STR);		
        $stmt->execute();
        $OK = $stmt->rowCount();	
		
 $add_st_query = "INSERT INTO  search_tags
 (
 search_tags_title
 )
 VALUES
 (
 'Admin Support'
 )";
        $stmt = $connwrite->prepare($add_st_query);     
		$stmt->bindParam(':admin_timestamp', $now, PDO::PARAM_STR);		
        $stmt->execute();
        $OK = $stmt->rowCount();		
		
 $add_st_query = "INSERT INTO  search_tags
 (
 search_tags_title
 )
 VALUES
 (
 'Legal Issues'
 )";
        $stmt = $connwrite->prepare($add_st_query);     
		$stmt->bindParam(':admin_timestamp', $now, PDO::PARAM_STR);		
        $stmt->execute();
        $OK = $stmt->rowCount();

 $add_st_query = "INSERT INTO  search_tags
 (
 search_tags_title
 )
 VALUES
 (
 'Photoshop Design'
 )";
        $stmt = $connwrite->prepare($add_st_query);     
		$stmt->bindParam(':admin_timestamp', $now, PDO::PARAM_STR);		
        $stmt->execute();
        $OK = $stmt->rowCount();	

 $add_st_query = "INSERT INTO  search_tags
 (
 search_tags_title
 )
 VALUES
 (
 'Software Engineering'
 )";
        $stmt = $connwrite->prepare($add_st_query);     
		$stmt->bindParam(':admin_timestamp', $now, PDO::PARAM_STR);		
        $stmt->execute();
        $OK = $stmt->rowCount();	

 $add_st_query = "INSERT INTO  search_tags
 (
 search_tags_title
 )
 VALUES
 (
 'SEO Optimization'
 )";
        $stmt = $connwrite->prepare($add_st_query);     
		$stmt->bindParam(':admin_timestamp', $now, PDO::PARAM_STR);		
        $stmt->execute();
        $OK = $stmt->rowCount();		

 $add_st_query = "INSERT INTO  search_tags
 (
 search_tags_title
 )
 VALUES
 (
 'Facebook Marketing'
 )";
        $stmt = $connwrite->prepare($add_st_query);     
		$stmt->bindParam(':admin_timestamp', $now, PDO::PARAM_STR);		
        $stmt->execute();
        $OK = $stmt->rowCount();		