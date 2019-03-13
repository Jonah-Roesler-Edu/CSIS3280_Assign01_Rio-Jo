<?php 
class FileAgent {
    static function readFile() {
        try{
            $file = fopen(DATAFILE_BOOK, 'r');

            $fContent = fread($file, filesize(DATAFILE_BOOK));

            fclose($file);

            if(!$file) {
                throw new Exception("File could not be found!");
            }
        }
        catch(Exception $fe) {
            echo $fe->getMessage();
        }

        return $fContent;
    }

    static function writeToFile($person) {
        $content = array();
        
        //emilleao@histats.com,Elga,Millea,Female,0485 2nd Plaza,Umeå,Sweden
        // $content [] = $post["email"];
        // $content [] = $post["firstName"];
        // $content [] = $post["lastName"];
        // $content [] = $post["gender"];
        // $content [] = $post["streetAddress"];
        // $content [] = $post["city"];
        // $content [] = $post["country"];
        $content [] = $person->email;
        $content [] = $person->fName;
        $content [] = $person->lName;
        $content [] = $person->gender;
        $content [] = $person->street;
        $content [] = $person->city;
        $content [] = $person->country;
        $contentToWrite = implode(',', $content);
        var_dump($contentToWrite);
        try {
            $file = fopen(DATAFILE_BOOK, 'a');
            fwrite($file, "\n" . $contentToWrite);
            fclose($file);

            if(!$file) {
                throw new Exception("File " . DATAFILE_BOOK ." could not be found!");
            }
        }
        catch(Exception $fe) {
            echo $fe->getMessage();
        }
    }

    static function ReadPeople(){    
        try {
            $contents = self::readFile();
            $people = array();
            $lines = explode("\n", $contents);
            for ($i=1; $i < count($lines) ; $i++) { 
                $columns = explode(",", $lines[$i]);
                $people[] = new Person($columns[1], $columns[2], $columns[0], $columns[3], $columns[4], $columns[5], $columns[6]);
            }
            return $people;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
        
    }

    static function deletePerson($post) {
        $fileContent = self::readFile();
        var_dump($fileContent);
        $people = array();
        try {

            $lines = explode("\n", $fileContent);
            for ($i=0; $i < count($lines) ; $i++) { 
                $columns = explode(",", $lines[$i]);
                $people[] = new Person($columns[1], $columns[2], $columns[0], $columns[3], $columns[4], $columns[5], $columns[6]);
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }

        // var_dump($people);
        $writeFile = fopen(DATAFILE_BOOK, 'w');
        fclose($writeFile);

        $deleteID = $post['email'];
        var_dump($post['email']);

        for($i = 1; $i < count($people); $i++) {
            var_dump($people[$i]->email);
            if(!strcasecmp($people[$i]->email, $deleteID)) {
                continue;
            }
            else {
                // $content = array();
                // $content [] = $people[$i]->email;
                // $content [] = $people[$i]->fName;
                // $content [] = $people[$i]->lName;
                // $content [] = $people[$i]->gender;
                // $content [] = $people[$i]->street;
                // $content [] = $people[$i]->city;
                // $content [] = $people[$i]->country;
                // $contentToWrite = implode(',', $content);
                
                // fwrite($writeFile, "\n" . $contentToWrite);
                self::writeToFile($people[$i]);

            }
        }
    }

    // static function findPerson($email) {
    //     $peopleArr = array();
    //     for($i = 0; $i < count($peopleArr); $i++) {
    //         if(strcasecmp($peopleArr[$i]->email, $email) ) {
    //             $returnPerson = $peopleArr[$i+1];
    //             break;
    //         }
    //     }
    // }

    // static function nextPerson($email) {
    //     $peopleArr = self::ReadPeople();
    //     $returnPerson;
    //     $counter = 0;

    //     if($email = '') {
    //         $returnPerson = $peopleArr[0];
    //     }
    //     else {
    //         for($i = 0; $i < count($peopleArr); $i++) {
    //             if(strcasecmp($peopleArr[$i]->email, $email) ) {
    //                 $returnPerson = $peopleArr[$i+1];
    //                 break;
    //             }
    //         }
    //     }
    //     return $returnPerson;
    // }


}

?>