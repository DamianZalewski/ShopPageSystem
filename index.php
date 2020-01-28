<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop page system</title>
    <meta name="description" content="Shop page system">
    <meta name="author" content="Damian Zalewski">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <span class="navbar-brand" href="index.html">ShopSystem</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.html">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="policies.html">Policies</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm">
                <div class="mainImage text-light text-center">
                    <div class="titleContainer">
                        <h1>Main page title</h1>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-light">
            <div class="row">
               <div class="col-sm-3 pt-4">
                    <!--     category section -->
                    <?php 
                        include "php/getCategories.php";
                        $i = 1;
                        foreach($categoriesResult as $value) {
                            $margin = $i != 1 ? "mt-3" : "";
                            echo '<button id="categoryBtn'.$i.'" type="button" class="btn btn-secondary w-100 hover '. $margin .'">'.$value["name"].'</button>';
                            echo '<div id="categoryItems'.$i.'" class="categoryItem list-group group'. $value["id"] .'">';
                            foreach($value["children"] as $child) {
                                echo    '<span id="subcategory'. $i .'" data-id="'. $child['child_id'] .'" class="list-group-item list-group-item-action subcategory"><i class="fas fa-cube"></i> '. $child["child_name"] .'</span>';
                            };
                            echo '</div>';
                            $i = $i +1;
                        }
                    ?>
                </div>
                <div class="col-sm-9 pt-3">
                    <!--      item section -->
                    <h1 class="pl-3">
                       <div class="container">
                            <div class="row">
                               <div class="col-sm-10">
                                    Category 1 
                               </div>
                               <div class="col-sm-2">
                                    <a href="cart.html" class="btn btn-secondary w-100">Cart <i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </h1>
                    <div class="container">
                        <div class="row">
<!--                         item card -->
                           <?php
//                                echo $subId;
                                if(!empty( $_GET["sub"])){
                                    $subId = $_GET["sub"];
                                    include "php/getItem.php";
                                    foreach($itemsResult as $item) {
                                        echo '
                                            <div class="col-sm-4 pb-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $item['item_image'] ).'" alt="Card image">
                                                    <div class="card-body">
                                                        <h4 class="card-title">' . $item["item_name"] . '</h4>
                                                        <p class="card-text text-justify">
                                                             ' . $item["item_description"] . '
                                                        </p>
                                                        <p>
                                                            Stock: '. $item["item_stock"] .'
                                                        </p>
                                                        <p class="text-danger">
                                                            Price: ' . $item["item_cost"] . '$
                                                        </p>
                                                        <span href="#" class="btn btn-secondary w-100">Add to cart <i class="fas fa-shopping-cart"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            ';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container  bg-secondary text-light">
            <div class="row">
                <p class="text-center w-100 pt-3">
                    &copy; Copyright 2020 Damian Zalewski - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
    <div class="background"></div>

    <script src="script.js"></script>
</body>

</html>