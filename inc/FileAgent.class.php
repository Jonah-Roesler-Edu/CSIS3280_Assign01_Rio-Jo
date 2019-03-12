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


}

?>