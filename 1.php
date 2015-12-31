<?php
sleep(5);
$arr = $_REQUEST;
file_put_contents("./myfile.txt", $arr);
