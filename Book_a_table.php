<?php
  include "backend/database.php";
  include "backend/book_a_table_form.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="Resource/icon/coffee-icon.png" type="image/png">
  <link rel="stylesheet" href="CSS/Book_a_table.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">

  <title>Book a Table</title>

<body>

<nav id="mobilenav">
        <div class="nav1">
            <div class="nav1inner">
                <a href="home_page.html">Home</a>
            </div>
            <div class="nav1inner">
                <a href="about.html">About Us</a>
            </div>
        </div>
        <div id="logo">
            <a href="home_page.html"><img id="logo" src="Resource/icon/logo.png" alt="logo"></a>
        </div>

            <div class="nav1inner">
                <button id="shopbtn" data-bs-toggle="dropdown" aria-expanded="false">
                    &#9780; &#x25BC;
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="wholesale.php">Wholesale</a></li>
                    <li><a class="dropdown-item" href="menu.html">Menu</a></li>
                    <li><a class="dropdown-item" href="journal.html">Journal</a></li>
                    <li><a class="dropdown-item" href="cart.html">Cart</a></li>
                    <li><a class="dropdown-item" href="sale.html">Items</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav id="normalnav">
        <div class="nav1">
            <div class="nav1inner">
                <a href="home_page.html">Home</a>
            </div>
            <div class="nav1inner">
                <a href="about.html">About Us</a>
            </div>
            <div class="nav1inner">
                <a href="journal.html">Journal</a>
            </div>
        </div>
        <div id="logo">
            <a href="home_page.html"><img id="logo" src="Resource/icon/logo.png" alt="logo"></a>
        </div>
        <div class="nav1">
            <div class="nav1inner">
                <a href="menu.html">Menu</a>
            </div>
            <div class="nav1inner">
                <a href="wholesale.php">Wholesale</a>
            </div>
            <div class="nav1inner">
                <button id="shopbtn" data-bs-toggle="dropdown" aria-expanded="false">
                    Shop Now &#x25BC;
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="cart.html">Cart</a></li>
                    <li><a class="dropdown-item" href="sale.html">Items</a></li>
                </ul>
            </div>
        </div>
    </nav>
  <section>
    <h1 id="maintopic">Book a Table</h1>
    <div id="table">
    <?php
      if(isset($_GET["err"])){
        if($_GET["err"]==="empty_inputs"){
          echo "<p  style='font-size:15px;background-color:red;width:50%;margin:auto auto 10px auto;Text-Align:center' >All the input field must be filled</p>";
        }
        if($_GET["err"]==="InvalidEmail"){
          echo "<p  style='font-size:15px;background-color:red;width:50%;margin:auto auto 10px auto;Text-Align:center' >Invalid Email (ex: abcd@gmail.com)</p>";
        }
        if($_GET["err"]==="InvalidName"){
          echo "<p  style='font-size:15px;background-color:red;width:50%;margin:auto auto 10px auto;Text-Align:center' >Invalid Name (Fields must contain only letters)</p>";
        }
        if($_GET["err"]==="InvalidNumber"){
          echo "<p  style='font-size:15px;background-color:red;width:50%;margin:auto auto 10px auto;Text-Align:center' >Invalid Count(Maximum 9 Customers)</p>";
        }
        if($_GET["err"]==="sucess"){
          echo "<p  style='font-size:15px;background-color:green;width:50%;margin:auto auto 10px auto;Text-Align:center' >Successfully Booked</p>";
        }
      }
    ?>
      <div id="parts">
        <div id="part1">
          <div id="text">
            <h5>We will confirm your reservation within 24 hours via Email.</h5>
            <h3>OPENING TIMES</h3>
            <h5>
              Monday - Friday <br>
              7am - 6pm</h5>
            <h5>
              Saturday/Sunday <br>
              8am - 6pm
            </h5>
          </div>
        </div>
        <div id="part2">
          <form id="book" action="backend/book_a_table_form.php" method="post">
            <div id="innputtype1">
              <label class="input">
                COMPANY <br>
                <input type="text" name="company" id="company">
              </label>
              <label class="input">
                YOUR NAME <br>
                <input type="text" name="name" id="name">
              </label>
              <label class="input">
                YOUR EMAIL <br>
                <input type="text" name="email" id="email">
              </label>
              <label class="input">
                DATE <br>
                <input type="date" name="date" id="date">
              </label>
            </div>
            <div id="innputtype2">
              <label class="input">TIME <br></label>
              <div class="radio">
              
              <div><label><input type="hidden" name="time" value="0" checked="checked"/></label></div>
                <div><label><input type="radio" name="time" id="time1" value="9:00">9:00</label></div>
                <div><label><input type="radio" name="time" id="time2" value="9:30">9:30</label></div>
                <div><label><input type="radio" name="time" id="time3" value="10:00">10:00</label></div>
                <div><label><input type="radio" name="time" id="time4" value="10:30">10:30</label></div>
              </div>
            </div>
            <div id="innputtype1">
              <label class="input">
                NUMBER OF PEOPLE <br>
                <input type="text" name="count" id="count">
              </label>
              <label class="input">
                YOUR MESSAGE <br>
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
              </label>
            </div>
            <input type="submit" value="SEND" id="submit-button" name="submit">
          </form>

            <div id="thank-you-message" class="hidden">
              <p>Thank you for your submission!</p>
            </div>
            <div id="error-message" class="error-message hidden">
              <p>Oops! Something went wrong. Please try again later.</p>
            </div>

        </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div id="footermaindiv1">
        <div class="footerdiv1outer">
            <div id="footerdiv1">
                <div class="footdiv1inner" id="top"><a href="about.html">ABOUT</a></div>
                <div class="footdiv1inner">COMPANY</div>
                <div class="footdiv1inner">FAQ</div>
            </div>
        </div>
        <div class="footerdiv1outer">
            <div id="footerdiv1">
                <div class="footdiv1inner" id="top"><a href="location.html">LOCATION</a></div>
                <div class="footdiv1inner"><a href="location.html">KANDY</a></div>
                <div class="footdiv1inner"><a href="location.html">COLOMBO</a></div>
            </div>
        </div>
        <div class="footerdiv1outer">
            <div id="footerdiv1">
                <div class="footdiv1inner" id="top">FOLLOW ALONG</div>
                <div class="footdiv1inner" id="imgdiv">
                    <img src="Resource/icon/fblogo.png" alt="fb" class="social">
                    <img src="Resource/icon/insta.png" alt="insta" class="social">
                    <img src="Resource/icon/x-social-media-white-icon.png" alt="twitter" class="social">
                </div>
            </div>
        </div>
    </div>
    <div id="footermaindiv2">
        <div class="footdiv2inner">&copy; 2024 CEYLON COFFEE. ALL RIGHT RESERVED </div>
        <div id="footerlogo">
        <div class="footlogo"><img src="Resource/icon/logo.png" alt="logo"></div>
        </div>
        <div class="footdiv2inner"> BECAUSE WE LOVE COFFEE</div>
    </div>
</footer>
<!-- <script src="JavaScript/Book_a_table.js"></script> -->
</body>

</html>
