<?php 

require_once('inc\Page.class.php');

HTML_Header();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    FileAgent::writeToFile($_POST);
}




HTML_Footer();
?>