<?php

function die_r($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    die();
}

require_once 'Database.php';

$db = new Database();

// getRow.
// $getRow = $db->getRow("SELECT * FROM users WHERE id = ?", ["2"]);
// die_r($getRow);

// getRows.
// $getRows = $db->getRows("SELECT * FROM users WHERE username = ?", ["JohnDoe"]);
// die_r($getRows);

// insertRow
// $insertRow = $db->insertRow("INSERT INTO users(username, password, email) VALUE(?, ?, ?)", ["BillGates", "password123", "bill@microsoft.com"]);
// die_r($insertRow);

// updateRow
// $updateRow = $db->updateRow("UPDATE users SET username = ?, password = ? WHERE id = ?", ["SteveJobs", "MacRules", "2"]);
// die_r($updateRow);

// deleteRow
$deleteRow = $db->deleteRow("DELETE FROM users WHERE id = ?", ["1"]);
die_r($deleteRow);

$db->Disconnect();
?>