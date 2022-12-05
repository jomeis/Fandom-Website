<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="/style.css" rel="stylesheet" >
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col nav fixed-top">
          <?php
          echo $mainNav;
          ?>
        </div>
      </div>
    </div>
    
    
    <div class="container"> <!--START: container  -->



      <div class="row mt-4"> <!--START: top row  -->
        <div class="col p-2" align="center" id="top"> <!-- START: col-->
            <a href="https://www.guiltygear.com/ggst/en/" target="_blank"><img src="/images/guiltyGearTitle2.png"></a>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->

      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content">
          <h2>Pro Players</h2>
          
        </div> 
      </div> <!-- END: top row  -->
      
      <div class="row"> <!--START: row 1  -->
        <div class="col-4 d-flex flex-row-reverse" id="content"> 
          <img src="/images/ProPlayers/Razzo.jpg" height="300px" width="300px">
        </div> 
        <div class="col-3 ProTable" id="content"> 

          <ul class="ListNone">
            <li>Name- Razzo</li>
            <li>Region- US</li>
            <li>Team- Intel Gaming</li>
            <li>Main Character- Leo Whitefang</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/RazzoSharp" class="LinkBlue" target="_blank">Twitter</a></li>
              <li><a href="https://www.twitch.tv/razzosharp" class="LinkBlue" target="_blank">Twitch</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/Razzo" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 




          
        </div> 
         <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
          <img src="/images/ProPlayers/hotashi.jpg" width="200px">
        </div> 
        <div class="col-3 p-2 d-flex justify-content-center" id="content"> 
         <ul class="ListNone ProTable">
            <li>Name- Hotashi</li>
            <li>Region- US</li>
            <li>Team- Moist Esports</li>
            <li>Main Character- Nagoriyuki</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/hotashis?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="LinkBlue" target="_blank">Twitter</a></li>
              <li><a href="https://twitch.tv/hotashi" class="LinkBlue" target="_blank">Twitch</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/hotashi" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 
          
     
       
        
        </div> 
      </div> <!-- END: row 1 -->

       <div class="row"> <!--START: row 2  -->
        <div class="col-4 d-flex flex-row-reverse" id="content"> 
          <img src="/images/ProPlayers/SQ.jpg" height="300px" width="300px">
        </div> 
        <div class="col-3 ProTable" id="content"> 

          <ul class="ListNone">
            <li>Name- SQ / SQuirrel</li>
            <li>Region- US</li>
            <li>Team- None</li>
            <li>Main Character- Ram</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/SQuirrel147?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="LinkBlue" target="_blank">Twitter</a></li>
              <li><a href="https://www.twitch.tv/SQuirrel147" class="LinkBlue" target="_blank">Twitch</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/SQ" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 




          
        </div> 
         <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
          <img src="/images/ProPlayers/Umisho.jpeg" class="UmishoImgCol">
        </div> 
        <div class="col-3 p-2 d-flex justify-content-center" id="content"> 
         <ul class="ListNone ProTable">
            <li>Name- Umisho</li>
            <li>Region- US</li>
            <li>Team- Team Razer</li>
            <li>Main Character- Happy Chaos</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/UMlSHO?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="LinkBlue" target="_blank">Twitter</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/UMISHO" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 
          
     
       
        
        </div> 
      </div> <!-- END: row 2 -->

      <div class="row"> <!--START: row 3  -->
        <div class="col-4 d-flex flex-row-reverse pt-4" id="content"> 
          <img src="/images/ProPlayers/NBNHMR.jpeg" height="300px" width="300px">
        </div> 
        <div class="col-3 ProTable" id="content"> 

          <ul class="ListNone">
            <li>Name- NBNHMR</li>
            <li>Region- US</li>
            <li>Team- ONi Global</li>
            <li>Main Character- Nagoriyuki</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/NBNHMR?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="LinkBlue" target="_blank">Twitter</a></li>
              <li><a href="https://www.twitch.tv/nbnhmr" class="LinkBlue" target="_blank">Twitch</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/NBNHMR" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 




          
        </div> 
         <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
          <img src="/images/ProPlayers/RedDitto.jpeg" class="UmishoImgCol">
        </div> 
        <div class="col-3 p-2 d-flex justify-content-center" id="content"> 
         <ul class="ListNone ProTable">
            <li>Name- Red Ditto</li>
            <li>Region- US</li>
            <li>Team- None</li>
            <li>Main Character- Ram</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/reddittoxd" class="LinkBlue" target="_blank">Twitter</a></li>
              <li><a href="https://www.twitch.tv/redditto" class="LinkBlue" target="_blank">Twitch</a></li>
            </ul>
            <li>Liquipedia - None</li>
          </ul> 
          
     
       
        
        </div> 
      </div> <!-- END: row 3 -->

      <div class="row"> <!--START: row 4  -->
        <div class="col-4 d-flex justify-content-center pt-4" id="content"> 
          <img src="/images/ProPlayers/jonathan tene.webp" width="220px">
        </div> 
        <div class="col-3 ProTable" id="content"> 

          <ul class="ListNone">
            <li>Name- Jonathan Tene</li>
            <li>Region- US</li>
            <li>Team- Beastcoast VIZIO</li>
            <li>Main Character- Zato-1</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/jonathan_tene?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="LinkBlue" target="_blank">Twitter</a></li>
              <li><a href="https://www.twitch.tv/jonathantene" class="LinkBlue" target="_blank">Twitch</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/Jonathan_Tene" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 




          
        </div> 
         <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
          <img src="/images/ProPlayers/Bean.jpg" class="UmishoImgCol">
        </div> 
        <div class="col-3 p-2 d-flex justify-content-center" id="content"> 
         <ul class="ListNone ProTable">
            <li>Name- Bean</li>
            <li>Region- US</li>
            <li>Team- None</li>
            <li>Main Character- Chipp</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://mobile.twitter.com/ec_bean" class="LinkBlue" target="_blank">Twitter</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/Bean" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 
          
     
       
        
        </div> 
      </div> <!-- END: row 4 -->

      <div class="row"> <!--START: row 5  -->
        <div class="col-4 d-flex flex-row-reverse pt-4" id="content"> 
          <img src="/images/ProPlayers/PepperySplash.jpg" height="240px">
        </div> 
        <div class="col-3 ProTable" id="content"> 

          <ul class="ListNone">
            <li>Name- Pepperysplash</li>
            <li>Region- US</li>
            <li>Team- None</li>
            <li>Main Character- Zato-1</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/pepperysplash?lang=en" class="LinkBlue" target="_blank">Twitter</a></li>
              <li><a href="https://www.twitch.tv/pepperysplash" class="LinkBlue" target="_blank">Twitch</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/PepperySplash" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 




          
        </div> 
         <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
          <img src="/images/ProPlayers/LostSoul.jpg" class="UmishoImgCol">
        </div> 
        <div class="col-3 p-2 d-flex justify-content-center" id="content"> 
         <ul class="ListNone ProTable">
            <li>Name- LostSoul</li>
            <li>Region- US</li>
            <li>Team- None</li>
            <li>Main Character- Happy Chaos</li>
            <li>Scocials</li>
            <ul>
              <li><a href="https://twitter.com/Lost_Relic" class="LinkBlue" target="_blank">Twitter</a></li>
            </ul>
            <ul>
              <li><a href="https://www.twitch.tv/lostsoul526" class="LinkBlue" target="_blank">Twitch</a></li>
            </ul>
            <li><a href="https://liquipedia.net/fighters/LostSoul" target="_blank" class="LinkBlue">Liquipedia</a></li>
          </ul> 
          
     
       
        
        </div> 
      </div> <!-- END: row 5 -->

       <div class="row"> <!--START: row 5  -->
        <div class="col pt-4 d-flex justify-content-center" id="content"> 
          <h2>Epic Moments</h2>
        </div> 
      </div> <!-- END: row 5 -->
      <div class="row"> <!--START: row 5  -->
        <div class="col pt-4 d-flex justify-content-center" id="content"> 
          <h4>Razzo Vs Umisho</h4>
        </div> 
         <div class="col pt-4 d-flex justify-content-center" id="content"> 
          <h4>Bean Vs Hotashi</h4>
        </div> 
      </div> <!-- END: row 5 -->
       <div class="row"> <!--START: row 5  -->
        <div class="col pt-4 d-flex justify-content-center" id="content"> 
          <iframe width="560" height="315" src="https://www.youtube.com/embed/j4QAx_Lcv1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 
         <div class="col pt-4 d-flex justify-content-center" id="content"> 
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Zwq_OIXOmNU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 
      </div> <!-- END: row 5 -->
   
      
       
      
    
      

      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          footer
         
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->



    </div> <!--END: col  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>