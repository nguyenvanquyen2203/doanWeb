<?php
    class State{
        public $id;
        public $stateValue;
        public $stateName;

        public function __construct($id =null, $stateName='', $stateValue='') {
            if($stateName!='' && $stateValue !=""){
                $this->id = $id;
                $this->stateName = $stateName;
                $this->stateValue = $stateValue;
            }
        }
        public function getStateName(){
            return $this->stateValue;
        }
        //get all states
        public static function getAllStates($conn){
            $sql = "select * from states";
            $stmt = $conn->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'State'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $states = $stmt->fetchAll(); // Lấy ra cái đối tượng
            return $states;
        }
        public static function getPublicState($conn){
            $sql = "select * from states where stateName = 'PUBLIC'";
            $stmt = $conn->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'State'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $states = $stmt->fetch(); // Lấy ra cái đối tượng
            return $states;
        }
        public static function getPrivateState($conn){
            $sql = "select * from states where stateName = 'PRIVATE'";
            $stmt = $conn->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'State'); //Trả về 1 đổi tượng
            $stmt->execute(); // Thực hiện câu lệnh sql
            $states = $stmt->fetch(); // Lấy ra cái đối tượng
            return $states;
        }

    }
?>