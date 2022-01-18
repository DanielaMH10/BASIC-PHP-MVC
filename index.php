<?php
    include "config.php"; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?=URL_CSS ?>styleIndex.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Login || Sign-in</title>
    </head>
    <body>
        <form id="Form" action="<?= URL_CONTROLLER ?>User-controller.php" method="POST">
            <h1 class="exampleone">Sign-in</h1><br/>
            <div class="mb-3">
                <label class="form-label">Document <input type="number" class="form-control" id="Document" name="Document" required/></label>
            </div>
            <div class="mb-3">
                <label class="form-label">Password <input class="form-control" type="password" id="Pass" name="Pass" required/></label>
            </div>
                <button type="submit" class="btn btn-primary" name="submit" id="submit" name="submit">Submit</button>
        </form>
    </body>
    </html>
