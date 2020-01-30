<?php
class ScrubConfig{

    function __construct(){

     
        $this->tableName = 'SCRUB_CONFIG_DETAIL';
        $this->columns = ['id','scrubbing_percentage'];
        $this->dbIns = new \SQLite3(__DIR__.'/scrubDb.db');
    }

    public function getScrubPercentage(){
        $tableStatus = $this->checkTableExist();

        if(!$tableStatus){
            $this->createTable();
        }

        $rows = $this->selectData();

        if(!$rows){
            $data = $this->insertTable();
            $rows = $this->selectData();
        }

        return $rows;
    }

    public function createTable(){
        try{
            $sql = <<<EOF
                    CREATE TABLE $this->tableName
                    (   id INTEGER PRIMARY KEY AUTOINCREMENT,
                        scrubbing_percentage INT NOT NULL DEFAULT 0
                    );
EOF;
            return $this->dbIns->query($sql);
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function insertTable(){
        try{
            $scrub_value = 10;

            $sql = <<<EOF
                    INSERT INTO  $this->tableName(`scrubbing_percentage`) values($scrub_value);
EOF;

            return $this->dbIns->query($sql);
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function selectData(){
        try{
            $sql =<<<EOF
            SELECT * from $this->tableName LIMIT 1
EOF;
            $ret = $this->dbIns->query($sql);
            return $ret->fetchArray();
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }

    }

    public function checkTableExist(){
        try{
            $sql =<<<EOF
            SELECT name FROM sqlite_master WHERE type='table' AND name='$this->tableName'
EOF;
            $ret = $this->dbIns->query($sql);
            return $ret->fetchArray();
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }

    }

    public function updateTable($per , $id){
        try{
            if(empty($per) || empty($id)){
                throw new \Exception("Please enter the percentage or row ID");
            }


            $sql = <<<EOF
                    UPDATE $this->tableName SET scrubbing_percentage=$per where id=$id;
EOF;

            return $this->dbIns->query($sql);
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

}
?>
