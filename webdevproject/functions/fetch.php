<?php
    $query = "SELECT * FROM tblsubject LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubjects.subjectid";
    $result = mysqli_query($dbc, $query);
?>