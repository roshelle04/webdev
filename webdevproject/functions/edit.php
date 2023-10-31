<?php
        include_once("../dbConnection/mysqlconfig_connect.php");
        if(isset($_POST['update'])) {
            $id = $_POST['id'];
            $code = $_POST['code'];
            $name = $_POST['name'];

            if(empty($code) || empty($name)) {
                if(empty($code)) {
                    echo "<font color='red'>Subject Code field is Empty.</font><br/>";
                }
                if(empty($name)) {
                    echo "<font color='red'>Subject Name field is Empty.</font><br/>";
                }
            }
            else {
                mysqli_query($dbc, "UPDATE tblsubject SET subject_code='$code', subject_name='$name' WHERE subject_id='$id'");
                header("Location: ../index.php");
            }

        }
?>