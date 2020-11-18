<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    <title>Hangman</title>
  </head>
  <body>
    <h1>nba hangman
    <img src="img/nbalogo.png" alt="nba logo" id=logo>
    </h1>
    <p>Guess the NBA team name being hidden</p>
    <div class="game-container">
      <svg height="250" width="200" class="figure-container">
        <!-- Rod -->
        <line x1="60" y1="20" x2="140" y2="20" />
        <line x1="140" y1="20" x2="140" y2="50" />
        <line x1="60" y1="20" x2="60" y2="230" />
        <line x1="20" y1="230" x2="100" y2="230" />

        <!-- Head -->
        <circle cx="140" cy="70" r="20" class="figure-part" />
        <!-- Body -->
        <line x1="140" y1="90" x2="140" y2="150" class="figure-part" />
        <!-- Arms -->
        <line x1="140" y1="120" x2="120" y2="100" class="figure-part" />
        <line x1="140" y1="120" x2="160" y2="100" class="figure-part" />
        <!-- Legs -->
        <line x1="140" y1="150" x2="120" y2="180" class="figure-part" />
        <line x1="140" y1="150" x2="160" y2="180" class="figure-part" />
      </svg>

      <div class="wrong-letters-container">
        <div id="wrong-letters"></div>
      </div>

      <div class="word" id="word"></div>
    </div>

    <!-- Container for final message -->
    <div class="popup-container" id="popup-container">
      <div class="popup">
        <h2 id="final-message"></h2>
        <h3 id="final-message-reveal-word"></h3>
        <button id="play-button">Play Again</button>
      </div>
    </div>

    <!-- Notification -->
    <div class="notification-container" id="notification-container">
      <p>You have already entered this letter</p>
    </div>

    <script src="js/hangman.js"></script>
    
    <footer>
        <br />
        CST336 Internet Programming. 2020&copy; Cruz <br />
        <strong>Disclaimer:</strong> The information in this webpage is fictitious.<br />
        It is used for academic purposes only.
        <figure>
            <img src="img/CSUMB_Logo_Black.png" alt="CSUMB Logo" class="footer-logo" />
        </figure>
    </footer>
  </body>
</html>