<?php
include "../../dbincloc/harmonies.inc";
include "testInput.inc";

//open the database connection
$db = new mysqli($hostname, $usr, $pwd, $dbname);
if ($db->connect_error) {
    die('Unable to connect to database: ' . $db->connect_error);
}


$jobid = "";
$res_name = "";
if (isset($_GET['jobid'])) {
    $jobid = testInput::escape($_GET["jobid"]);
}
$res_name = $_GET['subname'];
$res_file = "";
$save_name = $_GET['filename'];
header("Content-Disposition: attachment; filename=".$save_name.".csv");


if (!empty($jobid) && $result = $db->prepare("select $res_name from HarmoniesResults where JobID = ?")) {
    $result->bind_param("s", $jobid);
    $result->execute();
    $result->store_result();
    $result->bind_result($res_file);
    $result->fetch();
    echo $res_file;
    //var_dump($res_file);
    $result->close();
}

$db->close();
?>