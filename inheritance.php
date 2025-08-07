<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Person{
        protected $name;
        public function setName($name){
            $this->name = $name;
        }
    }
    class Student extends Person{
        private $student_id;
        function setStudentId($student_id){
            $this->student_id = $student_id;
        }
        function print_info(){
            echo "Name:". $this-> name . ", Student id :" .$this-> student_id;
        }
    }

    $student = new Student();
    $student->setName("sourov");
    $student->setStudentId(12345);
    $student->print_info();
    ?>
</body>
</html>