<?php

echo "SORTING <br>";
$data = ["larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];
echo "Data Awal : [";
for ($i = 0; $i < sizeof($data); $i++) {
    echo '"' . $data[$i] . '",';
}
echo "]<br><br>";

sort($data);

echo "Setelah Di urut : [";
for ($i = 0; $i < sizeof($data); $i++) {
    echo '"' . $data[$i] . '",';
}
echo "]<br>";
