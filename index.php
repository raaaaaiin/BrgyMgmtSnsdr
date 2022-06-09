<!DOCTYPE>
<html>
  <head>
    <title><?php
echo phpversion();
?></title>
    <style>
      
    
    </style>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
                  
                 
    </style>
  </head>
  <body style="">
      <nav class="navtop navigationtop navigationtop-default navigationtop-fixed-top" style="">
          <div class="box boxattrib">
              <div class="navigationtop-nav navtopul">

                  <a class="navigationtop-brand navbrnad" href="/" style=""><strong class="navbrandgreen">San</strong>Isidro</a>
              </div>
              <div id="navigationtop navtopunique" class="navigationtop-collapse collapse" style="float:right">
                  <ul class="navigationtop-nav navtopul" style="font-size:16px">
                      <li class="navtopli" style=""><a href="index.php" class="navlabel" style="" target="_Parent">Home</a></li>
                      <li class="navtopli" style=""><a href="index.php#section2" class="navlabel" style="" target="_Parent">About</a></li>
                      <li class="navtopli" style=""><a href="index.php#loc" class="navlabel" style="" target="_Parent">Contact</a></li>
                      <?php

                      session_start();
                      include('db.php');

                      if (isset($_SESSION['id'])) {
                      echo ' <li class="navtopli" style=""><a href="home.php" class="navlabel" style="" target="_Parent">Dashboard</a></li>
             <li class="navtopli" style=""><a href = "accountLogout.php" target="_Parent" class="navlabel" style="">Log Out</a></li>';
 	            }
 	            else{

 		        echo '<li class="navtopli" style=""><a href="login.php" class="navlabel" style="">Log In</a></li>';
 	           }
                      ?>
                      </li>
                  </ul>
                  <ul class="navigationtop-nav navigationtop-right navtopul" style="">
                      <li class="navtopli" style="">
                      </li>
                      <li class="navtopli" style="">
                      </li>

                  </ul>
              </div>
              <!--/.nav-collapse -->
          </div>
      </nav>


      <div id="section1" style="width:100vw; -webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;height:75vh; background:url('img/body1.jpg')no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
">
          <div class="box boxattrib">
              <!-- Main component for a primary marketing message or call to action -->
              <div class="sec1div" style="">
                  <h1 class="sec1h1">


                      Barangay <span class="sec1h1span">San Isidro</span>
                  </h1>
                  <p class="sec1h1desc">
                      All of the most recent news events and basic information<br class="sec1h1deschighlight">
                      on Brgy. San Isidro Antipolo, Rizal can be found here.
                  </p>
                  <p style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0 0 10px;margin-bottom:15px;font-size:21px;font-weight:200;">
                  </p>
              </div>
          </div>
          <!-- /box -->
      </div>
      <div id="section2" style="">
          <div class="line section2line" style="">
              <div class="section2linetext" style="">
                  <h4 class="section2linetexth4" style="">Current Events</h4>
              </div>
          </div>
          <div class="box boxattrib">
              <div class="line boxboxatribdiv" style="">



                 



                  <?php
                  
                   $res = mysqli_query($db, "SELECT * FROM announce WHERE category = 'CurrentEvent' ORDER BY date DESC LIMIT 3");
                           while ($r = mysqli_fetch_assoc($res))
                           {
                           
                           ?>
                            <div class="medr section2box boxboxatribsecion boxboxatribsecion">
                            <img src='Communication/<?php echo $r["image"]?>' class="uppercenterimg">
                            <h3 class="sec2h3">
                          <?php echo $r["title"]?>
                                </h3>
                                <p class="uppercenterdesc"><?php echo substr($r["announcement"],0,350);?><a href="#" style="" class="sideviewnow">Read More..</a></p>
                                <a href='details.php?id=<?php echo $r["announceId"]?>'  style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;color:#337ab7;text-decoration:none;color:#29d846;"><button class="sec2h3but">Take me to the link</button></a>
                            </div>
                           
                           
                           <?php
                           
                           }

                  ?>













              </div>
          </div>
          <div class="line navtop-attrib">
              <div class="box boxattrib">
                  <hr class="horiline">
                  <div class="smallo section2box boxboxatribsecion">
                      <div class="line navtop-attrib">
                          <h1 class="horiline">Visit Barangay San Isidro</h1>
                          <p class="sidedesc">San Isidro, formerly Poblacion, is a barangay in the city of Antipolo, in the province of Rizal. Its population as determined by the 2020 Census was 65,530. This represented 7.38% of the total population of Antipolo.</p>


                          <div class="line" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin-right:-15px;margin-left:-15px;background:#eee;padding-bottom:10px;">








                             





                              <?php
                  
                   $res = mysqli_query($db, "SELECT * FROM announce WHERE category = 'VisitBrgy' ORDER BY date DESC LIMIT 3");
                           while ($r = mysqli_fetch_assoc($res))
                           {
                           
                           ?>
                           <div class="medr centerdiv">
                                  <h3 class="centertitle"><?php$r['title']?></h3>
                                  <img src='Communication/<?php echo $r["image"]?>' class="centerimg">
                                  <a href='details.php?id=<?php echo $r["announceId"]?>'  style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;color:#337ab7;text-decoration:none;color:#29d846;"><button class="sec2h3but2">View more</button></a>
                              </div>




                            
                           
                           
                           <?php
                           
                           }

                  ?>














                             
                          </div>
                          <hr class="horiline">
                          <h1 class="horiline" >Location</h1>
                          <div id="loc" class="line" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin-right:-15px;margin-left:-15px;background:#eee;padding-bottom:10px;margin-top:15px;">
                              <div class="medqw section2box boxboxatribsecion">
                                  <iframe style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2295.567200501462!2d121.18207106568074!3d14.617952968527614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bf26009d1665%3A0xffd4c0eded3a7bf!2sBrgy. San Isidro Hall!5e0!3m2!1sen!2sph!4v1652738637838!5m2!1sen!2sph" width="100%" height="600" frameborder="0" allowfullscreen=""></iframe>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="mede section2box" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:relative;min-height:1px;padding-right:15px;padding-left:15px;padding-left:40px;">



                      <div style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding-left:10px;">
                          
                      
                      
                     
                         



                            <?php
                  
                   $res = mysqli_query($db, "SELECT * FROM announce WHERE category = 'SideNews' ORDER BY date DESC LIMIT 3");
                           while ($r = mysqli_fetch_assoc($res))
                           {
                           
                           ?>
                           <h2 class="sidetitle"><?php echo $r["title"]?></h2>
                          <p class="sidedesc"><?php echo substr($r["announcement"],0,150);?></P>
                          <a href='details.php?id=<?php echo $r["announceId"]?>' style="" class="sideviewnow"> View Now</a> </p>
                          <img src='Communication/<?php echo $r["image"]?>' style="" class="sideimg">




                            
                           
                           
                           <?php
                           
                           }

                  ?>














                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div id="footer" class="line navtop-attrib">
          <div class="line" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin-right:-15px;margin-left:-15px;background:#29d846;">
              <div class="box" style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;margin-top:50px;">
                  <div class="mede section2box boxboxatribsecion">
                  </div>
              </div>
              <div class="line navtop-attrib">
                  <p style="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0 0 10px;text-align:center;color:#fff;margin-top:20px;">© Brgy San Isidro | Contact us at Sanisidro@Antipolo.gov</p>
              </div>
          </div>
      </div>
  </body>
</html>