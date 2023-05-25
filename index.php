<?php

require_once './src/Classes/bootstrap.php';
require_once './src/Classes/includes/Test.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>

  <body>
    <div class="container my-5 m-auto w-75">
    <form method="post" action="./index.php" >
        <div class="row justify-content-between">

            <h2 class="fw-semi-bold col-6">Product List</h2>

            <div class="col-4 row justify-content-evenly">

                <a href="addProduct.php" class="btn btn-success col-lg-4 col-md-5 col-sm-5">Add</a>
                
                <button class="btn btn-danger col-lg-4 col-md-5 col-sm-5" name="massDelete" type="submit">Mass Delete</button>

            </div>
        </div>

        <hr>
        
        <div class="row justify-content-around">
          
            <?php
            echo $book->view();
            echo $dvd->view();
            echo $furniture->view();
            ?>
        
           

        </div>
      </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
