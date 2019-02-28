<?php 

require_once('inc\Page.class.php');

HTML_Header();

/**
 * Assignment 01
 * 2019-02-28
 * Jonah
 * 
 * 
 * 
 * 
 */


if($_SERVER["REQUEST_METHOD"] == "POST") {
    FileAgent::writeToFile($_POST);
}

HTML_Footer();
?>