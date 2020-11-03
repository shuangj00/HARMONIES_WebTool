<?php
include "../../dbincloc/harmonies.inc";
include "testInput.inc";

//open the database connection
$db = new mysqli($hostname, $usr, $pwd, $dbname);
if ($db->connect_error) {
    die('Unable to connect to database: ' . $db->connect_error);
}

$jobid = "";
if (isset($_GET['jobid'])) {
    $jobid = testInput::escape($_GET["jobid"]);
}

$group = "";

if (isset($_GET['group'])) {
    $group =testInput::escape($_GET["group"]);
}

header("Content-type: application/json");

if (!empty($jobid) && $result = $db->prepare("select EstEdge" . $group . "_json from HarmoniesResults where JobID = ?")) {
    $result->bind_param("s", $jobid);
    $result->execute();
    $result->store_result();
    $result->bind_result($resultFile);
    $result->fetch();
    echo $resultFile;
    $result->close();
}

$db->close();
?>