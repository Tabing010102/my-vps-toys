<?php
    $jd = json_decode(file_get_contents('php://input'), true);
    var_dump($jd);
?>