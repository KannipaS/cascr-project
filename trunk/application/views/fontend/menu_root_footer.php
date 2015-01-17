</div>
</div>
<div class="clearfix"></div>
</div>
</section>
</div>
</div>
<footer>
    <div class="container">
        <ul class="footer-menu">
            <li><a href="#">HOME &nbsp; | </a></li>
            <li><a href="#">ABOUT US &nbsp; | </a></li>
            <li><a href="#">PRODUCTS &nbsp; | </a></li>
            <li><a href="#">NEWS &nbsp; | </a></li>
            <li><a href="#">CONTACT US</a></li>
        </ul>
        <div class="footer-contact">
            <b>CAS-CR Co.,Ltd.</b><br>
            MMC Factory 75/110 Moo 11,Phahonyothin Rd.,<br>
            Klong Nueng Klong Luang, Pathumthani 12120 Thailand <br><br>
            Copyrights 2014. CAS-CR Co.,Ltd. All Rights Reserved.<br>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    $('.carousel').carousel();

    $(document).ready(function() {
        var url = window.location;
        var org = window.location.origin;
        if(url == org+"/index.php/welcome/index"){
            $("#link").addClass("active");
            $("#link1").removeClass("active");
            $("#link2").removeClass("active");
            $("#link3").removeClass("active");
            $("#link4").removeClass("active");
        }else if(url == org+"/index.php/welcome/about_us"){
            $("#link1").addClass("active");
            $("#link").removeClass("active");
            $("#link2").removeClass("active");
            $("#link3").removeClass("active");
            $("#link4").removeClass("active");
        }else if(url == org+"/index.php/welcome/product"){
            $("#link2").addClass("active");
            $("#link1").removeClass("active");
            $("#link").removeClass("active");
            $("#link3").removeClass("active");
            $("#link4").removeClass("active");
        }else if(url == org+"/index.php/welcome/news"){
            $("#link3").addClass("active");
            $("#link").removeClass("active");
            $("#link1").removeClass("active");
            $("#link2").removeClass("active");
            $("#link4").removeClass("active");
        }else if(url == org+"/"){
            $("#link").addClass("active");
            $("#link1").removeClass("active");
            $("#link2").removeClass("active");
            $("#link3").removeClass("active");
            $("#link4").removeClass("active");
        }else{
            $("#link2").addClass("active");
            $("#link1").removeClass("active");
            $("#link").removeClass("active");
            $("#link3").removeClass("active");
            $("#link4").removeClass("active");
        }
    });
</script>
</body>
</html>
