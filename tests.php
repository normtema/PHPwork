<?php

header("Content-Type: text/plain; charset=utf-8");







class Human {
    public $name;
    public $age;

    //Constructor with parameters
    function __construct($name, $age) {
        $this->age = $age;
        $this->name = $name;
    }

    public function human_show() {
        echo "The human`s name is $this->name and age is is $this->age\n";
    }

}

//Inherited class from Main class HUMAN
class Employee extends Human {
    public $salary;
    public $post;

    function __construct($name, $age, $salary, $post) {
        parent::__construct($name, $age);
        $this->post = $post;
        $this->salary = $salary;
    }

    function human_show() {
        echo " post is $this->post, salary is is $this->salary\n";
        parent::human_show();
    }

}
$emp = new Employee('John', 25, 100, 'worker');
$emp->human_show();

echo "\n\n\n";
//////////////////////////////Singleton  ////////////////////////

class OnlyOne {
    private static $instance;
    private $var;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance(): OnlyOne{
        if(self::$instance === NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    function get_var() {
        return $this->var;
    }
    function set_var($var) {
        $this->var = $var;
    }
}

$instance = OnlyOne::getInstance();
$instance->set_var(10);

$instance2 = OnlyOne::getInstance();
var_dump($instance2);
?>