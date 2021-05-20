 <!-- <script src="validation.js"> </script> -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>

	<footer>
	<div class="footer">
    <div class="inner_footer">
        <div class="footer_items">
            <h2>Sherbime dhe Produkte</h2>
            <div class="border"></div>
            <ul>
                <a href="Telefonia.html"><li>Telefonia</li></a>
                <a href="Interneti.html"><li>Interneti</li></a>
                
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 


        $(document).ready(function ($) {
            var count = 0;
            $("#butoni").click(function (event) {
                if (count == 0) {
                    $(".divi").hide(1000, function () {

                        count = 1;
                        alert("Menu është fshehur");
                    $("#butoni").text("Shfaq Menunë")
                    });
                }
                else {
                    $(".divi").show(1000, function () {
                    $("#butoni").text("Fshih Menunë")
                    });
                }
            });
        });


function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}


</script>
</body>
    </footer>
</html>
