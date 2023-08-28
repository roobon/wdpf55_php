<?php 
// class Member{
//     public $username="";
//     private $loggedIN=false;
//     public function login(){
//         $this->loggedIN=true;}
//         public function logout(){
//             $this->loggedIN=false;
//         }
//         public function isLoggedIn(){
//             return $this->loggedIN;
//         }
    
// }
// class administrator extends Member{
//     function createForum($forumName){
//         echo "$this->username create a forum:$forumName";
//     }
//     function extravalue($member){
//         echo "$this->username extra member:$member->username";
//     }
// }
// $member = new Member();
// $member->username="Khayrul Alam Rayan";
// $member->login();
// echo $member->username."is".($member->isLoggedIn())?"loggedIN":"loggedout"."<br>";

 
// class information {
//     public $username = "";
//     private $loggedIN = false;

//     public function login() {
//         $this->loggedIN = true;
//     }

//     public function logout() {
//         $this->loggedIN = false;
//     }

//     public function isLoggedIn() {
//         return $this->loggedIN;
//     }
// }

// class Administrator extends information {
//     function createForum($forumName) {
//         echo "$this->username creates a forum: $forumName";
//     }

//     function extravalue($member) {
//         echo "$this->username extra member: $member->username";
//     }
// }

// $member = new information();
// $member->username = "Khayrul Alam Rayan";
// $member->login();

// echo $member->username . " is " . ($member->isLoggedIn() ? "logged in" : "logged out") . "<br>";
// class Form{
//     public $username ="";
//     private $loggedIn = false;
//     public function login(){
//         $this->loggedIn=true;
//     }
//     public function logout(){
//         $this->loggedIn=false;
//     }
// }
// class administration extends Form{
//    public function login(){
//         $this->loggedIn=true;
    
//     }
// }
class Form {
    public $username = "";
    public $department = "";
    private $loggedIn = false;

    public function login() {
        $this->loggedIn = true;
        
    }

    public function logout() {
        $this->loggedIn = false;
        
    }
    public function isLoggedIn(){
        return $this->loggedIn;
    }
}

class Administration extends Form {
        public $age="";
        public $country = "";
        function displayShow(){
           return $this->country;
        }
    }
    $member = new Form();
    $member->username="khayrul Alam Rayan";
    $member->login();
    
    
    $member->department = "";
    echo $member->username." is a innocent Boy And His Department is ".$member->department.($member->isLoggedIn()?" login ":" logout ");
    echo "<br>";
    $admin = new Administration();
    $admin->username ="Mizanur Raham";
    $admin->department='Accounting';
    $admin->age=30;
    $admin->logout();
    $admin->country="Bangladesh";
   
    echo $admin->username." is a Active boy And His of years old ".$admin->age." And his Department is ".$admin->department.($admin->isLoggedIn()?" login":" Logout ")." And his Country Name is " .($admin->displayShow());









?>
