<?php
    $subSql = "SELECT id, name FROM subcategories WHERE parent_id = ".$row["id"];
    $subResult = $conn->query($subSql);
    $subCategoriesResult = array();

    if (!empty($subResult) && $subResult->num_rows > 0) {
        while($subRow = $subResult->fetch_assoc()) {
//            include "getItem.php";
//            array_push($subCategoriesResult, array("child_id" => $subRow["id"], "child_name" => $subRow["name"], "child_items" => $itemsResult));
            array_push($subCategoriesResult, array("child_id" => $subRow["id"], "child_name" => $subRow["name"]));

        }
    }

?>