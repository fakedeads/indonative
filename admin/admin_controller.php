<?php

$databaseHandler = new DatabaseHandler;
$articleHandler = new ArticleHandler;

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

$code = $_POST["code"];
	echo $code;
	switch ($code) 
	{
		case "articles":
			if($_FILES["photo"]["name"])
			{
				if(!$_FILES["photo"]["error"])
				{
					$newName = strtolower($_FILES["photo"]["name"]);
					
					if($_FILES["photo"]["size"] < (1024000))
					{
						if(is_uploaded_file($_FILES["photo"]["tmp_name"]))
						{
							$title = $_POST["title"];
							$description = $_POST["description"];
							$foto = $newName;
							move_uploaded_file($_FILES["photo"]["tmp_name"], 'C:/xampp/htdocs/indonative/admin/images/'.$newName);
							$articleHandler->insert($title, $description, $foto);
							echo $title.'<br/>'.$description.'<br/>'.$foto.'<br/>'.$_FILES["photo"]["size"].'<br/>';
							echo 'Selamat! Data berhasil masuk';
						}
					}
					else
					{
						echo 'Oops! file foto Anda terlalu besar.';
					}
				}
				else
				{
					echo 'Oops! Terdapat error :'.$_FILES["photo"]["error"];
				}
			}
      //header('Location: index.php');
	  break;
	  default:
		break;
	}

?>
