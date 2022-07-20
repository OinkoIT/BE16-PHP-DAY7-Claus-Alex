<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class vehicles {
           public $name;
           public $model;
           public $makeYear;
           public $color;
           public $fuelType;

           function __construct($name,$model,$makeYear,$color,$fuelType)
           {
              $this->name = $name;
              $this->model = $model;
              $this->makeYear = $makeYear;
              $this->color = $color;
              $this->fuel = $fuelType;
           }

            function printVehicle(){
                echo "{$this->name} {$this->model} {$this->makeYear} {$this->color} {$this->fuel}";
            }

        }
        

        $var = new vehicles("BMW", "X6", "2020", "white","Benzin");
        echo $var->printVehicle ();
    ?>
</body>
</html>

name, model, makeYear, color, fuelType