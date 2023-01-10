<?php 
class config{
    private $dbname, $dbpass, $dbuser, $dbhost;
    public
    $connect;
    function __construct()
    {
        $this->dbhost='localhost';
        $this->dbuser='root';
        $this->dbpass='';
        $this->dbname = 'to-do';
        $this->connect = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
        mysqli_set_charset($this->connect,'utf8');
    }
}
?>