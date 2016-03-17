<?php
//code voor classes/Pagina_Data.class.php
class Pagina_Data {
public $titel = "";
public $content = "";
public $css = "";
public $embeddedStyle = "";
//object method aanmaken
public function addCSS( $href ){
$this->css .= "<link href='$href' rel='stylesheet' />";
}
}