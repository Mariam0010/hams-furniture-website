<?php
include ("connection.php");
?>
<html>
<head>
    <link rel="stylesheet" href="bedrooms.css" >
    <title>HAMS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#text").hide();
            $(".button").click(function(){
                $("#text").toggle();  
            });
        });
    </script>

<script>
    $(document).ready(function(){
        $("#text1").hide();
        $(".button1").click(function(){
            $("#text1").toggle();  
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#text2").hide();
        $(".button2").click(function(){
            $("#text2").toggle();  
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#text3").hide();
        $(".button3").click(function(){
            $("#text3").toggle();  
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#text4").hide();
        $(".button4").click(function(){
            $("#text4").toggle();  
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#text5").hide();
        $(".button5").click(function(){
            $("#text5").toggle();  
        });
    });
</script>
</head>

<body class="body">
    <header>
    <div class="header">
        <img src="logo1.png" height="160" width="300">
    </div>
    </header>

    <div class="topnav">
        <a href="bedrooms.html"> <b>Bedrooms</b> </a>
        <a href="Living room.html"> <b>Livingrooms</b> </a>
        <a href="dressingroom.html"> <b>Dressingrooms</b> </a>
        <a href="dressingroom.html"> <b>Dinningrooms</b> </a>
        <a href="Kidsroom.html"> <b>Kidsrooms</b> </a>
       
        <div class="logout"><a href="LogIn.html"> <b>Log Out</b> </a></div>
        <div class="cart">
            <img src="cart.png">
        </div>
    </div>

        <div class="row">
            <div class="column"> <img class="image" src="bedroom1.jpg" height="300" width="540"> 
            </div>

            <div class="column"> 
                <h3>Lonnix Silver Upholstered Panel Bedroom Set.</h3>
                <p>High end and cozy design, with Soft upholstered headboard and bed base. Florence Master Bedroom reflects modern Italian elegance using Champaign and gray Colors. High above ground beech wood legs for steady quality, also the room has four USB ports for easy charging and an extra storage unit in the dresser mirror unit. The room is sold as full set and not separately.
                    <br><br><div class="button"> <button> Price </button> </div><br>
                    <p><div id ="text">EGP 23,000</div></p>
                <br>  <button class="btn1">
                    <img src="cart.png">
                </button></p></div>
    </div>
    
    <div class="row1">
        <div class="column6"> 
        <h3>Ralene Dark Brown Upholstered Storage Bedroom Set.</h3>
        <p>Part of Ralene Collection,
            Crafted from acacia veneers and hardwood solids,
            Gently distressed and burnished medium brown finish,
            Casual lifestyle appeal,
            Thick padded headboard,
            Integrated storage footboard bench upholstered in a dark brown textured fabric,
            Hefty tapered feet,
            French and english dovetailed drawers construction.<br><br>
            <div class="button1"> <button> Price </button> </div> <br>
            <p><div id ="text1">EGP 40,500</div></p> <br>
            <button class="btn2">
                <img src="cart.png">
            </button>
        </p>
        </div>

            <div class="column1"> <img class="image1" src="bedroom2.jpg" height="300" width="540"> </div>
    </div>

<div class="row2">
    <div class="column7"> 
        <h3>Florence White and Light Grey Lacquer Platform Bedroom Set.</h3>
        <p>Part of Florence Collection,
            White & Light Grey Lacquer Finish,
            Simplistic Details,
            Modern Design,
            Artistic Array of Angles.<br><br>
            <div class="button2"> <button> Price </button> </div><br>
            <p><div id ="text2">EGP 30,400</div></p><br>
            <button class="btn3">
                <img src="cart.png">
            </button>
        </p></div>

         <div class="column2"> <img class="image2" src="bedroom3.jpg" height="300" width="540"> </div>

<div class="row3">
    <div class="column8"> 
        <h3>Find Similar Items Lindenfield Black and Silver Upholstered Panel Bedroom Set.</h3>
        <p>Part of Lindenfield Collection From Ashley,
            Crafted from solid wood, veneer, engineered wood and cast resin components
            Silver Finish,
            Metallic silver-tone finish with inset beveled mirror accents,
            Tufted black velvet headboard and Footboard,
            Geometric cushion design,
            LED back lights and textural inset panels,
            Upholstered Panel Headboard and Footboard,
            Metallic silvertone with inset beveled mirror accents,
            Smooth gliding drawers with sanded and sealed drawer boxes,
            Dovetail Drawer Construction.<br><br>
            <div class="button3"> <button> Price </button> </div><br>
            <p><div id ="text3">EGP 23,700</div></p><br>
            <button class="btn4">
                <img src="cart.png">
            </button>
        </p></div>
                 
    <div class="column3"> <img class="image3" src="bedroom4.jpg" height="300" width="540"> 
    </div>

</div>

<div class="row4">  
    <div class="column4"> <img src="bedroom5.jpg" height="300" width="540"> 
    </div>

    <div class="column9"> 
        <h3>Brashland White Panel Bedroom Set with Bench Footboard.</h3>
        <p>Part of Brashland Collection from Ashley,
            Crafted from acacia veneers and select hardwood solids,
            White finish,
            Planked faux barn door panels with accenting metal hardware,
            Footboard with built-in upholstered bench,
            Soothing neutral upholstery,
            English Dovetail Drawer Construction,
            Ball bearing side drawer glides,
            Industrial bar pull hardware with square backplates,
            AC power supply with USB charging ports,
            3 drawers nightstand,
            5 drawers chest.<br><br>
            <div class="button4"> <button> Price </button> </div> <br>
            <p><div id ="text4">EGP 38,150</div></p><br>
            <button class="btn5">
                <img src="cart.png">
            </button>
        </p></div>
</div>

<div class="row5">   
    <div class="column5"> <img src="bedroom6.jpg" height="300" width="540"> 
    </div>

    <div class="column10"> 
        <h3>Find Similar Items
            Coralayne Silver Bedroom Set.</h3>
        <p>Part of Coralayne Collection,
            Crafted from paint grade materials with hardwood solids,
            Stipple look,
            Ball Bearing Glide,
            Metal Knobs,
            3 Drawer Night stand,
            Bun feet,
            7 Drawer Dresser,
            Center Leg with Adjustable Leveler.<br><br>
            <div class="button5"> <button> Price </button> </div><br>
            <p><div id ="text5">EGP 20,350</div></p><br>
            <button class="btn6" onclick="myfunction()">
                <img src="cart.png">
            </button>
        </p></div>
   
</body>
<script src="livingroom."></script>
</html>