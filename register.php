<?php
class Register {
    private $username;
    private $password;
    private $email;

    function __construct($username,$password,$email){
        $this->username = $username;
        $this->password=$password;
        $this->email=$email;
    }
    function get_username(){
        return $this->username;
    }
    function set_username($username){
        $this->username=$username;
    }
    function get_password($password) {
        $this->password = $password;
    }
    function set_password($password){
        $this->password=$password;
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email=$email;
    }
	public function __destruct()
    {
        echo "I'm dead now :(";
    }
    //public function students($email)
    //{
    //if(substr($email, -3)=="edu")
    //{
    //$array = array('Ju', 'jeni', 'student!');
    //echo implode(" ", $array);
    //echo " sepse email-i juaj eshte: " . $email;
    //}

    //else if(substr($email, -11)=="hotmail.com")
    //{
    //$replaced = str_replace("hotmail.com","outlook.com",$email);
    //echo "Email që keni dhënë është: ". $replaced;
    //}
    //}
}



?>