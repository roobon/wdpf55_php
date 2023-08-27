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

 
class information {
    public $username = "";
    private $loggedIN = false;

    public function login() {
        $this->loggedIN = true;
    }

    public function logout() {
        $this->loggedIN = false;
    }

    public function isLoggedIn() {
        return $this->loggedIN;
    }
}

class Administrator extends information {
    function createForum($forumName) {
        echo "$this->username creates a forum: $forumName";
    }

    function extravalue($member) {
        echo "$this->username extra member: $member->username";
    }
}

$member = new information();
$member->username = "Khayrul Alam Rayan";
$member->login();

echo $member->username . " is " . ($member->isLoggedIn() ? "logged in" : "logged out") . "<br>";
?>
