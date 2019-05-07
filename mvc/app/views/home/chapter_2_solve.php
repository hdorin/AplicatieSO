﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Chapter: <?=$data['chapter_name']?></title>
    <link rel="stylesheet" href="resources/stylesheets/header.css" type="text/css" />
    <link rel="stylesheet" href="resources/stylesheets/chapter_<?=$data['chapter_id']?>_solve.css" type="text/css" />
</head>
<body>
    <?php
        include "header.php"
    ?>
    <div class="questionBox">
        <div class="questionText">
            <p><?php echo $data['question_text']?></p>
        </div>
        <form class="questionCode" action="chapter_<?=$data['chapter_id']?>_solve/process" method="POST">
        <div class="textarea">
            <textarea class="codeField" name="code_field" rows="4" cols="50" required maxlength="<?php echo (string)$data['code_field_max_len']; ?>"><?php echo $data['code_field']; ?></textarea>
        </div>
        <input class="btnExecute" name="action" type="submit" value="Execute" onclick="executeFunction()"/>
            <input class="btnSubmit" name="action" type="submit" value="Submit" onclick="submitFunction()"/>
            <input class="btnSkip" name="action" type="submit" value="Skip"  formnovalidate/>
            <script>
                function executeFunction() {
                    document.getElementById("execMsg").innerHTML = "Executing ...";
                    document.getElementById("errorMsg").innerHTML = " ";
                }
                function submitFunction() {
                    document.getElementById("execMsg").innerHTML = "Submitting ...";
                    document.getElementById("errorMsg").innerHTML = " ";
                }
                </script>
        </form> 
    </div>
    <div class="resultBox">
        <p class="errorMsg" id="errorMsg"><?=$data['error_msg']?></p>
        <p class="execMsg" id="execMsg"><?=$data['exec_msg']?></p>
    </div>
</body>
</html>
