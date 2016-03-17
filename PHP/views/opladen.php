<?php

//code voor views/opladen.php
$paginaData->addCSS('css/opladen.css');
$newImageSubmitted = isset( $_POST['new-image'] );
if ( $newImageSubmitted ) {
	$output = opladen();
} 
else {
	$output = include_once "views/upload-form.php";
}
return $output;
function opladen(){
	include_once "classes/Oplader.class.php";
	$oplader = new Oplader( "image-data" );
	$oplader->saveIn("img");
	$fileUploaded = $oplader->save();
	if ($fileUploaded) {
		$out = "<div id='nieuw_B'>nieuw bestand opgeladen</div>";
		try {
    		$conn = new PDO("mysql:host=localhost;dbname=linksdb", $dbUser ='root', $dbPassword='');
    		// set the PDO error mode to exception
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    		// prepare sql and bind parameters
    		$stmt = $conn->prepare("INSERT INTO the_links (url, name) VALUES (:url, :name)");
    		$stmt->bindParam(':url', $url);
    		$stmt->bindParam(':name', $name);

    		// insert a row
    		$url = $_POST['TBN_link'];
    		$name = $_POST['TBN2_link'];
            $stmt->execute();

            

    		echo "New records created successfully";
    	}
		catch(PDOException $e)
    	{
    	echo "Error: " . $e->getMessage();
   		}
		$conn = null;
	} 
	else {
	$out = "<div id ='fout_B'>er is iets foutgelopen</div>";
	}
return $out;
}

