<?php

include "admin_model.php";

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
							move_uploaded_file($_FILES["photo"]["tmp_name"], 'C:/xampp/htdocs/indonative/admin/images/articles/'.$newName);
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
					
					if($_FILES["photo"]["size"] < (1024000))
					{
						if(is_uploaded_file($_FILES["photo"]["tmp_name"]))
						{
							$title = $_POST["title"];
							$description = $_POST["description"];
							$foto = $newName;
							$release_date = $_POST["release_date"];
							move_uploaded_file($_FILES["photo"]["tmp_name"], 'C:/xampp/htdocs/indonative/admin/images/portofolio/'.$newName);
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
