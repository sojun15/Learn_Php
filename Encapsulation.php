<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // encapsulation example
    class Student {
        private $name;
        private $student_id;

        public function set_method($name, $student_id){
            $this-> name = $name;
            $this-> student_id = $student_id;
        }

        public function get_method(){
            return "Name: " . $this->name . ", Student ID: " . $this->student_id;
        }
    }

    $student = new Student();
    $student-> set_method("sojun",12345);
    echo $student-> get_method();
    ?>
</body>
</html>