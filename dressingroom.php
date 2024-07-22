<?php
include ("connection.php");
?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="dressingroom.css">
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
            <a href="dinningroom.html"> <b>Dinningrooms</b> </a>
            <a href="Kidsroom.html"> <b>Kidsrooms</b> </a>
       
            <div class="logout"><a href="LogIn.html"> <b>Log Out</b> </a></div>
            <div class="cart">
                <img src="cart.png">
            </div>
        </div>
    
               
        <div class="row">
            <div class="column">  <img class="image" src="dressing1.jpeg" height="380" width="500"></div>
               
                <div class="column1"> 
                   <h3>Archeli Dressing room large Dressing room size 10 square meters</h3> 
                  <p>Dressing room of 10 square meters<br>
                    The wood used: Counter and veneer HPL and sawdust red beech<br>
                    Fabric used: imported fabricbr<br><br>
                      <div class="button"> <button> Price </button> </div><br></p>
                      <p><div id ="text">EGP 72,000 </div></p><br>
                      <button class="btn1">
                        <img src="cart.png">
                     </button>
                </div>
            <div>
          
        <div class="row">
            <div class="column2"> <img class="image1" src="dressing2.jpeg" height="300" width="500"> </div>

            <div class="column6"> 
                <h3>Branag Dressing room modern</h3>
                <p>Dressing room of 6 square meters<br>
                    The wood used: Counter and veneer HPL and sawdust red beech<br>
                    Stainless steel: 304, thickness 1.5 mm<br><br>
                <div class="button1"> <button> Price </button> </div> <br></p>
                <p><div id ="text1">EGP 43,200 </div></p> <br>
                <button class="btn2">
                   <img src="cart.png">
                </button>         
            </div>    
        </div>
    
        <div class="row">
            <div class="column7"> 
                <h3>Abro dressing room modern size 6m² white</h3>
                <p>Dressing room size 6 m²<br>
                    Stainless steel: 304, 1.5 mm thick.<br>
                    Wood: Counter with red beech wood chips and HPL veneer.<br><br>
                    <div class="button2"> <button> Price </button> </div><br></p>
                    <p><div id ="text2">EGP 43,200</div></p><br>
                <button class="btn3">
                    <img src="cart.png">
                </button>
                </div>

            <div class="column3"> <img class="image2" src="dressing3.jpeg" height="300" width="540"> </div>
        </div>
    
        <div class="row">
            <div class="column8"> 
                <h3>Lekea dressing room ideas 8m² brown</h3>
                <p>Dressing room size 8 m²<br>
                    Stainless steel: 304, 1.5 mm thick<br>
                    Wood: Counter with red beech wood chips and HPL veneer.<br><br>
                    <div class="button3"> <button> Price </button> </div><br></p>
                    <p><div id ="text3">EGP 75,600 </div></p><br>
                <button class="btn4">
                    <img src="cart.png">
                </button>
               
            </div>
             <div class="column4"> <img class="image3" src="dressing4.jpeg" height="300" width="500"></div>
        </div>
    
</body>
<script src="test.js"></script>
</html>