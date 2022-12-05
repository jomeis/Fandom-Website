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
        <div class="col p-2 bg-image d-flex justify-content-center" 
style="background-image: url('https://media.istockphoto.com/id/1201137415/photo/bright-dark-red-industrial-background-for-design-and-text-uneven-sheet-of-metal-with-red.jpg?s=170667a&w=0&k=20&c=ppI7ReU-jTEWgauI48JPxVSTZOtJaV7ju68SdCmb6nk='); id="content"> <!-- START: col-->
          <h2 class="charName">Chipp Zanuff</h2>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <img src="/images/Characters/OffGio.png" width="330px">
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          
          <p class="indent CharPaddingText">Move fast, strike fast, think fast! Giovanna is an aggressive rushdown character with outstanding speed and pressure, while also having a fair share of defensive capabilities at her disposal. Her unique step dash preserves lots of forward momentum if she acts during it. This allows her to advance and attack simultaneously, useful for closing the gap during an opening.</p>
       
        
      

        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      
         <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/McNNoBkewYE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <p class="indent">Giovanna’s attack speed is top-class. Her 5P is tied for the third fastest button in the game, and 5K is quite fast for its range. Her c.S is a powerful, plus on block pressure tool, and the multi-hitting nature of f.S and 2S make them easy to hit-confirm from. Pressure can be ended with the risk-free Sepultura, or reset with the plus on block but challengeable Trovão. Sol Poente is a risky overhead that can Cross-up at close range, while Trovão can pierce through projectiles after a moderate startup. And although both can be beaten by a low profile like 6P, Sepultura's vertical and horizontal reach works great as a countermeasure against any attempts to outmaneuver or low profile your pressure.

Giovanna’s combination of speed, range, and evasion makes her defensive game quite solid despite her lack of a meterless reversal. Sol Nascente is a great anti-air that lacks the invulnerability of a traditional DP
 but compensates with evasive properties and high reward. Her 2D is a long, disjointed poke with great reward on counter hit. It’s good for space control, frame traps, and can be used as a meaty attack to outrange DPs or Reversal Overdrives.

Giovanna’s unique Meter Boost magnifies her damage output and defense value when she has enough Tension, allowing her to benefit from Tension without spending it. Her pressure and neutral are simple yet versatile, and her combo routes have a wide variety of accessibility and adaptability. This makes Giovanna an excellent choice for both beginners and experts alike.</p>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->

      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          footer
         
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->



    </div> <!--END: col  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>