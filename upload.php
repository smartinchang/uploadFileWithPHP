<?php
	// Kiểm tra xem có file nào được gửi lên không
	if (isset($_FILES['image'])){
		$target_dir = "uploads/"; // Thư mục lưu trữ ảnh
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Kiểm tra xem file đã upload là ảnh thực sự hay không
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["image"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Kiểm tra xem file đã tồn tại chưa
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Kiểm tra kích thước file (bạn có thể tùy chỉnh)
		if ($_FILES["image"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Chỉ cho phép một số định dạng file nhất định (bạn có thể tùy chỉnh)
		if (($imageFileType != "jpg") && ($imageFileType != "png") && ($imageFileType != "jpeg") && ($imageFileType != "gif")) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Nếu $uploadOk vẫn là 1 thì tiến hành upload file
		if ($uploadOk == 1) {
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}
?>