<?php 
class DB{
	/* var $dataSourceServer;
	 var $dataSourceUsername;
	 var $dataSourcePassword; */
	function connectDB(){
		$dataSourceServer="localhost";
		$dataSourceUsername="root";
		$dataSourcePassword="K@M1L1b3st";
		try {
			$conn = new PDO("mysql:host=$dataSourceServer;dbname=direct_db", $dataSourceUsername, $dataSourcePassword);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected successfully";
			return $conn;
		}
		catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}
	}

	function disconnectDB(){
		$conn = null;
		//echo "Disconnected";
	}
	
}