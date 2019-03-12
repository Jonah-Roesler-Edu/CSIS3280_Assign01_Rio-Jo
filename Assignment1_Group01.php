<?php 

require_once('inc\Page.class.php');
require_once('inc\Person.class.php');
require_once('inc\FileAgent.class.php');
require_once('inc\config.inc.php');

/**
 * Assignment 01
 * 2019-02-28
 * Jonah
 * 
 * new test from jonah home
 * 
 * 
 * 
 */

// <INPUT type = "submit" name = "btnPrevious" value = "Previous"/>
// <INPUT type = "submit" name = "btnSave" value = "Save"/>
// <INPUT type = "submit" name = "btnDelete" value = "delete"/>
// <INPUT type = "submit" name = "btnNext" value = "Next"/>

//UNIMPLEMENTED METHODs
//INITIALIZE PAGE
    $peopleArray = array();
    foreach(FileAgent::ReadPeople() as $rPerson) {
        $peopleArray[] = $rPerson;
    }
    if(isset($_POST['btnNext']) && isset($_GET['index']) && $_GET['index'] <= count($peopleArray)) {
        $pIndex = $_GET['index'] + 1;
    }
    if(isset($_POST['btnPrevious']) && isset($_GET['index']) && $_GET['index'] >= 0) {
        $pIndex = $_GET['index'] - 1;
    }
    else {
        $pIndex = 0;
    }
// var_dump($peopleArray);
Page::HTML_Header();
//Person 0 is the new person or blank person.
Page::HTML_WriteForm($peopleArray[$pIndex], $pIndex);

if(isset($_POST['btnSave'])) {
    FileAgent::writeToFile($_POST);
}

if(isset($_POST['btnDelete'])) {
    FileAgent::writeToFile($_POST);
}


Page::HTML_Footer();
?>