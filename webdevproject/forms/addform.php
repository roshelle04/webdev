<!DOCTYPE html>
<html>
<head>
    <title>add data</title>
</head>

<body>
    <h1>add subject</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action= "../functions/add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td> Subject code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td> Subject name</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>