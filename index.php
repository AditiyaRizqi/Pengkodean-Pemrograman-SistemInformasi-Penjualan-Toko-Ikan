<?php

require_once "template/theHeader.php";

isAuth();

?>

<div class="content has-text-centered">
    <h1 class="title">WELCOME </h1>
    <h2 class="subtitle">SISTEM PENCATATAN PENJUALAN</h2>
    <!-- Inserting the image with specified width and height -->
    <img src="https://cdn.pixabay.com/photo/2017/07/25/11/59/logo-2537871_960_720.png" alt="Description of the image" width="200" height="150">
</div>

<?php

require_once "template/theFooter.php";

?>
<style>
body {
    background: linear-gradient(to right, #ff7e5f, #feb47b, #ffeda1);
    /* Add vendor prefixes for broader browser support */
    -webkit-animation: colorchange 10s infinite;
    animation: colorchange 10s infinite;
}

@-webkit-keyframes colorchange {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
}

@keyframes colorchange {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
}
<style>
body {
    -webkit-animation: colorchange 10s infinite; 
    animation: colorchange 10s infinite;
}
@-webkit-keyframes colorchange {
    10%%  {background:#E0FFFF;}
    25%  {background: #00FA9A;}
    50%  {background: #48D1CC;}
    75%  {background: #FFDEAD;}
    100% {background: #87CEFA;}
}
@keyframes colorchange {
     10%  {background:#E0FFFF;}
    25%  {background: #00FA9A;}
    50%  {background: #48D1CC;}
    75%  {background: #FFDEAD;}
    100% {background: #87CEFA;}
    <style>
