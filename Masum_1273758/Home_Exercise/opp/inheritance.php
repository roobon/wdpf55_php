<?php 
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
//    public $district ="";
//     public $country="";
//     function createForum($forumName) {
//         echo "$this->username creates a forum: $forumName";
//     }

//     function extravalue($member) {
//         echo "$this->username extra member: $member->username";
//     }
// }

// $member = new information();
// $member->username ="Khayrul Alam Rayan";
// $member->login();
// echo $member->username ." is ". ($member->isLoggedIn()?"login":"logout")."<br>";
// $admin = new Administrator();
// $admin->username="Mizanur Rahman";
// $admin->district="Maymanisng";
// $admin->country="Bangladesh";
// $admin->logout();
// echo $admin->username."is And His Country Name is ".$admin->country." And His District Name is ". $admin->district ." He is logout from website ".($admin->isLoggedIN()?" login ":" logout ")."<br>";
// $admin->extravalue($member)."<br>";
// $admin->createForum("W3schoool.com")

<<<<<<< HEAD
class Member{
    protected $isLoggedIN =false;
    protected $role;
    protected $users=[
        ["username"=>"abc","password"=>"xyz","role"=>"subcribers"],
        ["username"=>"cba","password"=>"yxz","role"=>"admin"],
        ["username"=>"acb","password"=>"zyx","role"=>"super_admin"],
    ];
    public function Login($user,$pass){
        foreach($this->users as $user_info){
            extract($user_info);
            if($username==$user && $password==$pass){
                $this->isLoggedIN=true;
                $this->role=$role;
            }
        }
    }
}
class role extends Member{
    public function __construct($user,$pass)
    {
     $this->Login($user,$pass);  
     if($this->isLoggedIN){
        if($this->role=='subcribers'){
            echo "You are logged in as a subcribers";
        }
        if($this->role=='admin'){
            echo "you are logged in as a admin";
        }
        if($this->role=='super_admin'){
            echo "you are logged in as a super admin";
        }
     }
     else{
        echo "invalid username/password";
     }
    }
}
$loggedIN = new role("abc","abe");
=======
 
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






>>>>>>> 1f2049152eb326f591bdb6fdd3c5632199d1755e



?>
