<?php

include "admin_model.php";

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
	//For Windows
	//$uploadPortofolioDirectory = 'C:/xampp/htdocs/indonative/admin/images/portofolio/';
	//$uploadArticleDirectory = 'C:/xampp/htdocs/indonative/admin/images/articles/';
	//For Mac
	$uploadPortofolioDirectory = '/Applications/XAMPP/xamppfiles/htdocs/private/indonative/indonative/admin/images/portofolio/';
	$uploadArticleDirectory = '/Applications/XAMPP/xamppfiles/htdocs/private/indonative/indonative/admin/images/portofolio/';

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
							move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadArticleDirectory . $newName);
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
		break;
		header('Location: index.php');
		case "portofolio":
			if($_FILES["photo"]["name"])
			{
				if(!$_FILES["photo"]["error"])
				{
					$newName = strtolower($_FILES["photo"]["name"]);

					if($_FILES["photo"]["size"] < (4096000))
					{
						if(is_uploaded_file($_FILES["photo"]["tmp_name"]))
						{
							$title = $_POST["title"];
							$description = $_POST["description"];
							$foto = $newName;
							$release_date = $_POST["release_date"];
							move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadPortofolioDirectory . $newName);
							$portofolioHandler->insert($title, $description, $foto, $release_date);
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
      break;
	  header('Location: index.php');
	  case "foto_portofolio":
			for($i=1; $i<=3; $i++)
			{
				if($_FILES["photo".$i]["name"] && $_POST['photo_title_'.$i])
				{
					if(!$_FILES["photo".$i]["error"])
					{
						$newName = strtolower($_FILES["photo".$i]["name"]);
						
						if($_FILES["photo".$i]["size"] < (1024000))
						{
							if(is_uploaded_file($_FILES["photo".$i]["tmp_name"]))
							{
								$title = $_POST["title"];
								echo $title;
								$photo_title = $_POST['photo_title_'.$i];
								$foto = $newName;
								move_uploaded_file($_FILES["photo".$i]["tmp_name"], 'C:/xampp/htdocs/indonative/admin/images/portofolio/'.$newName);
								$portofolioHandler->insertPhoto($title, $photo_title, $foto);
								echo $title.'<br/>'.$photo_title.'<br/>'.$foto.'<br/>'.$_FILES["photo".$i]["size"].'<br/>';
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
			}
      header('Location: index.php');
	  break;
	  default:
		break;
	}

?>
