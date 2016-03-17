<?php
//code voor views/galerij.php
return toonAfbeeldingen();
function toonAfbeeldingen(){
$out = "<h1>Afbeeldingsgalerij</h1>";
$out .= "<ul id='afbeeldingen'>";
$out .= "<div id='FTS1'>";
$out .= "<div id='FTS2'>";
$folder = "img";
$filesInFolder = new DirectoryIterator($folder);


class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return parent::current();
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'linksdb';
$linkarray = array();
$l_index = 0;
$lup_index = 0;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT url FROM the_links"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        $linkarray[$l_index] = $v;
        $l_index = $l_index + 1;
    }
    $l_index = 1;
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";


	while ( $filesInFolder->valid() ) {
		$file = $filesInFolder->current();
		$filename = $file->getFilename();
		$src = "$folder/$filename";
		$fileInfo = new Finfo( FILEINFO_MIME_TYPE );
		$mimeType = $fileInfo->file( $src );

		if ( $mimeType === 'image/jpeg' ) {	
 			$out .= "<li><a href='$linkarray[$lup_index]'><img src='$src' /></a></li>";
            $lup_index = $lup_index + 1;
                       
 			//<img src='$src' />
		}
		$filesInFolder->next();
	}
	$out .= "<div><div></ul></div></div>";
	$lup_index =1;
	return $out;
}
 //$dynamic_newest .= "<a href='blah.php?id=$id''><img src='img/$pid.jpg'/></a>";
//<a href="url">link text</a>

