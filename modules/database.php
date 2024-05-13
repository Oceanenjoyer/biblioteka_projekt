<?php
Class DataBase{
    public $con = null;

    function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'bookinc'){
        $this->con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


        if($this->con->connect_error){
            die("Failed to connect to MySQL" . $this->con->connect_error);
        }
    }

    function close() {
        $this->con->close();
    }

    function query($query, $parameters = []){
        $stmt = $this->con->prepare($query);

        if ($stmt == false){
            die("Error in preparing a statement " . $this->con->error);
        }

        if (!empty($parameters)) {
            $types = "";
            $bindParams = [];

            foreach ($parameters as $param) {
                if (is_int($param)) {
                  $types .= "i";
                } elseif (is_double($param)) {
                  $types .= "d";
                } else {
                  $types .= "s";
                }
                $bindParams[] = $param;
            }

            $stmt->bind_param($types, ...$bindParams);
        }

        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            return $result;
        }else{
            die("Error in executing a statement" . $this->con->error);
        }
    }

    function getArray($query){
        return $query->fetch_array();
        
    }
}

$db = new DataBase();

?>