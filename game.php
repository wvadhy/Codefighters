<?php
  include_once 'header.php';
?>

<body onload="fade();" style="
height: 100%;
width: 100%;
overflow: hidden;
background-image: url('imgs/new_background.png')">

  <!-- Transition to loading -->
    <div class="transition transition-1 is-active"></div>

  <!-- Core GUI Elements -->
    <div class="back_g">
      <div class="row justify-content-between">
        <div class="col-3">
          <div class="progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%">
              <h3>100%</h3>
            </div>
          </div>
          <div class="progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 250px; height: 20px;">
            <div class="progress-bar" style="width: 100%">
              20/20
            </div>
          </div>
          <h4 id="p1_user">USERNAME</h4>
        </div>
        <div class="col">
          <h1 id="countdown">300</h1>
          <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
            <button type="button" class="btn btn-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 20 16">
                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
              </svg>
            </button>
            <button type="button" class="btn btn-warning">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear-fill" viewBox="0 1 18 16">
                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
              </svg>
            </button>
            <button type="button" class="btn btn-success">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 1 18 16">
                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
            </button>
          </div>
          <div class="in_container">
            <input class="in" type="text" name="" value="">
          </div>
          <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
            <button type="button" class="btn btn-dark">
              Attack
            </button>
            <button type="button" class="btn btn-dark">
              Spell
            </button>
            <button type="button" class="btn btn-warning" disabled>
              Ultimate
            </button>
            <button type="button" class="btn btn-dark">
              Charge
            </button>
            <button type="button" class="btn btn-dark">
              Parry
            </button>
          </div>
        </div>
        <div class="col-3">
          <div class="progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="margin-left: auto;">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%">
              <h3>100%</h3>
            </div>
          </div>
          <div class="progress" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 250px; height: 20px; margin-left: auto;">
            <div class="progress-bar" style="width: 100%;">
              20/20
            </div>
          </div>
          <h4 id="p2_user">USERNAME</h4>
        </div>
      </div>
    </div>

</body>

<!-- Basic game logic -->
<script src="js/script.js"></script>
<script>

  const t_element = document.querySelector('.transition');

  function fade()
  {
    setTimeout(() =>
    {
      t_element.classList.remove('is-active');
      pseudo_countdown();
    }, 400)
  }

  var countdown = document.getElementById("countdown")

  var cd = 300;

  function pseudo_countdown(){
    var pseudo_timer = setInterval(function() {

      countdown.innerHTML = cd;

      cd -= 1;

      if(cd <= 0){
        clearInterval(pseudo_countdown);
      }

    }, 1000)}

</script>
