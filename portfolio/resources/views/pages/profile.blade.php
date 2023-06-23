<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Daily UI Ideas</title>
  <link rel='stylesheet' href='https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css'>
  <link rel="stylesheet" href="{{asset('profile/style.css')}}">



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <!-- TinyMCE CDN -->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  
  <script>
    tinymce.init({
      selector: 'textarea#editor',
    });
  </script>
  
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

      <form action="{{ url('/blog') }}" method="POST">
        @csrf

        <label for="head_line">Head Line</label>
        <input type="text" name="head_line"> <br> <br>
        {{-- <input type="text" name="discription"> --}}
        <textarea name="discription" id="editor"></textarea><br><br>
        <input type="submit" class="btn btn-dark my-3" value="Submit">
      </form>


    </div>
    <div class="modal timer-display">
      <textarea id="editor"></textarea>
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
    <div class="btn open-music-btn"><p>About</p></div>
    <div class="btn open-music-btn"><p>Service</p></div>
    <div class="btn open-music-btn"><p>Pricing</p></div>
    <div class="btn open-timer-btn"><p>Contact</p></div>
    <div class="btn open-chat-btn"><i class="icon ion-md-chatbubbles"></i></div>
  </div>
</div>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->

 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script  src="{{asset('profile/script.js')}}"></script>

</body>
</html>


