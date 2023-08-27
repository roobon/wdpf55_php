<?php 
class member{
    public $username="";
    private $loggedIN=false;
    public function login(){
        $this->loggedIN=true;}
        public function logout(){
            $this->loggedIN=false;
        }
        public function isLoggedIn(){
            return $this->loggedIN;
        }
    
}
class administrator extends member{
    function createForum($forumName){
        echo "$this->username create a forum.$forumName";
    }
    function extravalue($member){
        echo "$this->username extra member.$member->username";
    }
}

?>