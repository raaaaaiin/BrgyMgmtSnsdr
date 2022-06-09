<!DOCTYPE html>
<html lang="en">
   <?php
      include("connection.php");
      session_start();
      
      if (isset($_SESSION['receiver']))
      {
               $receiver  = $_SESSION['receiver'];
               // $position = $_SESSION['position'];
      
      
      }  
      
      ?>
   <head>
   <style>
   .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.button1 {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
   </style>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Announcements</title>
     
      <link href="css/index.css" rel="stylesheet">
      <link href="css/positioning.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
     
   </head>
   <body>
     

      <section class="blog-posts">
      <div class="cont">
        <div class="r">
          <div class="clg-8">
            <div class="all-blog-posts">
              <div class="r">















                










                  <?php
               $position = $_SESSION['position'];
               
                       
                       if ($_SESSION['position'] == 'Barangay Secretary' OR $_SESSION['position'] == 'Barangay Captain' OR $_SESSION['position'] == 'Barangay Treasurer') 
                       {
                          
                            $res = mysqli_query($db, "SELECT * FROM announce ORDER BY date DESC");
                           while ($r = mysqli_fetch_assoc($res))
                           {
               ?>

               <div class="clg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img style="image-rendering: pixelated;width:730;height:300px;background: url(<?php echo $r["image"]?>); background-size: cover;
    background-repeat: round;)"> 
                    </div>
                    <div class="down-content">
                      <span><?php echo $r['category']; ?></span>
                      <a href='../details.php?id=<?php echo $r["announceId"]?>' target="_Parent"><h4><?php echo $r['title']; ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $r['receiver'];?></a></li>
                        <li><a href="#"><?php echo date("M jS, Y", strtotime($r['date']));?></a></li>
                      </ul>
                      <p><?php echo $r['announcement']; ?></p>
                      <div class="post-options">
                        <div class="r">
                          <div class="c-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li>When:</li>
                              <li><?php echo $r['when']; ?></li>
                            </ul>
                          </div>
                          <div class="c-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Where:</a>,</li>
                              <li><a href="#"> <?php echo $r['where']; ?></a></li>
                            </ul>
                          </div>
                        </div> 
                        <div class="r">
                          <div class="c-12">
                            <div class="" style="margin-left:auto!important" >
                        <a class="button " href="edit.php?id=<?php echo $r['announceId']; ?>"> EDIT</a>
                        <a class="button1"  href="delete.php?id=<?php echo $r['announceId']; ?>"> DELETE</a>
                     </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>



            




            <?php
               }
               
               }
               
               else
               {
               
               $result = mysqli_query($db, "SELECT * FROM announce");
               while($r = mysqli_fetch_assoc($result))
               {
               
               ?>
            
            <?php
               }
               }
               ?>






               </div>
               </div>
               </div>
















               






























                <!--Side item -->
                <div class="clg-4"><div class="sidebar">
              <div class="r">
                
                <div class="clg-12">
                  <div class="sidebar-item recent-posts" style="margin-top:0px">
                    <div class="sidebar-heading">
                      <h2>Settings</h2>
                    </div>
                    <div class="content">
                      <ul>
                      
                                <li><a href="dashboard.php">
                                <h5>+ Home</h5>
                                </a></li>
                                <li><a href="add.php">
                                <h5>+ Add Event</h5>
                                </a></li>
                                <li><a href="category_option.php">
                                <h5>+ Add Category</h5>
                                </a></li>
                                
                      
                      </ul>
                    </div>
                  </div>
                </div>
                
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>









   </body>
</html>