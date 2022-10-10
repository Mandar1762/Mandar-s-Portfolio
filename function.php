<?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="contactportfolio";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $name=$data['name'];
        $email=$data['email'];
        $contact=$data['contact'];
        $subject=$data['subject'];
        $message=$data['text'];
        $q="insert into contactport set name='$name', email='$email', contact='$contact', subject='$subject', text='$message'";
       $data= $this->mysqli->query($q);
    }
    
 
}


?>