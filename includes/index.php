<?php

include 'functions.php';


if (isset($_GET['project'])) {
    // pass the connection and the movie id to a function
    $data = get_single_project($pdo, $_GET['project']);
    echo json_encode($data);
}

else {
    // pass the connection and the movie id to a function
    $data = get_all_projects($pdo);
    echo json_encode($data);
}
?>