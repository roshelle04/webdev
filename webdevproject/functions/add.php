<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])) {
                $code = $_POST['code'];
                $name = $_POST['name'];

                if(empty($code) || empty($name)) {
                    if(empty($code)){
                        echo"<font color= 'red'>Subject Code Field is empty>.</font><br/>";
                    }
                    if(empty($name)){
                        echo"<font color= 'red'>Subject Name Field is empty>.</font><br/>";
                    }
                    echo <"<br/><a href='javascript:self.history.back();'>Go Back</a>";
                }
                else{
                        $result = mysqli_query($dbc, "INSERT INTO tblsubject(subject_code, subjectname) VALUES('$code', '$name')");
                        echo "<font color='green'> Data added successfully.";
                        echo "<br/><a href='../index.php>VIEW RESULT</a>";
                    }
            }
        ?>
    </body>
</html>