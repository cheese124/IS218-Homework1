<?php
class MyClass {
   function __construct() {
       print "This is my new constructor" ;
       $this->name = "MyClass";
   }

   function __destruct() {
       print " and now ". $this->name ." is destroyed ";
   }
}

$obj = new MyClass();
?>