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
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        </head>
        <body>
        <?php
    }

    static function HTML_writeForm(Person $writePerson, $index) {
        ?>
        <h1 class="display-4">Assignment #1 - Group Jonah and Rafael</h1>
        <FORM METHOD = "POST" ACTION <?PHP ECHO $_SERVER["PHP_SELF"]."?index = ".$index; ?>>
            <TABLE class="table">
            <TR >
                <TD>
                    <DIV class="form-group">
                        <h3>First Name</h3>
                        <INPUT class="form-control" type = "text" name = "firstName" value="<?php echo $writePerson->fName?>"/>
                    </DIV>
                    <DIV class="form-group">
                        <h3>Email Address</h3>
                        <INPUT class="form-control" type = "text" name = "email" value="<?php echo $writePerson->email?>"/>
                    </DIV>
                    <DIV class="form-group">
                        <h3>Street Address</h3>
                        <TEXTAREA row="25" cols = "23" name = "streetAddress" class="form-control">
                            <?php echo $writePerson->street?>
                        </TEXTAREA>
                    </DIV>
                </TD>
                <TD>
                    <DIV class="form-group">
                        <h3>Last Name</h3>
                        <INPUT class="form-control" type = "text" name = "lastName" value="<?php echo $writePerson->lName?>"/>
                    </DIV>
                    <DIV class="form-group">
                        <h3>Gender</h3>
                        <SELECT name = "gender" class="form-control">
                        <OPTION value = "Male" <?php if ($writePerson->gender == "Male") {echo "SELECTED";}?>>Male</OPTION>
                        <OPTION value = "Female" <?php if ($writePerson->gender == "Female") {echo "SELECTED";}?>>Female</OPTION>
                        </SELECT>
                    </DIV>
                    <DIV class="form-group">
                        <h3>City</h3>
                        <INPUT class="form-control" type = "text" name = "city" value="<?php echo $writePerson->city?>"/>
                        <h3>Country</h3>
                        <INPUT class="form-control" type = "text" name = "country" value="<?php echo $writePerson->country?>"/>
                    </DIV>
                </TD>
            
            </TR>
            <TR>
                <TD  colspan="2" class="form-group">
                <INPUT type = "buttom" class="btn btn-outline-secondary" name = "btnPrevious" value = "Previous" onclick="window.location.href=".<?php echo $_SERVER["PHP_SELF"]."?index=".$index;?>/>
                <INPUT type = "submit" class="btn btn-primary" name = "btnSave" value = "Save"/>
                <INPUT type = "submit" class="btn btn-danger" name = "btnDelete" value = "Delete"/>
                <INPUT type = "buttom" class="btn btn-outline-secondary" name = "btnNext" value = "Next" onclick="window.location.href=".<?php echo $_SERVER["PHP_SELF"]."?index=".$index;?>/>
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