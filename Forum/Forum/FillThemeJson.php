<?php

$sql = "select * from theme";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
file_put_contents("Theme.json", json_encode($result, JSON_UNESCAPED_UNICODE));
