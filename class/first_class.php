<?php

$databaseHandler = new DatabaseHandler;
$contactUsHandler = new ContactUsHandler;
$articleHandler = new ArticleHandler;
$portofolioHandler = new PortofolioHandler;

class DatabaseHandler
{
	public $connection;
	public $db;

	public function __construct() {
	   	$this->connection = mysql_connect("localhost","root","") or die("Koneksi Gagal");
	   	$this->db = mysql_select_db("indonative") or die("Database Tidak Ditemukan");
	}

	public function eksekusi($query)
	{
	  	$retval = mysql_query($query);
		if(! $retval ) {
			die('Tidak dapat memasukkan data: ' . mysql_error());
		}
	}

    public function eksekusiDenganPengembalian($query) {
        $retval = mysql_query($query);
        if(! $retval ) {
            die('Tidak dapat memasukkan data: ' . mysql_error());
        }
		//echo mysql_fetch_row($retval)[1];
        return $retval;
    }

	public function login($username, $password) {
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$query = mysql_query("select * from account where password ='$password' AND username ='$username'");
		$success = mysql_num_rows($query);
		return $success;
	}

}

class ContactUsHandler {
    public $databaseHandler;

    public function __construct() {
        $this->databaseHandler = new DatabaseHandler;
    }

		public function insert($name, $phone_number, $email_address, $message) {
			$query = "INSERT INTO
								message_list(id_message, name, phone_number, email_address, message)
								VALUES
								(null, '$name', '$phone_number', '$email_address', '$message')";
			$this->databaseHandler->eksekusi($query);
		}

		public function update() {
			/*
			$query = "UPDATE spouse SET spouse_name = '$name', status = $status, marriage_date = '$marriage_date'
								WHERE id_spouse = $id_spouse " ;
			*/
			$this->databaseHandler->eksekusi($query);
		}

		public function delete() {
			//$query = "DELETE FROM spouse WHERE id_spouse = " . $id;
			$this->databaseHandler->eksekusi($query);
    }

}

class ArticleHandler
{
    public $databaseHandler;

    public function __construct()
				{
        $this->databaseHandler = new DatabaseHandler;
    }

	public function query()
	{
		$query = "SELECT * FROM article";
		$retval = $this->databaseHandler->eksekusiDenganPengembalian($query);
		return $retval;
	}
}

class PortofolioHandler
{
    public $databaseHandler;

    public function __construct()
				{
        $this->databaseHandler = new DatabaseHandler;
    }

	public function query()
	{
		$query = "SELECT * FROM portofolio";
		$retval = $this->databaseHandler->eksekusiDenganPengembalian($query);
		return $retval;
	}

	public function queryDetail($id)
	{
		$query = "SELECT * FROM portofolio where id = ".$id;
		$retval = $this->databaseHandler->eksekusiDenganPengembalian($query);
		return $retval;
	}
	
	public function queryPhoto($id)
	{
		$query = "SELECT * FROM portofolio_photo where id_portofolio = '$id'";
		$retval = $this->databaseHandler->eksekusiDenganPengembalian($query);
		return $retval;
	}
}
?>
