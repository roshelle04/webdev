<!DOCTYPE html>
<html>
    <head>
        <title>ADD syllabus</title>
    </head>
    <body>
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])) {
                $code = $_POST['code'];
                $name = $_POST['name'];
                $subject = $_POST['subject'];

                if(empty($code) || empty($author)) {
                    if(empty($code)) {
                        echo "<font color= 'red'> Syllabus code is empty.</font><br/>;
                    }
                    if(empty($name)) {
                        echo "<font color= 'red'> Syllabus author is empty.</font><br/>;
                    }
                    echo"<br/><a href='javascript:self.history.back();'> FILL OUT MISSING FIELDS<a/>";
                }
                else{
                    $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(syllabus_code, syllabus_author,subject_id) VALUES ('$code','$name','$subject'));
                    echo "<font color='green'> data added sucessfully.";
                    echo ",br/><a href='../index.php'>View result</a>";
                }
            }
        ?>
    </body>
</html>