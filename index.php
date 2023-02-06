<?php
class User
{

    public $firstname,$lastname;
    public function __construct($firstname,$lastname)
    {
        $this->lastname=$lastname;
        $this->firstname = $firstname;

    }

    public function hello()
    {

        return "hello, " . $this->firstname;
        
    }
    public function test()
    {
        return $this->hello();
    }
}
$user1=new User("Johnnie","Roe");
echo $user1->test();
$hello = new User("John","");
 
 

 
?>
