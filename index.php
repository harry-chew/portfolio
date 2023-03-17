<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Noto+Sans:wght@300&family=Patua+One&family=Plus+Jakarta+Sans:wght@300&family=Spline+Sans+Mono:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <title>Harry Chew</title>
    <script>
    $(document).ready(function ()  {
      $('#banner').hide();
    });
    $(document).scroll(function () {
      var y = $(this).scrollTop();
      if (y > 10) {
          $('#banner').slideDown();
      } else {
        //$('#banner').addClass('hide');
          $('#banner').slideUp();
      }
    });
    </script>
  </head>
  <body>
    <div class="page-wrapper">
      <div id="banner" class="banner">
        <div id="hc" class="banner-links banner-elements">
          <a href="#">Harry Chew</a>
        </div>
        <div id="navbar" class="banner-links banner-elements">
          <a href="#about">About</a>
          <a href="#games">Games</a>
          <a href="#web">Web</a>
          <a href="https://blog.harrychew.com" target="_blank">Blog</a>
          <a href="#contact">Contact</a>
        </div>
      </div>
      <div class="landing-wrapper">
        <div class="title">
          <h1>Harry Chew</h1>
          <a href="#about" class="call-to-action">Developer</a>
        </div>
      </div>
      <div id="about" class="about flex">
        <div class="container-col">
          <div class="title">
            <h2>A little about what I do</h2>
          </div>
          <div class="about-text">
            <p>Harry’s passion for IT started from a young age, building his first computer at the age of 11. ‘It was an amazing experience’ he says, ‘alongside the fear of breaking something in all honesty!’ Shortly after this he became quite wrapped up in the world of computer gaming. By combining his passion and hobby he was able to develop his knowledge further. ‘It drained a lot of my life-blood but then led onto learning how games work, learning about databases and how to program computer code.’</p><br>
            <p>This led him onto his first full project. He decided to take on was the task of running a multiplayer game server for him and his friends to play on in their down-time. ’This quite quickly turned into most-of-the-time, but I learnt how to build a website which enabled players to sign up to join the game.’ From this he learnt how to manipulate databases to customise items and script-writing which meant additional content could be added.</p><br>
            <p>Harry went on to get a BSc (Hons) in Computer Game and Animation Technology to further his knowledge, solidifying the progression of his passion and hobby.</p>
          </div>
          <a href="#web" class="call-to-action-dark">Work</a>
        </div>
      </div>

      <div id="games" class="games flex">
        <div class="title">
          <h2>Game Development</h2>
        </div>
        <div class="full">
          <div class="half">
            <div class="journey">
              <h3>My Journey</h3>
              <br>
              <p>2001-2004 - Playtime</p>
              <p>2004-2007 - Interest in development through gaming</p>
              <p>2008-2014 - Continued learning through acedemic studies</p>
              <p>2014-2018 - Worked in IT related roles</p>
              <p>2018-2023 - Tech13 Ltd</p>
              <p>2022-2023 - Mastered Gameplay Programmer Course</p>
              <br>
              <p>Future    - GAME DEVELOPER</p>
            </div>
          </div>
          <div class="half">
            <img src="img\code-blur2.png" alt="">
          </div>
        </div>
        <div class="full">
          <div class="half">
          <img src="img\vehicle-configurator.png" alt="">
          </div>
          <div class="half">
            <h3>Recent Project</h3>
            <br>
            <p>Vehicle Configurator built using Unity and C#</p>
            <ul>
              <li>OOP</li>
              <li>Design Patterns</li>
              <li>Post Processing FX</li>
              <li>Audio</li>
              <li>UI</li>
            </ul>
            <br>
            <p>Test out the application <a href="https://harrychew.itch.io/vehicle-configurator" target="_blank">here</a></p>
          </div>
        </div>
        <div class="full">

          <div class="half">
            <div class="journey">
              <h3>Past Project</h3>
              <br>
              <p>Small mobile game built using Unity and C#</p>
              <p>I am rebuilding it.</p>
              <br>
              <p>Check out the application <a href="https://m.apkpure.com/asteroid-invaders-unreleased/com.harrychew.asteroidinvaders" target="_blank">here</a></p>
            </div>
          </div>
          <div class="half">
          <img src="img\asteroid-invaders-01.jpg" alt="">
          </div>
        </div>
        
        <div class="full">
          <div class="half">
          <h2>Check out my Itch profile for upcoming game releases!</h2>
          <p><a href="http://harrychew.itch.io">ITCH PROFILE</a></p>
          </div>

        </div>

      </div>

      <div id="web" class="web flex">
        <div class="title">
          <h2>Web Development</h2>
        </div>
        <div class="cards">
          <div id="wordPressCardButton" class="card cards-wp">
            <i class="fa-brands fa-wordpress-simple"></i>
            <h2>WordPress</h2>
            <p>Click to explore</p>
          </div>
          <div id="codePressCardButton" class="card cards-web">
            <i class="fa-solid fa-code"></i>
            <h2>Code</h2>
            <p>Click to explore</p>
          </div>
          <div id="webAppCardButton"class="card cards-app">
            <i class="fa-solid fa-fire"></i>
            <h2>WebApp</h2>
            <p>Click to explore</p>
          </div>
        </div>
      </div>
      <div id="wordPressModal" class="">
        <h2>WordPress Projects</h2>
        <i id="wordPressModalClose" class="x-button fa-solid fa-circle-xmark"></i>
        <div class="wordPressModalInner">
          <a href="https://giftsofnote.co.uk" target="_blank" class="wordPressModalCard">
            <div class="cardsImgWrapper">
              <img src="img/gon-logo.png" alt="">
            </div>
            <p>WordPress eCommerce website with ebay & amazon integrations.</p>
          </a>
          <a href="https://sol-tree.co.uk" target="_blank" class="wordPressModalCard">
            <div class="cardsImgWrapper">
              <img src="img/st-logo.png" alt="">
            </div>
            <p>WordPress eCommerce website for face masks.</p>
          </a>
          <a href="https://studiocarwash.co.uk" target="_blank" class="wordPressModalCard">
            <div class="cardsImgWrapper">
              <img src="img/scw-logo.png" alt="">
            </div>
            <p>WordPress business website for a Car Wash.</p>
          </a>
          <a href="https://lilliancare.co.uk/" target="_blank" class="wordPressModalCard">
            <div class="cardsImgWrapper">
              <img src="img/lc-logo.png" alt="">
            </div>
            <p>WordPress business website for Home Care.</p>
          </a>
        </div>
      </div>
      <div id="codeModal" class="">
        <h2>Websites from scratch projects</h2>
        <i id="codeModalClose" class="x-button fa-solid fa-circle-xmark"></i>
        <div class="wordPressModalInner">
          <div class="wordPressModalCard">
            <img src="img/t13-logo.png" alt="">
            <a href="https://tech13.co.uk" target="_blank">Tech13 Ltd</a>
            <p>IT support and implementation company website.</p>
            <ul>
              <lh>Technology</lh>
              <li>HTML</li>
              <li>CSS</li>
              <li>JavScript</li>
            </ul>
          </div>
          <div class="wordPressModalCard">
            <img src="img/avx-logo.png" alt="">
            <a href="https://hireshop.avxpert.co.uk" target="_blank">AV Xpert Ltd</a>
            <p>PHP backend with API integrations.</p>
            <ul>
              <lh>Technology</lh>
              <li>HTML</li>
              <li>PHP</li>
              <li>MySQL</li>
            </ul>
          </div>
          <div class="wordPressModalCard">
            <img src="img/apple-touch-icon.png" alt="">
            <a href="https://harrychew.co.uk/" target="_blank">Harry Chew</a>
            <p>This portfolio.</p>
            <ul>
              <lh>Technology</lh>
              <li>HTML</li>
              <li>CSS</li>
              <li>PHP</li>
              <li>JavaScript</li>
            </ul>
          </div>
        </div>
      </div>
      <div id="webAppModal" class="">
        <h2>WebApp Projects</h2>
        <i id="webAppModalClose" class="x-button fa-solid fa-circle-xmark"></i>
        <div class="wordPressModalInner">
          <a href="apps/convert" target="_blank" class="wepAppModalCard">
            <div class="cardsImgWrapper">
              <i class="fa-solid fa-building"></i>
            </div>
            <p>Simple conversion tool written in JavaScript.</p>
          </a>
          <a href="apps/chuck" target="_blank" class="wepAppModalCard">
            <div class="cardsImgWrapper">
              <i class="fa-solid fa-building"></i>
            </div>
            <p>Random Chuck Norris joke website.</p>
          </a>
          <a href="apps/todo" target="_blank" class="wepAppModalCard">
            <div class="cardsImgWrapper">
              <i class="fa-solid fa-building"></i>
            </div>
            <p>Todo App written in JavaScript</p>
          </a>
          <a href="apps/weather" target="_blank" class="wepAppModalCard">
            <div class="cardsImgWrapper">
              <i class="fa-solid fa-building"></i>
            </div>
            <p>Weather App written in JavaScript</p>
          </a>
          <a href="apps/game-of-life" target="_blank" class="wepAppModalCard">
            <div class="cardsImgWrapper">
              <i class="fa-solid fa-building"></i>
            </div>
            <p>Conways' Game of Life App written in JavaScript</p>
          </a>
        </div>
      </div>
      <div id="contact" class="contact flex">
        <div class="title">
          <h2>Would love to hear from you!</h2>
        </div>
        <div class="container">
          <form class="contact-form" action="contact.php" method="post">
            <label for="c-name">Name</label>
            <input type="text" id="name" name="c-name" placeholder="Your name..">
            <label for="c-email">Email</label>
            <input type="email" id="email" name="c-email" placeholder="Your email..">
            <label for="c-subject">Subject</label>
            <input name="c-subject" type="text" placeholder="Subject..."></input>
            <label for="c-message">Message</label>
            <textarea id="message" name="c-message" placeholder="Write something.." style="height:200px"></textarea>
            <input id ="submit" type="submit" name="c-submit" value="Send">
          </form>
          <div class="social">
            <a href="https://uk.linkedin.com/in/harrychew" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="mailto:harry@tech13.co.uk"><i class="fa-solid fa-square-envelope"></i></a>
            <a href="tel:07889610244"><i class="fa-solid fa-square-phone"></i></a>
            <a href="https://github.com/harry-chew/" target="_blank"><i class="fa-brands fa-github"></i></a>
          </div>
        </div>
        </div>
        <div class="footer">
          <p>Harry Chew &copy; 2022. All rights reserved.</p>
        </div>
      </div>
      <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>
