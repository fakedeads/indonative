<?php
	include "admin_model.php";
	
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
		case "login":
			$username = $_POST['username'];
			$password = $_POST['password'];
			$is_success = $databaseHandler->login($username, $password);
			echo "USERNAME : ".$username."<br/>PASSWORD : ".$password."<br/>".$is_success;
			session_start();
			if($is_success==1)
			{
				$_SESSION['username']=$username;
			}
			else
			{
				$_SESSION['username']='';
			}
		header("location: index.php");
		break;
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
		header('Location: index.php');
		break;
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
      header('Location: index.php');
	  break;
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
