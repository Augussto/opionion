<?php 

// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
	
	$title = $_POST['title'];
	$points = $_POST['points'];
	$opinion = $_POST['opinion'];
	$id_user = $user_data['id'];
    $cant_opinions = $user_data['cant_opinions'];

    $status = 'error'; 
    
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $query = "INSERT into publications (title, points, opinion, img, id_user, uploaded) VALUES ('$title','$points','$opinion','$imgContent','$id_user', NOW())"; 
            $insert = mysqli_query($con, $query);

             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully.";
                $query = "UPDATE user SET cant_opinions = '$cant_opinions'+ 1 WHERE id = '$id_user'";
                mysqli_query($con, $query);
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg;

 ?>