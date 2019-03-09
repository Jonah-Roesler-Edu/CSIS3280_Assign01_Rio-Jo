<?php 
class Page {

    static function HTML_Header() {
        ?>
        <!DOCTYPE <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
            <title>CSIS3380_Assignment01</title>

        </head>
        <body>
        <?php
    }

    static function HTML_writeForm(Person $writePerson) {
        ?>

        <FORM METHOD = "POST" ACTION <?PHP ECHO $_SERVER["PHP_SELF"]; ?>>
            <TABLE>
            <TR>
                <TD>
                    <UL>
                        <LI>
                        <h3>First Name</h3>
                        </LI>
                        <LI>
                        <INPUT type = "text" name = "firstName"/>
                        </LI>
                        <LI>
                        <h3>Email Address</h3>
                        </LI>
                        <LI>
                        <INPUT type = "text" name = "email"/>
                        </LI>
                        <LI>
                        <h3>Street Address</h3>
                        </LI>
                        <LI>
                        <INPUT type = "text" name = "streetAddress"/>
                        </LI>
                        
                    </UL>
                </TD>
                <TD>
                <UL>
                        <LI>
                        <h3>Last Name</h3>
                        </LI>
                        <LI>
                        <INPUT type = "text" name = "lastName"/>
                        </LI>
                        <LI>
                        <h3>Gender</h3>
                        </LI>
                        <LI>
                            <SELECT name = "gender">
                            <OPTION value = "Male">Male</OPTION>
                            <OPTION value = "Female">Female</OPTION>
                            </SELECT>
                        </LI>
                        <LI>
                        <h3>City</h3>
                        </LI>
                        <LI>
                            <SELECT name = "city">
                            <OPTION value = "Vancouver">Vancouver</OPTION>
                            <OPTION value = "New York">New York</OPTION>
                            </SELECT>
                        </LI>
                        <LI>
                        <h3>Country</h3>
                        </LI>
                        <LI>
                            <SELECT name = "country">
                            <OPTION value = "Canada">Canada</OPTION>
                            <OPTION value = "US">US</OPTION>
                            </SELECT>
                        </LI>
                    </UL>
                </TD>
            </TR>
            <TR>
                <TD>
                <INPUT type = "submit" name = "btnPrevious" value = "Previous"/>
                <INPUT type = "submit" name = "btnSave" value = "Save"/>
                <INPUT type = "submit" name = "btnDelete" value = "delete"/>
                <INPUT type = "submit" name = "btnNext" value = "Next"/>
                </TD>
            </TR>
            </TABLE>
        </FORM>


        <?php
    }
    
    static function HTML_Footer() {
        ?>
        <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        </body>
        </html>
    
        <?php
    }

}



?>