<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'km_rice');

    class DB_con {
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($group_name, $group_pic) {
            $result = mysqli_query($this->dbcon, "INSERT INTO group_project(group_name,group_pic)
            VALUES('$group_name','$group_pic')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM group_project");
            return $result;
        }

        public function fetchda($group_id) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM km_unit WHERE km_group = '$group_id' ");
            return $result;
        }

        public function fetchonerecord($group_id) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM group_project WHERE group_id = '$group_id'");
            return $result;
        }

        public function update($group_name, $group_pic, $group_id){
            $result = mysqli_query($this->dbcon, "UPDATE group_project SET
                group_name = '$group_name',
                group_pic = '$group_pic'
                WHERE group_id = '$group_id'
            ");
            return $result;
        }

        public function delete($group_id) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM group_project WHERE group_id = '$group_id'");
            return $deleterecord;
        }

    }


?>
