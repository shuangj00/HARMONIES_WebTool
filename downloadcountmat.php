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

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=countmatrix.csv");

if (!empty($jobid) && $result = $db->prepare("select TaxaCount from HarmoniesParameters where JobID = ?")) {
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