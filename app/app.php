<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cars.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return
        "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Bob's Car Lot</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>

          <body>
            <div class='container'>
              <h1>Bob's Car Lot</h1>

              <form action='cars.php'>
                <div class='form-group'>
                  <label for='amount'>Enter how much you want to spend: </label>
                  <input type='number' name='amount' id='amount'>
                </div>
                <button type='submit' class='btn btn btn-primary'>Submit</button>

              </form>
            </div>
          </body>
        </html>";
    });

    return $app;
?>
