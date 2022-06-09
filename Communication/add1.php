<!DOCTYPE html>
<html>
   <?php
      session_start();
      include("connection.php");
      
      $cate = $_POST['category'];
      $state = $_POST['statement'];
      $rece = $_POST['receiver'];
      $title = $_POST['title'];
      $when = $_POST['when'];
      $where = $_POST['where'];
      $target_dir = "image/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $_SESSION['receiver'] = $rece;
      
      $sql = "INSERT INTO announce(category, announcement, image, receiver, `when`, `where`,title) VALUES ('$cate', '$state', '$target_file', '$rece', '$when', '$where','$title')" or die("Errors");
      if ($db->query($sql) === TRUE) 
      {
      	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
      	{}
      
      
      	
      	echo "<script>alert('You successfully added an announcement');</script>";
      	echo "<script>window.location=\"index.php\";</script>";
      	
      }
      
      
      else if ($rece != "Residents")
      {
      	
      	echo "<script>alert('You successfully added an announcement');</script>";
      	echo "<script>window.location=\"index.php\";</script>";
      }
      
      
      
     
      
      ?>
</html>