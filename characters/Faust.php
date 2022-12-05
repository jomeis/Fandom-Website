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
          <h2 class="charName">Faust</h2>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <img src="/images/Characters/OffFaust.png" width="330px">
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          
          <p class="indent CharPaddingText">With a unique blend of dominant mid-range zoning, a terrifying command grab, and his signature RNG-powered items, Faust is a hybrid zoner who thrives creating chaos on the battlefield.</p>
       
        
      

        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      
         <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/4mFWu-YtEvo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <p class="indent">Faust's far-reaching pokes make him highly competent at contesting screen space in neutral, while his excellent light normals allow him to hedge against approach at ranges where his larger zoning tools become unwieldy. When he does land a hit, Faust gets a safe opportunity to build advantage with Item Toss




. If he's lucky, items will cover him to toss yet more items, leading to a chaotic game state where he wins... statistically.

Faust can enforce an extremely oppressive strike/throw game with Snip Snip Snip




, allowing him to run reversal-safe sequences that -- done correctly -- end in a high reward 4-way mixup that is incredibly hard to defend against. Even when the opponent does defend correctly, the ensuing Guard Crush from these sequences can lead into yet another mixup, making the situation after a successful Snip exceptionally advantageous for Faust.

Both Faust's zoning and grappling games are bolstered heavily by his highly favorable item pool, whose uses range from being as simple as screen hazards and HP restoration to tick throws, unreactable left/right 50/50s from fullscreen, and F-Shiki
 setups, among much more. Many Items grant Faust scary mixup opportunities during Okizeme
 as well.

Faust is no slouch on defense, either: his reversal




 is slow to use on its own, but with the right timing it can be Roman Cancelled to gain up to 16f of invulnerability, making it one of the stronger reversals in the game. And although his standing and air hurtboxes are larger than most of the cast, his unique movement option in back- and forward Crawl allows him to low profile attacks that most other characters are forced to block, leaving him in a position to whiff punish or present other counterplay.

With meter available, Faust becomes a menace. Item Super




 becomes a straightforward way to win neutral, and Scarecrow




 PRC Snip allows for near-unreactable fullscreen command grabs that come from either direction. His average damage output becomes a major threat with Roman Cancels, and Item-based mixups are only limited to the player's imagination.</p>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->

      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          <?php 
            echo $ChatacterFooter
          ?>
         
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->



    </div> <!--END: col  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>