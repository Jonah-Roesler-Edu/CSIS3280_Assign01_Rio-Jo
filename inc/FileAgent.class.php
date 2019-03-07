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

    static function writeToFile($post) {
        $content = array();
        
        //emilleao@histats.com,Elga,Millea,Female,0485 2nd Plaza,Umeå,Sweden
        $content [] = $post["email"];
        $content [] = $post["firstName"];
        $content [] = $post["lastName"];
        $content [] = $post["gender"];
        $content [] = $post["email"];
        $content [] = $post["streetAddress"];
        $content [] = $post["city"];
        $content [] = $post["country"];
        $contentToWrite = implode(',', $content);

        try {
            $file = fopen(DATAFILE_BOOK, 'a');
            fwrite($file, $contentToWrite);
            fclose($file);

            if(!file) {
                throw new Exception("File " . DATAFILE_BOOK ." could not be found!");
            }
        }
        catch(Exception $fe) {
            echo $fe->getMessage();
        }
    }



}

?>