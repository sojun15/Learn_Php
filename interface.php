<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    interface fully_abstract{
        public function all_parameters($a, $b, $name);
        public function sum($a,$b);
    }

    class non_abstract implements fully_abstract{
        private $name;
        public function sum($a,$b){
            return $a + $b;
        }
        // sum method is called in this method
        public function all_parameters($a, $b, $name){
            $this->name = $name;
            return "The sum of a and b is:". $this->sum($a,$b) . " and name of operation is: ".$this->name;
        }
    }

    $object = new non_abstract();
    $value = $object-> all_parameters(10, 20, "addition");
    echo $value;
    ?>
</body>
</html>