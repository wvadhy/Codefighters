<?php
  include_once 'header.php';
?>

<body onload="fade();" style="background-image: url('imgs/loading_bg_1.gif');">

  <!-- Transition to loading -->
    <div class="transition transition-1 is-active"></div>

  <!-- Theme -->
  <embed name="Theme" src="music/theme.mp3" loop="false" hidden="true" autostart="true">

  <!-- Logo -->
  <div class="intro">
    <h1>
      <img class="git_branch" src="imgs/git_branch.png" alt="">
        CODE FIGHT<img class="current_event" src="imgs/space.png" alt="">ERS
      <img class="sword_r" src="imgs/sword_r.png" alt="">
    </h1>
  </div>

  <div class="version">
    <strong>{</strong> <code>v1.0</code> <strong>}</strong>
  </div>

  <span class="badge rounded-pill text-bg-secondary">premium disabled</span>

  <!-- Motto -->
  <div class="">
    <h3>
      Create your warrior...
    </h3>
  </div>

  <!-- Gender select -->
  <div class="gender">
    <div class="btn-group me-2" role="group" aria-label="First group">
      <button type="button" class="btn btn-dark">
        Male
      </button>
      <button type="button" class="btn btn-dark">
        Female
      </button>
    </div>
  </div>

  <!-- Customisation -->
  <div class="customisation">
    <div class="row">
      <div class="col-sm">
        <div class="arrows left">
          <div class="arrow left mb-2" data-avatar-index="1">
            <img src="imgs/arrow-left-circle.svg" alt="">
          </div>
          <div class="arrow left mb-2" data-avatar-index="2">
            <img src="imgs/arrow-left-circle.svg" alt="">
          </div>
          <div class="arrow left mb-2" data-avatar-index="3">
            <img src="imgs/arrow-left-circle.svg" alt="">
          </div>
        </div>
      </div>
      <div class="col-sm">
        <img id="temp_img" src="imgs/dark-grey.png" alt="">
      </div>
      <div class="col-sm">
        <div class="arrows right">
          <div class="arrow right mb-2" data-avatar-index="1">
            <img src="imgs/arrow-right-circle.svg" alt="">
          </div>
          <div class="arrow right mb-2" data-avatar-index="2">
            <img src="imgs/arrow-right-circle.svg" alt="">
          </div>
          <div class="arrow right mb-2" data-avatar-index="3">
            <img src="imgs/arrow-right-circle.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <form action="includes/signup.inc.php" method="post" class="x needs-validation" novalidate>
    <!-- Name input -->
    <div class="enter_name">
      <div class="input-group mb-3">
        <input name="username" type="text" class="form-control" placeholder="Your name?" aria-label="Username" required>
      </div>
    </div>

    <!-- Password input -->
    <div class="enter_pass">
      <div class="input-group mb-3"
            data-bs-toggle="tooltip" data-bs-placement="right"
            data-bs-custom-class="custom-tooltip"
            data-bs-title="Password must be 8 characters">
        <input id="pswrd" name="password" type="password" class="form-control" placeholder="Your password?" aria-label="Password" required>
      </div>
    </div>

    <!-- Play button -->
    <div class="play">
      <a href="loading.html">
        <button type="submit" name="submit" class="btn btn-danger btn-lg">
          <strong>FIGHT</strong>
        </button>
      </a>
      <button type="button" class="btn btn-warning"
        data-bs-toggle="tooltip" data-bs-placement="right"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="Get premium">
        <img src="imgs/gem.svg" alt="">
      </button>
    </div>
  </form>

  <!-- Leadeboard -->
  <div class="leaderboard">
    <a href="#mid_jump">
      <button type="button" class="btn btn-outline-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 7 16 16">
          <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
      </button>
    </a>
  </div>


  <div id="container" class="tips_container">
	   <div id="text" class="tips"></div><
  </div>

  <img id="mid_jump" class="wave_1" src="imgs/wave_1.svg" alt="">

  <!-- Second Page Down -->
  <div class="footer_area">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item mb-3" role="presentation">
        <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account-tab-pane" type="button" role="tab" aria-controls="account-tab-pane" aria-selected="true">
          Account
        </button>
      </li>
      <li class="nav-item mb-3" role="presentation">
        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
          Gameplay
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
          About
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
          Changelog
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="premium-tab" data-bs-toggle="tab" data-bs-target="#premium-tab-pane" type="button" role="tab" aria-controls="premium-tab-pane" aria-selected="false">
          Premium
        </button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgs/dark-grey.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <img src="imgs/joystick.svg" alt="">
                <p>Solve questions</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="imgs/dark-grey.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <img src="imgs/fire.svg" alt="">
                <p>Deal damage</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="imgs/dark-grey.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <img src="imgs/magic.svg" alt="">
                <p>Use abilities</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="imgs/dark-grey.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                  <img src="imgs/globe-americas.svg" alt="">
                  <p>Battle opponents around the world</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="imgs/dark-grey.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                  <img src="imgs/yin-yang.svg" alt="">
                  <p>Become king</p>
              </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <div class="footer_header">
          <h2>What is CodeFighters?</h2><div id="cursor"></div>
        </div>
        <br>
        <div class="footer_para">
          <p>
            <strong>CodeFighters</strong> is a competitive leetcode(esque) game
            which has players duel out their programming knowledge against opponents
            in real time online!
          </p>
          <p>
            Players will attain rating points after defeating enemies, these will then
            be used to calculate their position on the ladder, the higher you go, the
            tougher foes and questions you will face.
          </p>
        </div>
        <nav>
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#mid_jump"><strong><</strong></a></li>
            <li class="page-item"><a class="page-link" href="#mid_jump">/</a></li>
            <li class="page-item"><a class="page-link" href="#mid_jump"><strong>></strong></a></li>
          </ul>
        </nav>
      </div>
      <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
        <div class="footer_header">
          <h2>Updates</h2>
          <img class="sword" src="imgs/sword.png" alt="">
        </div>
        <br>
        <div class="overflow-auto p-3">
           <h3>Version <code>1.0</code></h3>
           <strong>UI</strong>:
           <br>
             - compartmentalised UI into sub-nav
           <br>
             - enhanced character customisation
           <br>
             - improved form validation
           <br>
             - fixed mobile UI
           <br>
           <strong>Bug-fixes</strong>:
           <br>
             - fixed game clock
        </div>
      </div>
      <div class="tab-pane fade" id="premium-tab-pane" role="tabpanel" aria-labelledby="premium-tab" tabindex="0">
        <h5 style="color: gold;">Tired of ads?</h5>
        <img src="imgs/gem.svg" alt="">
        <div class="footer_para">
          <p>
            Well we are too, so if you wanna help support us in the development
            of <strong>Codefighters</strong> and also remove those pesky ads which
            delay you from your epic battles + cool
            acessories, buy us a $5 coffee!
          </p>
          <button type="button" class="btn btn-lg btn-warning">Get premium</button>
        </div>
      </div>
      <div class="tab-pane fade" id="account-tab-pane" role="tabpanel" aria-labelledby="account-tab" tabindex="0">
        <h6 style="color: #F5F5F5;">Please login to see data...</h6>
      </div>
    </div>
  </div>

<!-- Seperator -->
<img src="imgs/wave_2.svg" alt="" style="background-color: rgb(10, 0, 0);">

<!-- Leaderboard -->
<div class="crown_div">
  <img class="crown" src="imgs/crown.png" alt="">
</div>

<div class="rankings">
  <img class="sword_tilt_l" src="imgs/sword_tilt_l.png" alt="">
  <h2>Leaderboard</h2>
  <img class="sword_tilt_r" src="imgs/sword_tilt_r.png" alt="">
</div>

<div class="rankings_data">
  <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
    <button type="button" class="btn btn-dark">1</button>
    <button type="button" class="btn btn-dark">2</button>
    <button type="button" class="btn btn-dark">3</button>
    <button type="button" class="btn btn-dark">4</button>
    <button type="button" class="btn btn-dark">5</button>
    <button type="button" class="btn btn-dark">6</button>
    <button type="button" class="btn btn-dark">7</button>
    <button type="button" class="btn btn-dark">8</button>
    <button type="button" class="btn btn-dark">9</button>
    <button type="button" class="btn btn-dark">10</button>
  </div>
</div>

<div class="winged_div">
  <img class="winged" src="imgs/winged.png" alt="">
</div>

<img style="background-color: rgb(10, 0, 0);" src="imgs/search_wave.svg" alt="">
<div class="search">
  <h3>Find players <img src="imgs/search.svg" alt=""></h3>
  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
</div>

<img style="background-color: rgb(10, 0, 0);" src="imgs/search_wave_2.svg" alt="">

<!-- End of page -->
<div class="page_down_2">

  <h3>Found a <img src="imgs/bug-fill.svg" alt="">?</h3>

  <br>

  <!-- Contact us -->
  <form class="z needs-validation" novalidate>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
    </div>
    <div class="input-group mb-3">
      <label for="inputGroupFile01" class="form-label">Screenshot</label>
      <input type="file" class="form-control" id="inputGroupFile01">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Description of bug</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-outline-danger mb-3">SEND</button>
  </form>

  <!-- Informal footer -->
  <br>
  <img class="cross_swords" src="imgs/cross_swords.png">
    <h4>Made with luv</h4>
    <br>
    <ul class="nav nav-underline mb-1">
      <li class="nav-item">
        <a class="nav-link" href="#">Credits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ToS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cookies</a>
      </li>
    </ul>
    <h6>The owner of this site is not responsible for any user generated content</h6>
  </div>

</body>

<script src="js/movement.js"></script>
<script src="js/i.js"></script>
<script>

  const t_element = document.querySelector('.transition');

  function fade()
  {
    setTimeout(() =>
    {
      t_element.classList.remove('is-active');
    }, 200)
  }

</script>
