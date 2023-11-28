<!DOCTYPE html>
<html>
    <head>
        <title> ADD syllabus</title>
    </head>
    <body>
        <h1>add syllabus</h1>
        <a href="../index.php">Home</a>
        <br/><br/>

        <form action="../functions/addsyllabus.php" method="POST" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Syllabus Code</td>
                    <td><input type="text" name="code"></td>
                </tr>
                <tr>
                    <td>Syllabus author</td>
                    <td><input type="text" name="code"></td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>
                        <select name="subjects">
                            <?php
                                include_once("../dbConnection/mysqlconfig_connection.php");
                                $query = "SELECT * FROM tblsubjects";
                                $result = mysqli_query($dbc, $query);
                                while($res = mysqli_fetch_array($result)){
                                    echo"<option value = \"".$res['subject_id']."\">";
                                    echo $res['subject_name'];
                                    echo"<\option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><inout type="Submit" name="Submit" value="Add"></td>
                </tr>
            </table>
    </body>
</html>