<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
include_once "classes/Pagina_Data.class.php";
$paginaData = new Pagina_Data();
$dbInfo = "mysql:host=localhost;dbname=linksdb"; $dbUser = "root";
$dbPassword = "";

try {
 $db = new PDO( $dbInfo, $dbUser, $dbPassword );
 $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 $paginaData->content = "<h1>We zijn verbonden!</h1>";
} catch ( Exception $e ) {
 $paginaData->content = "<h1>De connectie lukt niet!</h1><p>$e</p>";
}
$paginaData->content = include_once "controllers/links.php";

$paginaData->titel = "Dynamische afbeeldingsgalerij";
$paginaData->content = include_once "views/navigatie.php";
$paginaData->addCSS('ccs/reset.css');
$paginaData->addCSS('css/layout.css');
$paginaData->addCSS('css/navigatie.css');
$userClicked = isset($_GET['pagina']);
if ( $userClicked ) {
$fileToLoad = $_GET['pagina'];
} else {
$fileToLoad = "galerij";
}
$paginaData->content .=include_once "views/$fileToLoad.php";
$pagina = include_once "templates/pagina.php";
echo $pagina;