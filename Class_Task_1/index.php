<?php 

    class Student{
        private $student_id;
        private $student_name;
        private $student_cgpa;
        private $student_gender;

        public function __construct(...$student_info){
            $this->student_id = $student_info[0];
            $this->student_name = $student_info[1];
            $this->student_cgpa = $student_info[2];
            $this->student_gender = $student_info[3];
        }

        public function getInfo(){
            return [$this->student_id, $this->student_name, $this->student_cgpa , $this->student_gender ];
        }
    }

    class Department{
        private $dept_name;
        private $dept_code;
        private $all_students = [];

        public function __construct(...$dept_info){
            $this->dept_name = $dept_info[0];
            $this->dept_code = $dept_info[1];
        }

        public function add_student(Student $student){
            
            $student_info = $student->getInfo();

            $student_array = array(
                "Student_Name" => $student_info[1],
                "Student_ID" => $student_info[0],
                "Student_CGPA" => $student_info[2],
                "Student_Gender" => $student_info[3],
                "Department_Name" => $this->dept_name,
                "Department_Code" => $this->dept_code
            );

            array_push($this->all_students, $student_array);

            echo "Successfully added Student ID: $student_info[0]<br/>";

        }

        public function show_all_students(){
            foreach($this->all_students as $key=>$value){
                echo "<br/>";
                foreach($value as $k=>$v){
                    echo "$k : $v <br/>";
                }
            }
        }

        public function delete_one_student($id){
            foreach($this->all_students as $key=>$value){
                if($value["Student_ID"] != $id){
                    continue;
                }else{
                    echo "Student ".$value['Student_ID'] ." removed successfully";
                    unset($this->all_students[$key]);
                }
            }
        }
    }

    $department1 = new Department('CSE', 1100);
    $department2 = new Department('BBA', 1010);

    // Adding Student
    echo "---------------- Adding a student ----------------<br/><br/>";
    $student1 = new Student(1, 'abc', 3.5, 'female');
    $student3 = new Student(3, 'ghi', 3.7, 'male');
    $student2 = new Student(2, 'def', 3.8, 'male');
    $department1->add_student($student1);
    $department1->add_student($student3);
    $department2->add_student($student2);

    // Show all Student
    echo "<br/>---------------- Showing all students ----------------<br/>";
    $department1->show_all_students();
    $department2->show_all_students();

    // Show all Student
    echo "<br/>---------------- Delete a student ----------------<br/>";
    $department1->delete_one_student(3);
    echo "<br/><br/>---------------- Showing all students ----------------<br/>";
    $department1->show_all_students();
    
?>