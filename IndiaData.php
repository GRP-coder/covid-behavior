   <!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Covid-19 data India</title>
   <link rel="shortcut icon" href="images/favicon.ico" >
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!--header section start -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">

         <a href="index.html"><img style="border-radius: 20%; margin-right: 30px;" width="80px" height="50px"
               src="images/logo.png"></a>



         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent" style="align-self: center;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="index.html">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="protect.html">protect</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about.html">about</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="IndiaData.php">Covid-19 data India</a>
               </li>

               




            </ul>

         </div>
      </div>
      </div>
   </nav>
   
   </div>
   <!-- header section end -->
   <!-- data section starts -->
   <section>
      <div class="my-3">
         <h3 class="text-center text-uppercase">Corona Data India</h3>
      </div>
      <div class="table-responsive">
         <table class="table table-bordered table-striped text-center">
            <tr>
               <th>Last Update Time</th>
               <th>States</th>
               <th>Total Confirmed</th>
               <th>Total Active</th>
               <th>Total Recoverd</th>
               <th>Total Deaths</th>

            </tr>
            
            <?php

               $data = file_get_contents('https://api.rootnet.in/covid19-in/stats/latest');
               $coranalive = json_decode($data, true);

               $statescount = count($coranalive['data']);

               $lastrefresh = $coranalive['lastRefreshed'];
               


               $i=0;
               
               while($i < 36){

                  $active = $coranalive['data']['regional'][$i]['totalConfirmed'] - ($coranalive['data']['regional'][$i]['discharged'] + $coranalive['data']['regional'][$i]['deaths']);
                  ?>
                  <tr>
                     <td ><?php echo $lastrefresh ?> </td>
                     <td ><?php echo $coranalive['data']['regional'][$i]['loc'] ?> </td>
                     <td ><?php echo $coranalive['data']['regional'][$i]['totalConfirmed'] ?> </td>
                     <td ><?php echo $active ?> </td>
                     <td ><?php echo $coranalive['data']['regional'][$i]['discharged']?> </td>
                     <td ><?php echo $coranalive['data']['regional'][$i]['deaths'] ?> </td>
      
                  </tr>
                          
               
               <?php
               $i++;
               }


               ?>   
                          
               
               

         </table>
      </div>

   </section>






   <!-- data section ends -->
      <!-- footer section start -->
   <div class="footer_section"  >
      <div class="container" style="padding-left: 28px;" >
         <div class="footer_section_2">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Resources</h2>
                  <div class="footer_menu" style="padding-left: 30px;" >
                     <ul>
                        <li><a href="about.html">What we do</a></li>
                        <li><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public/videos">Media</a></li>
                        <li><a href="https://wwwnc.cdc.gov/travel/notices/covid-2/coronavirus-india">Travel Advice</a></li>
                        <li><a href="protect.html">Protection</a></li>
                        <li><a href="https://www.mohfw.gov.in/">Care</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text" >About</h2>
                  <p class="footer_text"" style="padding-left: 25px;">This is a site containing information about COVID-19 APPROPRIATE behavior.
                     Which should be obeyd for the betterment of society as well as for personal helath care.</p>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <h2 class="useful_text">Contact Us</h2>
                  <div class = "location_text" style="padding-left: 30px;" > 
                     <ul>

                        <li>
                           <i class="fa fa-phone" aria-hidden="true"></i>
                              Call +91 6370019663
                        </li>
                        <li>
                           <a href="mailto: gyanaranjan.panda37@gmail.com">
                              <i class="fa fa-envelope"aria-hidden="true">
                                 <span style="font-family: Arial, Helvetica, sans-serif; padding-left:2px ;">gyanaranjan.panda37@gmail.com</span>
                              </i>
                              
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <p class="copyright_text">© 2021 All Rights Reserved.<a href="https://github.com/GRP-coder/GRP-coder"
                     target="_blank"> Gyanaranjan Panda</a></p>
            </div>
         </div>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function () {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function () {

            $(this).addClass('transition');
         }, function () {

            $(this).removeClass('transition');
         });
      });
   </script>
   <script>
      function openNav() {
         document.getElementById("myNav").style.width = "100%";
      }
      function closeNav() {
         document.getElementById("myNav").style.width = "0%";
      }
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>