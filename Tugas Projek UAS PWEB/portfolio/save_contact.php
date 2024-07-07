<?php
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $data_string = implode("|", $data) . PHP_EOL;
    file_put_contents("data/data_contact.txt", $data_string, FILE_APPEND);
    echo "Data saved successfully";
} else {
    echo "No data received";
}
