<?php 

require_once('inc\Page.class.php');

HTML_Header();

/**
 * Assignment 01
 * 2019-02-28
 * Jonah
 * 
 * I will now merge things
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
$newPerson = new Person();
$peopleArray = array();
$peopleArray[] = $newPerson;
$pIndex = 0;
foreach(FileAgent::ReadPeople() as $rPerson) {
    $peopleArray[] = $rPerson;
}

Page::HTML_Header();
//Person 0 is the new person or blank person.
Page::HTML_WriteForm($peopleArray[$pIndex]);

if(isset($_POST['btnSave'])) {
    FileAgent::writeToFile($_POST);
}
if(isset($_POST['btnNext'])) {

    if((++$pIndex) >= count($peopleArray)) {
    }
    else {
        flush();
        $pIndex++;
        Page::HTML_Header();
        Page::HTML_WriteForm($peopleArray[$pIndex]);
    }
}
if(isset($_POST['btnPrevious'])) {
    if((--$pIndex) < 0) {
    }
    else {
        flush();
        $pIndex--;
        Page::HTML_Header();
        Page::HTML_WriteForm($peopleArray[$pIndex]);
    }

}
if(isset($_POST['btnDelete'])) {
    FileAgent::writeToFile($_POST);
}


HTML_Footer();
?>