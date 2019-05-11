<?php
	if (isset($_POST["submit"])) {
		$file = $_FILES["fileToUpload"];
		$file_name = $file["name"];
		$fileTmpName = $file["tmp_name"];
		$fileSize = $file["size"];
		$fileError = $file["error"];
		$fileType = $file["type"];
		$fileExt = explode(".", $file_name);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array("jpg", "jpeg", "png");

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError == 0) {
				if ($fileSize < 1000000) {
					$fileNameNew = uniqid("", true).".".$fileActualExt;
					$fileDest = "uploaded/0001/".$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDest);
					header("Location: ../view/");
				}else{
					echo "Muito Grande";
				}
			}else{
				echo "Error";
			}
		}else{
			echo "Extensão não permitida";
		}
	}
?>