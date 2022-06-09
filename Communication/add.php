<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Announcements</title>
     
      <link href="css/index.css" rel="stylesheet">
   </head>
   <?php
      include("connection.php");
      
      ?>
   <head>
   </head>
   <body>
      <?php
         // session_start();
         // if(isset($_SESSION['device_Id']))
         // {
         //     if ($_SESSION['device_Id'] != null)
         //     { 
         
         
             ?>
      <div class="cont">
         <div class="jumbotron">
            <?php  ?><br><br><br>
            <center>
               <h2>Add An Announcement</h2>
               <!--   <div class="form-group">  
                  <form class="form-inline" action="add1.php" method="post" enctype="multipart/form-data">  
                      
                  <label>Category</label>
                  <select name="category" required>
                  <option></option>
                  <?php
                     $sql = mysqli_query($db, "SELECT * FROM ref_category");
                     while($row = mysqli_fetch_assoc($sql))
                     {
                     ?>
                  <option><?php echo $row['category']; ?></option>
                                  
                           
                  <?php
                     }
                     ?>                        
                  
                  
                            </select><br><br>
                  
                          <label>Receiver</label>
                          <select name="receiver" required>
                          <option></option>
                          <option>Residents</option>
                          
                  
                  <?php
                     $sql = mysqli_query($db, "SELECT * FROM ref_position WHERE position_ID != 1");
                     while($row = mysqli_fetch_assoc($sql))
                     {
                     ?>
                  <option><?php echo $row['position_Name']; ?></option>
                                  
                           
                  <?php
                     }
                     ?>
                  </select><br><br>  
                  <label>Statement&nbsp;&nbsp;</label><textarea required class="control-label" rows="6" name="statement"></textarea><br><br>
                  <label>Image</label> <input class= "form-control" type="file" name="image" value=""><br><br>
                  <?php echo "This Picture wont appear in the message (for the page only)" ?><br>
                  <input type="submit" value="SUBMIT" <button class="btn btn-success"></button>
                  </form>
                  </div> -->
            </center>
         </div>
      </div>
      </h2>
      </div>
      <div class="clm-3"></div>
      <form class="form-horizontal clm-6" action="add1.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
            <label class="control-label cls-2" for="Category">Category</label>
            <div class="cls-10">
               <select name="category" class="form-control" required>
                  <option></option>
                  <?php
                     $sql = mysqli_query($db, "SELECT * FROM ref_category");
                     while($row = mysqli_fetch_assoc($sql))
                     {
                     ?>
                  <option><?php echo $row['category']; ?></option>
                  <?php
                     }
                     ?>                        
               </select>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label cls-2" for="receiver">Receiver</label>
            <div class="cls-10">
               <select name="receiver" class="form-control" required>
                  <option></option>
                  <?php
                     $sql = mysqli_query($db, "SELECT * FROM ref_position");
                     while($row = mysqli_fetch_assoc($sql))
                     {
                     ?>
                  <option><?php echo $row['position_Name']; ?></option>
                  <?php
                     }
                     ?>                       
               </select>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label cls-2" for="Statement">Title</label>
            <div class="cls-10"> 
               <textarea required class="form-control" rows="6" id="title" name="title"></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label cls-2" for="Statement">When</label>
            <div class="cls-10"> 
               <textarea required class="form-control" rows="6" id="when" name="when"></textarea>
            </div>
         </div><div class="form-group">
            <label class="control-label cls-2" for="Statement">Where</label>
            <div class="cls-10"> 
               <textarea required class="form-control" rows="6" id="where" name="where"></textarea>
            </div>
         </div><div class="form-group">
            <label class="control-label cls-2" for="Statement">Statement</label>
            <div class="cls-10"> 
               <textarea required class="form-control" rows="6" id="pwd" name="statement"></textarea>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label cls-2" for="Statement">Image</label>
            <div class="cls-10" title="This Picture wont appear in the message (for the page only)"> 
               <input class= "form-control" type="file" name="image" value="" title="This Picture wont appear in the message (for the page only)">
            </div>
         </div>
         <div class="form-group">
            <div class="cls-offset-2 cls-10">
               <button type="submit" class="btn btn-default">Submit</button>
            </div>
         </div>
      </form>
      </div>
      </div>
      </div>
     
      <?php
         // }
         // }
             // else
             // {
             //     echo "<script>alert('Your account must be logged in');</script>";
             //      echo "<script>window.location=\"login_sms_account.php\";</script>";
         
             // }
         
         
         ?>
   </body>
</html>