<?php
include 'connect.php';

function get_single_work($pdo, $work) {
    $query = "SELECT * FROM tbl_projects WHERE projects_id = '$project'";

    $get_project = $pdo->query($query);
    $results = array();

    while($row = $get_project->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;

        // you could run subresult queries here - just write another function and append.
    }

    return $results;
}

function get_all_projects($pdo) {
    $query = "SELECT * FROM tbl_projects";

    $get_project = $pdo->query($query);
    $results = array();

    while($row = $get_project->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $row;
    }

    return $results;
}

?>