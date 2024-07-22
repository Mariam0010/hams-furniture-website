
<?php
include ("connection.php");
?>



<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dinningroom.css">
    <title>HAMS</title>
   
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
            <div class="column"> <img class="image" src="dinning1.png" height="300" width="500"></div>
               
                <div class="column1"> 
                   <h3>Dining table + 6 Chairs + Display unit + Buffet</h3> 

                  <p>Table: L:180cm * W: 90cm * H: 81cm<br>
                    Display unit: W: 80cm * D: 40cm * H: 193cm<br>
                    Buffet: W: 163cm * D: 40cm * H: 87cm<br><br>
                        <div class="button"> <button> Price </button> </div><br></p>
                        <p><div id ="text">EGP 29,900  </div></p><br>
                        <button class="btn1">
                          <img src="cart.png">
                        </button>
                </div>
            <div >
        </div>
    
        <div class="row">
            <div class="column2"> <img class="image1" src="dinning2.png" height="300" width="500"> </div>
            <div class="column6"> 
                <h3>Dining table + 6 Chairs + Display unit + Buffet</h3>
                <p>Table: L 180:cm * W: 90cm * H: 76cm<br>
                    Display unit: W: 107cm * D: 50cm * H: 162cm<br>
                    Buffet: W: 215cm * D: 50cm * H: 131cm<br><br>
                 <div class="button1"> <button> Price </button> </div> <br></p>
                 <p><div id ="text1"> EGP 43,900 </div></p> <br>
                <button class="btn2">
                   <img src="cart.png">
                </button>
                </p>
            </div>
        </div>
    
        <div class="row">
            <div class="column7"> 
                <h3>Dining table + 6 chairs + Display unit + Buffet</h3>
                <p>Table: L:180cm * W: 90cm * H: 80cm<br>
                    Display unit: W: 110cm * D: 45cm * H: 180cm<br>
                    Buffet: W: 185cm * D: 46cm * H: 130cm<br><br>
                    <div class="button2"> <button> Price </button> </div><br></p>
                    <p><div id ="text2">EGP 39,000</div></p><br>
                <button class="btn3">
                    <img src="cart.png">
                </button>
                </div>
            <div class="column3"> <img class="image2" src="dinning3.png" height="300" width="540"> </div>
        </div>
    
        <div class="row">
            <div class="column8"> 
                <h3>Dining table + 4 chairs + bench + server</h3>
                <p>Table: L:152cm * W: 92cm * H: 76cm<br>
                    Server: W: 120cm * D: 50cm * H: 90cm.<br><br>
                    <div class="button3"> <button> Price </button> </div><br></p>
                    <p><div id ="text3">EGP 23,450 </div></p><br>
                <button class="btn4">
                    <img src="cart.png">
                </button>
                </p></div>
            <div class="column4">     
                <img class="image3" src="dinning4.png" height="300" width="540">
            </div>
    
</body>
<script src="Untitled-3.js"></script>
</html>