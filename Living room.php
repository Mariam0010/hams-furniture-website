<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="livingroom.css" >
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
        <div class="column"> <img class="image" src="living1.jpg" height="450" width="600"></div>
           
            <div class="column1"> 
                <h3>Sofa + Loveseat + Chair.</h3>
                <p>Sofa: W: 230cm * D: 105cm * H: 95cm<br>
                    Loveseat: W: 180cm * D: 105cm * H: 95cm<br>
                    Chair: W: 70cm * D: 75cm * H: 100cm</b><br>
                    <br><div class="button"> <button> Price </button> </div><br></p>
                    <p><div id ="text">EGP 44,650 </div></p><br>
                <button class="btn1">
                <img src="cart.png">
                </button></p>
            </div>
        <div >
    </div>

    <div class="row">
        <div class="column6"> 
            <h3>Brown right L shaped sofa.</h3>
            <p>W: 310cm * D: 180cm<br><br>
             <div class="button1"> <button> Price </button> </div> <br></p>
             <p><div id ="text1"> EGP 19,250 </div></p> <br>
            <button class="btn2">
                <img src="cart.png">
            </button>
            </p>
        </div>

        <div class="column2"> <img class="image1" src="living2.jpg" height="300" width="540"> </div>
    </div>

    <div class="row">
        <div class="column7"> 
            <h3>Large Light Purple Sofa Set</h3>
            <p>Sofa: W: 240cm * D: 100cm * H: 85cm<br>
                Loveseat: W: 170cm * D: 100cm * H: 85cm<br>
                Chair: W: 125cm * D: 100cm * H: 85cm<br><br>
                <div class="button2"> <button> Price </button> </div><br>
                <p><div id ="text2">EGP 36,940 </div></p><br>
            <button class="btn3">
                <img src="cart.png">
            </button>
            </p></div>
        <div class="column3"> <img class="image2" src="living3.jpg" height="300" width="540"> </div>
    </div>

    <div class="row">
        <div class="column8"> 
            <h3>Greyish Blue Sofa Set</h3>
            <p>3 seaters + Loveseat + Chair<br>
                Sofa: W: 215cm * D: 95cm * H: 80cm<br>
                Loveseat: W: 150cm * D: 95cm * H: 80cm<br>
                Chair: W: 90cm * D: 95cm * H: 80cm<br><br>
                <div class="button3"> <button> Price </button> </div><br></p>
                <p><div id ="text3">EGP 28,750</div></p><br>
            <button class="btn4">
                <img src="cart.png">
            </button>
            </p></div>
         <div class="column4"> <img class="image3" src="living4.jpg" height="300" width="540"></div>
    </div>
    
</body>
<script src="livingroom."></script>
</html>