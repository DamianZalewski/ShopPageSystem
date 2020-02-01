<?php
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $email = $_GET["email"];
    $date = $_GET["date"];
    $description = $_GET["description"];

    $cart = $_GET["cart"];
    $cart = json_decode($cart, false);
//    print_r($cart);

    include "connection.php";
    $lastIdSql = "SELECT MAX(id) FROM orders";
    $resultLastId = $conn->query($lastIdSql);

     if (!empty($resultLastId) && $resultLastId->num_rows > 0) {
            $id = $resultLastId->fetch_assoc();
            $newId = intval($id["MAX(id)"])+1;
            $sql = "INSERT INTO orders(id, name, surname, date, email, description) VALUES ('". $newId ."' ,'". $name ."','". $surname ."','". $date ."','". $email ."','". $description ."') ";

            if ($conn->query($sql) === TRUE) {
                foreach ($cart as $value) {
//                    print_r($value->id. " q: ". $value->quantity); // new id
                    $orderListSql = "INSERT INTO order_list(parent_id, item_id, quantity) VALUES ('".$newId."','".$value->id."','".$value->quantity."')";
                    if ($conn->query($orderListSql) === TRUE) {
                        $itemStockSql = "UPDATE item SET stock=stock-". $value->quantity." WHERE id=". $value->id;
                            if ($conn->query($itemStockSql) === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $itemStockSql . "<br>" . $conn->error;
                        }
                    } else {
                        echo "Error: " . $orderListSql . "<br>" . $conn->error;
                    }

                };
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
     }

    $conn->close();
?>