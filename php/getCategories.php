<?php

    include "connection.php";
//    echo "<br />";
    $sql = "SELECT id, name FROM categories";
    $result = $conn->query($sql);
    $categoriesResult = array();

    if (!empty($result) && $result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            include "getSubCategories.php";
            array_push($categoriesResult, array("id" => $row["id"], "name" => $row["name"], "children" => $subCategoriesResult));
        }
    }
    $conn->close();

?>