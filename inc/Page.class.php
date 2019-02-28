<?php 
class Page {

    static function HTML_Header() {
        ?>
        <!DOCTYPE <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>CSIS3380_Assignment01</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        </head>
        <body>
    
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
            <INPUT type = "button" name = "previous" value = "Previous"/>
            <INPUT type = "button" name = "save" value = "Save"/>
            <INPUT type = "button" name = "delete" value = "delete"/>
            <INPUT type = "button" name = "next" value = "Next"/>
            </TD>
        </TR>
        </TABLE>
        </FORM>
    
        <?php
    }
    
    static function HTML_Footer() {
        ?>
        </body>
        </html>
    
        <?php
    }
}



?>