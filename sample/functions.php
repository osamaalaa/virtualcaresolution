<?php
class Servant
{

    // database connection and table name
    private $conn;
    private $table_name = "users";

    // object properties
    public $user_id;
    public $user_name;
    public $username;
    public $password;
    public $user_mob;
    public $date_added;
    public $img_href;
    public $token = 0;
    public $auth_id = 0;
    public $expense_request_id;
    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    /**
     * function to check signin through user email and password
     * @param string username
     * @param string password 
     * return state @param bool
     */
    public function signin()
    {
        //$query = "SELECT * FROM users a left join `profile` b on a.username=b.username where  a.username = '$this->username' and a.password = '$this->password'";
        $query = "SELECT * FROM users a  where  a.username = '$this->username' and a.password = '$this->password'";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        $num = $stmt->rowCount();
        if ($num > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
       
            session_start();
            $_SESSION["username"] = $row['username'];
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['email'] = $row['email'];
            $_SESSION["imgpath"]=$row['imgpath'];


            return true;
        } else {
            return false;
        }
    }
    /**
     * function to validate get request in receiver page 
     * @param array request
     * return state @param bool 
     */
    public function validateRequest($request)
    {
        $this->user_id =  $request['uid'];
        $channelname = $this->GetChannelName();
        if ($channelname == $request['channel']) {
            return true;
        } else {
            return false;
        }
    }
    public function GetChannelName()
    {
        $query = "SELECT * FROM users where id='$this->user_id'";
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        $num = $stmt->rowCount();
        if ($num > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['channel'];
        } else {
            return false;
        }
    }


    public function getOldPassword()
    {
        $query = "SELECT * FROM users where username = '$this->username' and password = '$this->password'";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        $num = $stmt->rowCount();
        if ($num > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            session_start();
          
            $_SESSION['password'] = $row['password'];


            return $row['password'];
        } else {
            return false;
        }
       
    }


    public function SetChannelName()
    {
        $channelname_encoded = $this->encryptChannelName();
        $channelname_decoded = base64_decode($channelname_encoded);
        $query = "UPDATE users set channel='$channelname_decoded' where id = '$this->user_id'";
        $stmt = $this->conn->prepare($query);
        // execute query
        if ($stmt->execute()) {
            return $channelname_decoded;
        } else {
            return false;
        }
    }
    function ReferenceGenerator($length_of_string)
    {
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
        return strtoupper(substr(str_shuffle($str_result), 0, $length_of_string));
    }
    function encryptChannelName()
    {
        return base64_encode($this->ReferenceGenerator(6));
    }
    /* Function to call updated user profile details: 20211128 by:vimala 
    function getUserProfile(){
        $query = "SELECT * FROM users where username = '$this->username' and password = '$this->password'";
        //mysqli_query($conn, $query);
    } */
}
