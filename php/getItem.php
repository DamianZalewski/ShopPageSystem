<?php
    include "connection.php";
    $itemSql = "SELECT id, name, description, cost, stock, image FROM item WHERE parent_id = ".$subId;
    $itemResult = $conn->query($itemSql);
    $itemsResult = array();

    if (!empty($itemResult) && $itemResult->num_rows > 0) {
        while($itemRow = $itemResult->fetch_assoc()) {
            array_push($itemsResult, array("item_id" => $itemRow["id"], "item_name" => $itemRow["name"], "item_description" => $itemRow["description"],
                                            "item_cost" => $itemRow["cost"], "item_stock" => $itemRow["stock"], "item_image" => $itemRow["image"]));
        }
    }

    $conn->close();

?>