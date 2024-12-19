<?php 
include 'database.php';

$obj = new Database();

$colName = "students.id,students.student_name,students.age,citytb.cname";
$join = "citytb ON students.city = citytb.cid";
$limit = 2;


$obj->select('students',$colName,$join,null,null,$limit);
echo "\n\nSelect result is : ";
print_r($obj->getResult());

$obj->pagination('students',$join,null,$limit);

// for data insert

// $obj->insert('students',['student_name'=>'irfan karim','age'=>'63','city'=>'Dhaka',]);
// echo "Insert result is : ";
// print_r($obj->getResult());

// for data update

// $obj->update('students',['student_name'=>'Khalid Farhan','age'=>'29','city'=>'Broklyn'],'id="4"');
// echo "Update result is : ";
// print_r($obj->getResult());

// for delete data

// $obj->delete('students','id= 4');
// echo "Delete result is : ";
// print_r($obj->getResult());

// for show data

// $obj->sql('SELECT * FROM students WHERE age = 24');
// echo "Sql result is : ";
// print_r($obj->getResult());



?>
