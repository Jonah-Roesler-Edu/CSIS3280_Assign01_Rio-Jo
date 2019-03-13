<?php 

require_once('inc\Page.class.php');
require_once('inc\Person.class.php');
require_once('inc\FileAgent.class.php');
require_once('inc\config.inc.php');
// require_once('StaticVar.php');

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

// index is initializing at 0
$pIndex = 0;

// I am validate btnNext and btnPrevious before to creat the HTML_WriteForm to let it knows what index it should show  
// if btnNext was pressed and the index value is low of people array
if(isset($_POST['btnNext']) && isset($_POST['index']) && $_POST['index'] < count($peopleArray)-1)  {
    // assign the Post index value to variable index plus one
    $pIndex = $_POST['index']+1;
}
// if btnPrevious is pressed and the post index value is higher of 0
if(isset($_POST['btnPrevious']) && isset($_POST['index']) && $_POST['index'] > 0) {
    // assign the Post index value to variable index less one
    $pIndex = $_POST['index'] - 1;
}

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




Page::HTML_Footer();

    
?>