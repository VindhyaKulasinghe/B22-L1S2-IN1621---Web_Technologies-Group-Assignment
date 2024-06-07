<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wholesale</title>
    <link rel="icon" href="Resource/icon/coffee-icon.png" type="image/png">
    <link rel="stylesheet" href="CSS/wholesale.css" />

    <!--- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!--    -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">

  </head>
  <body>
    <header>
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
    </header>
    <section id="centeredImage">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="Resource/Img/carousel-1.jpg"
              class="d-block w-100"
              alt="Coffee beans in a cup"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Streamlining Wholesale Coffee Production Processes</h5>
              <p>
                Exploring efficient methods to enhance the production workflow in the wholesale coffee industry, ensuring timely delivery and quality consistency.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="Resource/Img/carousel-2.jpg"
              class="d-block w-100"
              alt=".Coffee beans in a cup"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>The Role of Customized Wholesale Coffee Cups in Branding</h5>
              <p>
                Investigating how personalized wholesale coffee cups can serve as powerful branding tools for coffee businesses, leaving a lasting impression on customers while promoting brand identity.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="Resource/Img/carousel-3.jpg"
              class="d-block w-100"
              alt="Coffee beans in a cup"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Navigating the Dynamics of Wholesale Coffee Business Expansion</h5>
              <p>
                Delving into the strategies and challenges involved in scaling a wholesale coffee business, from market analysis and distribution logistics to maintaining quality standards and customer relationships.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          id="next_btn"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section class="black-section">
      <div class="wholesale-partner">
        <h2>Become a Wholesale Partner</h2>
        <p>
          Our wholesale program is all-inclusive and custom-made to your
          specific needs. 
          <br>
          We offer free local delivery, barista training,
          maintenance to your coffee equipment and beyond.
        </p>
        <?php
      if(isset($_GET["err"])){
        if($_GET["err"]==="empty_inputs"){
          echo "<p  style='font-size:15px;background-color:red;width:80%;margin:auto auto 10px auto;Text-Align:center' >All the input field must be filled</p>";
        }
        if($_GET["err"]==="InvalidEmail"){
          echo "<p  style='font-size:15px;background-color:red;width:80%;margin:auto auto 10px auto;Text-Align:center' >Invalid Email (ex: abcd@gmail.com)</p>";
        }
        if($_GET["err"]==="InvalidName"){
          echo "<p  style='font-size:15px;background-color:red;width:80%;margin:auto auto 10px auto;Text-Align:center' >Invalid Name (Fields must contain only letters)</p>";
        }
        if($_GET["err"]==="InvalidType"){
          echo "<p  style='font-size:15px;background-color:red;width:80%;margin:auto auto 10px auto;Text-Align:center' >Invalid Business Type (Fields must contain only letters)</p>";
        }
        if($_GET["err"]==="invalidpnumber"){
          echo "<p  style='font-size:15px;background-color:red;width:80%;margin:auto auto 10px auto;Text-Align:center' >Invalid Phone Number(0112233445)</p>";
        }
        if($_GET["err"]==="sucess"){
          echo "<p  style='font-size:15px;background-color:green;width:80%;margin:auto auto 10px auto;Text-Align:center' >Successfully Booked</p>";
        }
      }
    ?>
        <form id="wholesale-form" action="backend/submit_form.php" method="post">
          <div class="form-field">
            <label for="company">Company</label>
            <input type="text" id="company" name="company" />
          </div>
          <div class="form-field">
            <label for="contact-name">Contact Name</label>
            <input type="text" id="contact-name" name="name" />
          </div>
          <div class="form-field">
            <label for="email">Your Email</label>
            <input type="text" id="email" name="email" />
          </div>
          <div class="form-field">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" />
          </div>
          <div class="form-field">
            <label for="business-type">Business Type</label>
            <input type="text" id="business-type" name="business-type" />
          </div>
          <div class="form-field">
            <label for="message">Tell us more about you</label>
            <textarea id="message" name="message"></textarea>
          </div>
          <div class="form-field">
            <button type="submit" id="submit-button" name="submit">Send</button>
          </div>
        </form>

        <div id="thank-you-message" class="hidden">
          <p>Thank you for your submission!</p>
        </div>
        <div id="error-message" class="error-message hidden">
          <p>Oops! Something went wrong. Please try again later.</p>
        </div>
      </div>
    </section>
    <script src="JavaScript/script.js"></script>

    <!-- Your footer content -->

    <footer>
      <div id="footermaindiv1">
        <div class="footerdiv1outer">
          <div id="footerdiv1">
            <div class="footdiv1inner" id="top">
              <a href="about.html">ABOUT</a>
            </div>
            <div class="footdiv1inner">COMPANY</div>
            <div class="footdiv1inner">FAQ</div>
          </div>
        </div>
        <div class="footerdiv1outer">
          <div id="footerdiv1">
            <div class="footdiv1inner" id="top">
              <a href="location.html">LOCATION</a>
            </div>
            <div class="footdiv1inner"><a href="location.html">KANDY</a></div>
            <div class="footdiv1inner"><a href="location.html">COLOMBO</a></div>
          </div>
        </div>
        <div class="footerdiv1outer">
          <div id="footerdiv1">
            <div class="footdiv1inner" id="top">FOLLOW ALONG</div>
            <div class="footdiv1inner" id="imgdiv">
              <img src="Resource/icon/fblogo.png" alt="fb" class="social" />
              <img src="Resource/icon/insta.png" alt="insta" class="social" />
              <img
                src="Resource/icon/x-social-media-white-icon.png" alt="twitter" class="social" />
            </div>
          </div>
        </div>
      </div>
      <div id="footermaindiv2">
        <div class="footdiv2inner">
          &copy; 2024 CEYLON COFFEE. ALL RIGHT RESERVED
        </div>
        <div id="footerlogo">
          <div class="footlogo"><img src="Resource/icon/logo.png" alt="logo" /></div>
        </div>
        <div class="footdiv2inner">BECAUSE WE LOVE COFFEE</div>
      </div>
    </footer>
    <!-- <script src="JavaScript/wholesale.js"></script> -->
  </body>
</html>
