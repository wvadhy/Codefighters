<?php
  include_once 'header.php';
?>

<body onload="pseudo_timer()">

  <!-- Scary skull -->
  <div class="container">
    <img class="skull" src="imgs/skull_load.png" alt="">
    <div class="bottom-left"></div>
  </div>

  <!-- Countdown timer -->
  <div class="countdown">
    <h4>ETA: <code id="cur_time">~</code>s</h4>
  </div>

  <!-- Glowing spinner -->
  <div class="load">
    <div id="spin" class="spinner-grow" role="status"></div>
  </div>

  <br>

  <figure class="text-center">
    <blockquote class="blockquote">
      <p id="tip">A well-known quote, contained in a blockquote element.</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      Sun tzu <cite title="Source Title">The Art Of War</cite>
    </figcaption>
  </figure>

  <button type="button" name="button" class="btn btn-danger">cancel</button>

</body>

<!--Loading logic (pseudo) -->
<script>

var tips = [
	"Praise the Lord and pass the ammunition!",
	"Come on! Do you want to live forever?",
	"Rebellions are built on hope",
	"I'd like to live as a poor man",
  "I came, I saw, I lost",
  "If I got any cooler I would freeze to death",
  "Empathy is the glue",
  "I feel calm but energized",
	"George Bush doesn't care about black people",
  "We all self-conscious. I'm just the first to admit it.",
  "Fur pillows are hard to actually sleep on",
  "I spoke to Dave Chapelle for two hours this morning. He is our modern day Socrates"
];

var x = Math.floor(Math.random() * (15 - 3) + 3);
var y = document.getElementById("spin")
var tip = document.getElementById("tip")
var z = x

tip.innerHTML = '"' + tips[Math.floor(Math.random()*tips.length)] + '"';

function pseudo_timer(){
  var pseudo_timer = setInterval(function() {

    q_start = Math.floor(Math.random() * (3 - 1) + 1)

    x -= 1;

    var temp = document.getElementById("cur_time");

    if(x <= (Math.floor(z / 1.5))){
      y.style.boxShadow = "0px 0px 40px yellow";
      y.style.backgroundColor = "yellow";
    }

    if (x <= (Math.floor(z / 3))) {
      y.style.boxShadow = "0px 0px 40px green";
      y.style.backgroundColor = "green";
      if(q_start === 1){
        x = 0;
      }
    }

    temp.innerHTML = x;

    if(x <= 0){
      clearInterval(pseudo_timer);
      found();
    }

  }, 1000);
}

function found(){
  setTimeout(function(){
    window.open("game.html")
  }, 1000)
}

</script>
