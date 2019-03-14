<?php 
/**
 * Assignment 01
 * 2019-02-28
 * Jonah, 300279311
 * Rafael
 */

require_once('inc\Page.class.php');
require_once('inc\Person.class.php');
require_once('inc\FileAgent.class.php');
require_once('inc\config.inc.php');

//Create array to hold people
$newPerson = new Person("", "", "", "", "", "", ""); 
$peopleArray = array();
$peopleArray[] = $newPerson;
foreach(FileAgent::ReadPeople() as $rPerson) {
    $peopleArray[] = $rPerson;
}

// People array index is initializing at 0
$pIndex = 0;

//Recieve index from POST index value
// validate btnNext and btnPrevious before HTML_WriteForm to let it knows what index it should show  
// if btnNext was pressed and index is below People array maximum
if(isset($_POST['btnNext']) && isset($_POST['index']) && $_POST['index'] < count($peopleArray)-1)  {
    // assign the Post index value to variable index plus one
    $pIndex = $_POST['index']+1;
}
// if btnPrevious is pressed and the post index value is higher than 0
if(isset($_POST['btnPrevious']) && isset($_POST['index']) && $_POST['index'] > 0) {
    // assign the Post index value to variable index less one
    $pIndex = $_POST['index'] - 1;
}

//if btnDelete is pressed and index value is higher than 0
if(isset($_POST['btnDelete']) && isset($_POST['index']) && $_POST['index'] > 0) {
    //if the index is below max, go to next person. If at max go to previous person
    if($_POST['index'] < count($peopleArray)-1) {
        $pIndex = $_POST['index']+1;
    }
    else {
        $pIndex = $_POST['index']-1;
    }

    FileAgent::deletePerson($_POST);
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

Page::HTML_Footer();

    
?>