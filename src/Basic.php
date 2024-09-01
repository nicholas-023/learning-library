<?php 

namespace Nicholas023;

class Basic {
  public function __construct(string $name) {
    $this->name = $name;
  }

  function increment(int $int) {
    $int++;
  }
  
  function helloWorld()
  {
    echo "Hello World";
  }

  function sayHello(string $name)
  {
    echo "Hello $name, My name is $this->name";
  }
}

?>