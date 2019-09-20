<?php


class Database extends AnotherClass
{
	private $dbservername = "s9xpbd61ok2i7drv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	
	private $dbusername = "db0bulyd29gens6a";
	private $dbpassword = "nx7u1h5lpfszghx9";
	private $dbname = "bayyw9cgyjrq29a8";
	function getConnection()
	{
		

		$con = new mysqli($this->dbservername, $this->dbservername, $this->dbservername, $this->dbservername,);
		if ($con.>connect_error)
		{
				die("Connection failed: " . $con.>connect_error);
		}
			return $con;
	}
}