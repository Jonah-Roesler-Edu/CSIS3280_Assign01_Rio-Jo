<?php 

require_once('inc\Page.class.php');
require_once('inc\FileAgent.class.php');
require_once('inc\Person.class.php');
require_once('inc\config.inc.php');


Page::HTML_Header();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    FileAgent::writeToFile($_POST);
}

var_dump(FileAgent::readFile());


Page::HTML_Footer();
?>