<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Daily UI Ideas</title>
  <link rel='stylesheet' href='https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css'>
  <link rel="stylesheet" href="{{asset('profile/style.css')}}">

  
</head>
<body>
<!-- partial:index.partial.html -->
<div class="main-container">
  <div class="left-sidebar">
    <div class="inner">
      <div class="user-profile">
        <div class="user-background"></div>
        <div class="user-image">
          <img src="{{asset('profile/img/user.jpg')}}">
          <form action="">
            <input type="file" value="set picture">
          </form>
        </div>
        <div class="user-info">
          <p class="user-name">Daniela Desira</p>
          <p class="user-title">Front End Developer</p>
          <p class="user-location">
            <i class="icon ion-md-locate"></i> Malta
          </p>
        </div>
      </div>
      <div class="main-menu"></div>
      <div class="social-links">
        <a href="#"><i class="icon ion-logo-facebook"></i></a>
        <a href="#"><i class="icon ion-logo-twitter"></i></a>
        <a href="#"><i class="icon ion-logo-instagram"></i></a>
      </div>
    </div>
    <div class="toggle-button"><i class="icon ion-md-arrow-dropleft"></i></div>
  </div>
  <div class="main-content">
    
    <div class="modal music-player">
      <div class="heading"> 
        <h3>Daily UI #009</h3> 
        <h2>Music Player</h2>
      </div>
      <div class="audio-player-large">
        <div class="audio-image">
          <div class="artist-name">Imagine Dragons</div>
          <div class="song-title">Thunder</div>
        </div>
        <div class="audio-slider">
          <div class="slider"></div>
        </div>
        <div class="audio-buttons">
          <div class="previous-btn"><i class="icon ion-md-skip-backward"></i></div>
          <div class="pause-btn"><i class="icon ion-md-pause"></i></div>
          <div class="next-btn"><i class="icon ion-md-skip-forward"></i></div>
        </div>
      </div>
      <div class="audio-player-small">
        <div class="audio-background"></div>
        <div class="audio-image"></div>
        <div class="audio-info">
          <div class="audio-text">Now Playing</div>
          <div class="song-title">Thunder - Imagine Dragons</div>
        </div>
        <div class="audio-buttons">
          <div class="pause-btn"><i class="icon ion-md-pause"></i></div>
          <div class="next-btn"><i class="icon ion-md-skip-forward"></i></div>
        </div>
      </div>
    </div>
    <div class="modal timer-display">
      <div class="heading"> 
        <h3>Daily UI #014</h3> 
        <h2>Countdown Timer</h2>
      </div>
      <div class="countdown-timer-large">
        <div class="animatedBackground"></div>
        <div class="info">
          <div class="header">
            <h2>Stay Tuned</h2>
          </div>
          <div class="countdown">
            <div>
              <p>169</p>
              <p>days</p>
            </div>
            <div>
              <p>10</p>
              <p>hours</p>
            </div>
            <div>
              <p>31</p>
              <p>minutes</p>
            </div>
            <div>
              <p>01</p>
              <p>seconds</p>
            </div>
          </div>
        </div>
      </div>
      <div class="countdown-timer-small">
        <div class="backgroundImage"></div>
        <div class="countdown">
            <div>
              <p>169</p>
              <p>days</p>
            </div>
            <div>
              <p>10</p>
              <p>hours</p>
            </div>
            <div>
              <p>31</p>
              <p>minutes</p>
            </div>
            <div>
              <p>01</p>
              <p>seconds</p>
            </div>
          </div>
        <div class="animated-clock-face"></div>
      </div>
    </div>
    
    <div class="direct-messaging minimize">
      <div class="header-container">
        <div>
          <img src="https://gravatar.com/avatar/de84db04b0c7b43efdc840391ffe56ff">
        </div>
        <div class="header-user">
          <span>Dani</span>
          <span class="online"></span>
        </div>
        <div class="close-chat-btn"><i class="icon ion-ios-arrow-down"></i></div>
        
      </div>
      <div class="message-container">
        <div class="msg received">
          <p><span class="time">10:50pm</span></p>
          <p class="text">Hi!</p>
        </div>
        <div class="msg received">
          <p class="text">How are you today?</p>
        </div>
        <div class="msg sent">
          <p class="time">10:51pm</p>
          <p class="text">Hi Daniela, doing good thanks, yourself?</p>
        </div>
      </div>
      <div class="send-container">
        <input class="type-message" placeholder="Your message ...">
        <div class="send-btn"><i class="icon ion-md-send"></i></div>
      </div>
    </div>
    
  </div>
  <div class="right-sidebar">
    <div class="btn open-music-btn"><i class="icon ion-md-musical-notes"></i></div>
    <div class="btn open-timer-btn"><i class="icon ion-md-timer"></i></div>
    <div class="btn open-chat-btn"><i class="icon ion-md-chatbubbles"></i></div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script  src="{{asset('profile/script.js')}}"></script>

</body>
</html>
