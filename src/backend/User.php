<?php



require_once 'Connection.php'; //changed to require_once

class User {
    private $conn;
    private $username;
    private $password;
    private $password_repeat;
    private $email;
    private $fullname;
    
    public function __construct() {
        $connection = connect();
        $this->conn = $connection;
    }
    
    public function logout(){
        //check if user is logged in
        if(isset($_SESSION['username'])){

            session_unset();
            session_destroy();
           return header('Location: ./index.php');
        }
        else{
            //redirect to login page
            return header('Location: ./index.php');
        }
    }
    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        $users = array();
        if ($result->rowCount() > 0) { //num_rows to rowCount()
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {  ///PDO::fetch assoc from $result->fetchAssoc
                $users[] = $row;
            }
        }
        return $users;
    }
    
    public function getUser($id) {
        $sql = "SELECT * FROM users WHERE id = $id;";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->rowCount() > 0) {
            $user = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $user;
    }
    
    public function createUser($username, $password, $email, $fullname) {
        if($this->password != $this->password_repeat) {
            echo "Passwords do not match";
            return false;
        }
        //using prepared statements to prevent dbh injection
        else{
            $sql = "INSERT INTO users (username, password, email, fullname) VALUES (:username, :password, :email, :fullname)";
            $result = $this->conn->prepare($sql);
            $result->execute([
                ':username' => $username,
                ":password" => $password,
                ":email" => $email,
                ":fullname" => $fullname
            ]);
            return $result;
        }
    }
    

    public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->rowCount() > 0) {
            $user = $result->fetch(PDO::FETCH_ASSOC);
        }

        $u = $this->getUserByUsername($username);
        if(count($u)>0){
            $_SESSION['userid'] = $u['id'];
        }
        return $user;
    }

    // define setters and getters
    public function setUsername($username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }

    //set and get fullName was not created in the User class
    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }
    public function getFullname() {
        return $this->fullname;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword_repeat($password_repeat) {
        $this->password_repeat = $password_repeat;
    }
    public function getPassword_repeat() {
        return $this->password_repeat;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }

    public function getUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->rowCount() > 0) {
            $user = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $user;
    }
    public function getUserNameById($id) {
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->rowCount() > 0) {
            $user = $result->fetch(PDO::FETCH_ASSOC);
        }
        // get first word
        return strtolower(explode(' ', $user['fullname'])[0]);


    }

    public function getUserByUsername($username) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->conn->query($sql);
        $user = array();
        if ($result->rowCount() > 0) {
            $user = $result->fetch(PDO::FETCH_ASSOC);
        }
        return $user;
    }

    public function contact($name, $email, $message, $subject) {
        $sql = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";
        $result = $this->conn->prepare($sql);
        $result->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message
        ]);
        
        if($result){
            $headers = "From: ".$email;
            $to = "nfonandrew73@gmail.com";
            $txt = "You have received an email from ".$name.".\n\n".$message;
			if(mail($to,$subject,$txt,$headers)){
				return true;
			}
			else{
				return false;
			}
        }
        else{
            return false;
        }
    }

    public function getMessages() {
        $sql = "SELECT * FROM contacts";
        $result = $this->conn->query($sql);
        $messages = array();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $messages[] = $row;
            }
        }
        return $messages;
    }

    //validation to ensure no tooo emails are stored in the database by first querying to see if it exist before inserting
    public function subscribeToNewsletter($email) {
        $query = "SELECT * FROM newsletter WHERE email ='$email'";
        $exists = $this->conn->query($query);

        if($exists->rowCount() > 0){
            return false;
            die("Email already exists");
        }

        $sql = "INSERT INTO newsletter (email) VALUES (:email)";
        $result = $this->conn->prepare($sql);
        $result->execute([
            'email' => $email,
        ]);
        return $result;
    }

}