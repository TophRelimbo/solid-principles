<?php
public class Student{
    public $name, $current_address, $permanent_address, $id_number;
    private $_secret_key;
   
    public function getstudentList($yearlevel = null){}
    public function create() {}
    public function retrieve() {}
    public function update() {}
    public function delete() {}
}
public class Course{
  public $name, $student_count;
  
   public function getCourse($course = null){}
   public function create() {}
   public function retrieve() {}
   public function update() {}
   public function delete() {}
}
?>
