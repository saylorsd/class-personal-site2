<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 4/28/2016
 * Time: 7:55 PM
 */

if (isset($_POST)) {
    file_put_contents("contact.txt", implode(',',$_POST) . "\n", FILE_APPEND);
    $fp = fopen("contact.txt", "r");
    $i = 0;
    while (!feof($fp)) {
        fgets($fp);
        $i++;
    }
    fclose($fp);
    $result = array("success" => "true", "count" => $i-1);
    header('Content-Type: text/json');
    echo json_encode($result);
} else {
    header('Content-Type: text/json');
    echo json_encode(array("success" => "false"));
}
exit();