<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class Abstraction{
        public abstract function display();
        
        public function show(){
            echo "This is a non-abstract method in an abstract class.";
        }
    }
    class inherit_class extends Abstraction{
        public function display(){
            echo "abstract class abstract method implemented in child class.";
        }
    }

    $object = new inherit_class();
    $object->display();
    echo "<br>";
    $object->show();
    ?>
</body>
</html>