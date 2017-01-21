<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cars.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Bob's Car Lot</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>

          <body>
            <div class='container'>
              <h1>Bob's Car Lot</h1>

              <form action='cars'>
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

    $app->get("/cars", function() {
        $ford = new Car("Ford F-150", 55799, 130, "Blue", "http://truckszilla.com/wp-content/uploads/2016-Ford-F-150-SVT-Raptor-review-200x200.jpg");
        $porsche = new Car("Porsche 911", 98299, 5, "Red", "https://c.slashgear.com/wp-content/uploads/2016/07/P1260789-01-200x200.jpeg");
        $lexus = new Car("Lexus RX",123299, 13, "White", "http://topcarsmodels.com/wp-content/uploads/2016-Lexus-RX-350-F-Sport_01-200x200.jpg");
        $accord = new Car("Honda Accord", 35999, 21, "Blue", "http://rs1226.pbsrc.com/albums/ee410/punjabiportal/honda-accord-2013-004.jpg~c200");
        $cadi = new Car("Cadillac CTS", 115302, 14, "Black", "http://rs898.pbsrc.com/albums/ac181/andynsp1/7781567080241003422IM102565x421_A56.jpg~c200");
        $vwbug = new Car("VW Bug", 500, 232329, "White", "https://s-media-cache-ak0.pinimg.com/236x/41/40/47/414047a02d7f58b1afedc5e9449a8cfa.jpg");

        $all_cars = array($ford, $porsche, $lexus, $accord, $cadi, $vwbug);

        echo "<!DOCTYPE html>
        <html>
        <head>
          <meta charset='utf-8'>
          <title>Bob's Car Lot</title>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
        </head>

        <body>
          <div class='container'>
            <h1>Find Your Car At Bob's!</h1>
            <h3>dfkjdfj</h3>
            <ul>
              <li>eee</li>
              <li>rrrr</li>
            </ul>" .

            $output = "";
            foreach ($all_cars as $car) {
              $output = $output . "
              <div class='row'>
                <div class='col-md-3'>
                  <img src='" . $car->getImage() . "'>
                </div>
                <div class='col-md-3'><h3>" .
                  $car->getMake() . "</h3>
                  <p>$" . $car->getPrice() . "</p>
                  <p>" . $car->getMiles() . " miles</p>
                  <p>" . $car->getColor() . "</p>
                </div>
              </div>";
            }

            return $output . "</div> <!-- container -->
        </body>
        </html>";
    });

    return $app;



?>
