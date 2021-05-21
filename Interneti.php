<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrrokMotion/interneti</title>
    <link rel="stylesheet" href="Interneti.css"/> 
    <link rel="stylesheet" href="Header_Footer.css"/> 
    <script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>

    <style>
        canvas{
      position:absolute;
      left:0;
      top:0;
      z-index:-1;
      border:1px solid black;
      
    }
    #div1{
      z-index:0;
      padding: 0;
      margin: 0;
    }
    </style>
</head>
<body>
    <header>
        <div class="divi" style="position: absolute ; padding:0;">
            <div class="container">
                <img src="Logo.png"  class="logo" />
                <nav>
                    <ul>
                        <li><a  href="Home.php"><b>Home </b></a></li>
                        <li><a href="Telefonia.php"><b> Telefonia</b></a></li>
                        <li><a href="Interneti.php"><b> Interneti</b></a></li>
                        <li><a href="Help&Support.php"><b>  Help&Support</b></a></li>
                        <li><a href="Profili_im.php"><b>  Profili Im</b></a></li>
                        <li> <form action="">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form></li>
                    </ul>
                </nav>
            </div>
           </div>
    </header>   
    

<div id="div1">
    
    <canvas></canvas>
    <script src="canvas.js"> </script>
    <div class="container">
        <div class="menu" style="margin-top: 0;">
            <table cellspacing="20px" cellpadding="20px">
                <thead>
                    <td id="tdinterneti"> Interneti</td>
                </thead>
                <tr>
                <td>
                   <a id="alinqet" href="Interneti.php"> Paketa Internet me SuperFibra</a>
                </td>
                </tr>
                <tr>
                <td>
                    <a id="alinqet" href="Paketa2.php">Paketa me parapagim </a>
                </td>
                </tr>
                <tr>
                    <td><a id="alinqet" href="Paketa3.php"> Plane dhe Tarifa </a>
                    </td>
                </tr>
            </table>
            
        </div>
        
        <div class="permbajtja">
            
            <h1>Paketa me Superfibra</h1>
            <h2>
                Superfibra vjen me suport internet </br>
            </h2>
            <table cellpadding="20px" cellspacing="0px">
                <thead>
                    <td id="tdhead"> Shpejtesia e internetit </td>
                    <td id="tdhead"> Interneti </td>
                </thead>
                <tr>
                    <td>8MPS</td>
                    <td>5 euro</td>
                </tr>
                <tr>
                    <td rowspan="2"> Sasia e internetit</td>
                    <td> 50 GB </td>
                </tr>
                <tr>
                    <td>
                    +150GB/2 muajt e pare
                    </td>

                </tr>
            </table>
            
        </div>
        
    </div>
    <div class="permbajtja2">
        
        <h2>
            Per internet shtese, zgjidh njeren nga pakot:
        </h2>
        <table class="tabela">
            <tr>
                <td>

                </td>
                <td>
                    Sasia
                </td>
                <td>
                    &#199mimi
                </td>
            </tr>
            <tr>
                <td>
                    Paketa Giga Extra 1
                </td>
                <td>
                    50GB
                </td>
                <td>
                    20 Euro
                </td>
            </tr>
            <tr>
                <td>
                    Pageta Giga Extra 2
                </td>
                <td>
                    200GB
                </td>
                <td>
                    30Euro
                </td>
            </tr>
        </table>
        <figure style="margin-left: 0;">
            <div style="float:left">
                <img src="Rrjeti.jfif" width="360   px" height="120px">
            </div>
            <P>
                Rrjeti me i shpejte ne Kosove
            </P>

                <figcaption style="color:black;font-size: 20px;">Rrjeti</figcaption>
            </figure>
    </div>
    <div class="pershkrimi">
        <h2>
            Detaje Mbi Paketat
        </h2>
        <ol>
            <li>
                Paketat Giga Ekstra mund të shtohen mbi kontratat aktive të paketave
            </li>
            <li>
                Paketat Giga Ekstra do të këne të njëjtën shpejtësi si paketat bazë.
            </li>
            <li>
                Ju mund të aktivizoni paralelisht këto paketa ekstra, por e njëjta paketë nuk mund të aktivizohet dy herë në të njëjtën periudhë.
            </li>
            <li>
                Pajtimi mujor i paketave Giga Ekstra aplikohet i plotë në aktivizim ose &#231aktivizim.
            </li>
            <li>
                Pas konsumimit të vellimit të planit tarifor bazë, mund të përzgjidhni opsionin e tarifimit 10 cent/GB, ku vlera maksimale mujore do të jetë deri në 12 euro.
            </li>
        </ol>
        
    </div>
    <div class="footer">
        <div class="inner_footer">
            <div class="footer_items">
                <h2>Sherbime dhe Produkte</h2>
                <div class="border"></div>
                <ul>
                    <a href="Telefonia.php"><li>Telefonia</li></a>
                    <a href="Interneti.php"><li>Interneti</li></a>
                    
                </ul>
            </div>
            <div class="footer_items">
                <h2>Njoftime</h2>
                <div class="border"></div>
                <ul>
                    
                    <li>Njoftime</li>
                    <li>Publikime</li>
                    <dt> Mbulueshmeria
                            <dd>Kosova</li>
                            <dd>Rajoni</li>
                    </dt>
                </ul>
                
            </div>
            <div class="footer_items">
                <h2>FrrokContact</h2>
                <div class="border"></div>
                <ul>
                    <li>Adress: <a href="https://www.google.com/maps/place/Mujo+Ulqinaku,+Prishtin%C3
                        %AB/@42.6573916,21.1535709,17z/data=
                        !3m1!4b1!4m5!3m4!1s0x13549ee562ac94e5:0xc
                        c73734b25c546b7!8m2!3d42.6573916!4d21.1557596",base target="_blank">Rr. Mujo Ulqinaku,Pejton,</br>
                         Prishtine,Kosove</li></a>
                    <li>Phone: 049100062</li>
                    <a href="mailto:FrrokMotion@gmail.com"><li>FrrokMotion@hgmail.com</li></a>
                </ul>
            </div>
            <div class="footer_items">
                <h2>Social</h2>
                <div class="border"></div>
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><abbr title="Facebook">Fb</abbr><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"target="_blank"><abbr title="Twitter">Tw</abbr><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.google.com/"target="_blank">Google <i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.instagram.com/"target="_blank">Instagram <i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <button onclick="displayDate()" style="border: 0;background-color: transparent;">Show Date : </button>
            <p id="showDate" style="font-style: italic;"></p>
        </div>
        
    </div>
</div>

<script>

function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}

</script>


</body>
</html>