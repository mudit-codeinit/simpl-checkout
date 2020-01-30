<?php
include(__DIR__.'/ScrubConfig.php');
class Scrub {

    public $scrubPercentage;
    public $dbIns;
    public $tableName;
    public $randomCount;
    public $columns;
    
    function __construct(){
        $sc= new ScrubConfig();
        $scResponse = $sc->getScrubPercentage();


        $param = isset($scResponse['scrubbing_percentage']) ? $scResponse['scrubbing_percentage'] : 10;
        
        $this->randomCount = rand(5,50);
        
        $this->tableName = 'SCRUB_CONFIG';
        $this->columns = ['id','total_order','current_order_count','order_per','scrub_value'];

        $this->dbIns = new SQLite3(__DIR__.'/scrubDb.db');
        $this->scrubPercentage = $param;
    
    }

    public function decide(){
       try{
        
        $canScrub= false;
        
        if(!$this->dbIns){
            throw new \Exception("DB Connection error !");
        }


        $tableStatus = $this->checkTableExist();

        if(!$tableStatus){
            $this->createTable();
        }

        $rows = $this->selectData(); // related to per
        if(!$rows){
            $data = $this->insertTable();
            $rows = $this->selectData(); 
        }
      
        

        // $rows = array_intersect_key($rows,array_flip($this->columns));
        
        $rows['current_order_count'] = $rows['current_order_count'] +1;

        if($rows['current_order_count']<=$rows['scrub_value']){
            $canScrub = true;
        }


        return $canScrub;

       }catch(\Exception $ex){
            return false;
       }
    }

    public function processDone(){
        try{
            $rows = $this->selectData(); 
            $rows = array_intersect_key($rows,array_flip($this->columns));
        
            $rows['current_order_count'] = $rows['current_order_count'] +1;

            $rows['total_order'] = $rows['total_order'] - 1;

            if($rows['total_order'] <1){
                //Delete the row
               return $this->deleteRow($rows['id']);
            }else{
                //update
                return $this->updateTable($rows);
            }

        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function createTable(){
        try{
            $sql = <<<EOF
                    CREATE TABLE $this->tableName
                    (   id INTEGER PRIMARY KEY AUTOINCREMENT,
                        total_order INT NOT NULL DEFAULT 0, 
                        current_order_count INT NOT NULL DEFAULT 0,
                        order_per INT NOT NULL DEFAULT 0,
                        scrub_value INT NOT NULL DEFAULT 0
                    );

EOF;
            return $this->dbIns->query($sql);
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function insertTable(){
        try{
            $scrub_value = ceil($this->randomCount * $this->scrubPercentage / 100);

            $sql = <<<EOF
                    INSERT INTO  $this->tableName(`total_order`,`current_order_count`,`order_per`,`scrub_value`) values($this->randomCount,0,$this->scrubPercentage,$scrub_value);
EOF;

            return $this->dbIns->query($sql);
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function updateTable($param = []){
        try{
            $arrCount = count($param);
            if(!$param || $arrCount<1){
                throw new \Exception("Invalid update param");
            }
            $updateStr = '';
            $inc = 0;
            
            foreach($param as $key=>$val){
                $updateStr.= ($inc++ < ($arrCount -1)) ?  '`'.$key.'`='."'".$val."', " : '`'.$key.'`='."'".$val."' ";
            }

            $sql = <<<EOF
                    UPDATE $this->tableName SET $updateStr;
EOF;

            return $this->dbIns->query($sql);
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

    public function deleteRow($id = NULL){
        try{
            if(!$id){
                throw new \Exception("Invalid row ID");
            }

            $sql =<<<EOF
            DELETE from $this->tableName where id=$id
EOF;
            return $this->dbIns->query($sql);
        
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }


    public function deleteAll(){
        try{
            if(!$id){
                throw new \Exception("Invalid row ID");
            }

            $sql =<<<EOF
            DELETE from $this->tableName
EOF;
            return $this->dbIns->query($sql);
        
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

}