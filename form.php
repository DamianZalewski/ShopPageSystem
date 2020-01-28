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
            <span class="navbar-brand">ShopSystem</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="policies.php">Policies</a>
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
               <div class="pt-3 col-sm-12">
                    <h1>Form</h1>
                    <hr />
                </div>
                <div class="w-75 m-auto pb-4">
                <form>
                  <div class="form-group">
                    <label for="firstNameInput">First name</label>
                    <input type="text" class="form-control" id="firstNameInput" placeholder="John">
                  </div>
                  <div class="form-group">
                    <label for="lastNameInput">Last name</label>
                    <input type="text" class="form-control" id="lastNameInput" placeholder="Smith">
                  </div>
                  <div class="form-group">
                    <label for="emailInput">Email address</label>
                    <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="descriptionInput">Description</label>
                    <textarea class="form-control" id="descriptionInput" rows="3" placeholder="Description..."></textarea>
                  </div>
                </form>
                </div>   
                <div class="w-75 m-auto pb-4 text-center text-danger">
                    <a href="cart.php" class="btn btn-secondary mt-2 pl-5 pr-5">Back</a>
                    <a id="sendForm" href="summary.php" class="btn btn-secondary mt-2 pl-5 pr-5">Next</a>
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

    <script src="form.js"></script>
</body>

</html>
