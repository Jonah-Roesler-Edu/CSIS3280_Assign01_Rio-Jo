<?php 

require_once('inc\Page.class.php');
require_once('inc\Person.class.php');
require_once('inc\FileAgent.class.php');
require_once('inc\config.inc.php');
require_once('StaticVar.php');

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
$newPerson = new Person("", "", "", "", "", "", ""); 
$peopleArray = array();
$peopleArray[] = $newPerson;
foreach(FileAgent::ReadPeople() as $rPerson) {
    $peopleArray[] = $rPerson;
}


// var_dump($peopleArray);
$pIndex = 0;


Page::HTML_Header();
//Person 0 is the new person or blank person.
Page::HTML_WriteForm($peopleArray[$pIndex], $pIndex);
 

if(isset($_POST['btnSave'])) {
    $writePerson = new Person(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['streetAddress'],
        $_POST['city'],
        $_POST['country']); 
    FileAgent::writeToFile($writePerson);

}

if(isset($_POST['btnDelete'])) {

    FileAgent::deletePerson($_POST);
}

if(isset($_POST['btnNext']))  {
    
    $anotherp = FileAgent::nextPerson($_POST['email']);
    flush();
    Page::HTML_writeForm($anotherp, $pIndex);
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



Page::HTML_Footer();

    
?>