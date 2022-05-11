<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <title>Harry Chew</title>
  </head>
  <body>
    <div class="page-wrapper">
      <div class="banner">

      </div>
      <div class="landing-wrapper">
        <div class="title">
          <h1>Harry Chew</h1>
          <a href="#about" class="call-to-action">Developer</a>
        </div>

      </div>
      <div id="about" class="about flex wrapper">
        <div class="container-col">
          <div class="title">
            <h2>A little about what I do</h2>
          </div>

          <div class="about-text">
            <p>Harry’s passion for IT started from a young age, building his first computer at the age of 11. ‘It was an amazing experience’ he says, ‘alongside the fear of breaking something in all honesty!’ Shortly after this he became quite wrapped up in the world of computer gaming. By combining his passion and hobby he was able to develop his knowledge further. ‘It drained a lot of my life-blood but then led onto learning how games work, learning about databases and how to program computer code.’</p><br>

            <p>This led him onto his first full project. He decided to take on was the task of running a multiplayer game server for him and his friends to play on in their down-time. ’This quite quickly turned into most-of-the-time, but I learnt how to build a website which enabled players to sign up to join the game.’ From this he learnt how to manipulate databases to customise items and script-writing which meant additional content could be added.</p><br>

            <p>Harry went on to get a BSc (Hons) in Computer Game and Animation Technology to further his knowledge, solidifying the progression of his passion and hobby.</p>
          </div>
          <a href="#web" class="call-to-action">Work</a>
        </div>


      </div>
      <!--
      <div id="game" class="game flex wrapper">
        <div class="title">
          <h2>Game Development</h2>
        </div>
      </div>
      -->
      <div id="web" class="web flex wrapper">
        <div class="title">
          <h2>Web Development</h2>
        </div>
      </div>
      <div class="contact flex wrapper">
        <div class="title">
          <h2>Would love to hear from you!</h2>
        </div>

        <div class="container">
          <form class="contact-form" action="contact.php" method="post">
            <label for="c-name">Name</label>
            <input type="text" id="name" name="c-name" placeholder="Your name..">

            <!--
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Your last name..">
            -->
            <label for="c-email">Email</label>
            <input type="email" id="email" name="c-email" placeholder="Your email..">

            <label for="c-subject">Subject</label>
            <input name="c-subject" type="text" placeholder="Subject..."></input>
            <!--
            <label for="qtype">Type of Query</label>
            <select id="qtype" name="qtype">
              <option value="gamedev">Game Dev</option>
              <option value="webdev">Web Dev</option>
              <option value="video">Video</option>
              <option value="general">General Enquiry</option>
            </select>
            -->
            <label for="c-message">Message</label>
            <textarea id="message" name="c-message" placeholder="Write something.." style="height:200px"></textarea>

            <input id ="submit" type="submit" name="c-submit" value="Send">
          </form>
          <div class="social">
            <i class="fa fa-facebook-official"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube"></i>
            <i class="fa fa-linkedin-square"></i>
          </div>
        </div>

        </div>
      </div>

  </body>
</html>
