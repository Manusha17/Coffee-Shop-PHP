<?php

require_once("../PHPTestCrud/php/component.php");
require_once("../PHPTestCrud/php/db.php");

Createdb();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>

    <script src="https://kit.fontawesome.com/a640b2e9b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="bg">
    <main>
        <div class="container text-center">
            <h1 class="py-3 text-light rounded"><i class="fas fa-coffee mr-2"></i>Coffee Shop</h1>

            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <?php
                    inputElement("<i class='fas fa-file-signature'></i>", "Coffee Name", "coffee_name", "");
                    ?>
                    <div class="pt-2">
                        <div class="row">
                            <div class="col">
                                <?php
                                inputElement("<i class='fas fa-mug-hot'></i>", "Coffee Type", "coffee_name", "");
                                ?>
                            </div>
                            <div class="col">
                                <?php
                                inputElement("<i class='fas fa-dollar-sign'></i>", "Price", "coffee_name", "");
                                ?>
                            </div>
                        </div>
                        <div class="d-flex">
                            <?php btnElement("btn-create", "btn btn-success border mr-2", "<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Click to add new Coffee'") ?>
                            <?php btnElement("btn-read", "btn btn-primary border mr-2", "<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Click to read Coffee'") ?>
                            <?php btnElement("btn-update", "btn btn-light border mr-2", "<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Click to edit'") ?>
                        </div>
                </form>
            </div>            
        </div>

        <!-- Bootstrap table-->
        <div class="d-flex table-data mt-3">
                <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td>Capachino</td>
                            <td>Hot</td>
                            <td>4.50$</td>
                            <td><i class='fas fa-edit btnedit'></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</div>
</body>

</html>