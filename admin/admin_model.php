<?php
	$databaseHandler = new DatabaseHandler;
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
		
		public function insert($title, $description, $nama_foto) 
		{
			$query = "INSERT INTO
								article(title, description, foto)
								VALUES
								('$title', '$description', '$nama_foto')";
			$this->databaseHandler->eksekusi($query);
		}

		public function update() 
		{
			/*
			$query = "UPDATE spouse SET spouse_name = '$name', status = $status, marriage_date = '$marriage_date'
								WHERE id_spouse = $id_spouse " ;
			*/
			$this->databaseHandler->eksekusi($query);
		}

		public function delete() 
		{
			//$query = "DELETE FROM spouse WHERE id_spouse = " . $id;
			$this->databaseHandler->eksekusi($query);
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
		
		public function insert($title, $description, $nama_foto, $release_date) 
		{
			$newDate = date("Y-m-d", strtotime($release_date));
			$query = "INSERT INTO
								portofolio(title, description, foto, release_date)
								VALUES
								('$title', '$description', '$nama_foto', '$newDate')";
			$this->databaseHandler->eksekusi($query);
		}

		public function insertPhoto($title, $photo_title, $nama_foto) 
		{
			$query = "SELECT id FROM portofolio where title = '$title'";
			echo 'select query = ' .$query;
			$rows = $this->databaseHandler->eksekusiDenganPengembalian($query);
			$row = mysql_fetch_array($rows, MYSQL_NUM);
			echo 'result query = '.$row[0];
			$id = $row[0];
			$query = "INSERT INTO
								portofolio_photo(id_portofolio, title_photo, foto)
								VALUES
								('$id', '$photo_title', '$nama_foto')";
			$this->databaseHandler->eksekusi($query);
		}
		
		public function update() 
		{
			/*
			$query = "UPDATE spouse SET spouse_name = '$name', status = $status, marriage_date = '$marriage_date'
								WHERE id_spouse = $id_spouse " ;
			*/
			$this->databaseHandler->eksekusi($query);
		}

		public function delete() 
		{
			//$query = "DELETE FROM spouse WHERE id_spouse = " . $id;
			$this->databaseHandler->eksekusi($query);
		}
	}

?>