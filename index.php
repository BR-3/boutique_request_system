<?php include "header.php"; 
    session_start();

    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
        echo "Hello, " . $_COOKIE['username'];
    } else {
        echo "You are not logged in. Please <a href=login.php>login</a>";
    }
?>

<h1>Fashion Boutique.</h1>
<h2>Where fashion meets modesty.</h2>
<h3>Located conveniently in the heart of New York.</h3>

<!-- maybe make this into an image carousel -->
<ul class="rslides">
    <li><img id="storePic" src="./images/modestBoutique1.webp" alt="An image of the store"/></li>
    <li><img id="storePic" src="./images/modestBoutique2.webp" alt="An image of the store"/></li>
    <li><img id="storePic" src="./images/modestBoutique3.webp" alt="An image of the store"/></li>
    <li><img id="storePic" src="./images/modestBoutique4.webp" alt="An image of the store"/></li>
    <li><img id="storePic" src="./images/modestBoutique5.webp" alt="An image of the store"/></li>
    <li><img id="storePic" src="./images/modestBoutique6.webp" alt="An image of the store"/></li>

</ul>

<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>


<?php include "footer.php"; ?>