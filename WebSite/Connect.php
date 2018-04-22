<?php
class Oci
{	
	
	public $stid;
	public $isConnected;
	private $connection;
	
    private function __constructor()
    {		
    }
	public function connect()
    {
		include '../../Db/DbCred.php';
         $this->connection = oci_connect($dbUser, $dbPass , $dbConn);
		 
		 if(!($this->connection))
		 {
			$this->isConnected = FALSE;
		 }
		 else
		 {
			$this->isConnected = TRUE;
		 }
    }

    // This will be called at the end of the script.
    public function __destruct()
    {
        oci_close($this->connection);
    }

    public function parseQuery($query)
    {
		$this->stid = oci_parse($this->connection, $query);	
    }
}
?>