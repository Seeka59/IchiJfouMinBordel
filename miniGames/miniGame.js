var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
var x = canvas.width/2;
var y = canvas.height/2;
var dx = 2;
var dy = -2;
var paddleHeight = 10;
var paddleWidth = 75;
var paddleX = (canvas.width-paddleWidth)/2;
var paddleY = (canvas.height-paddleHeight)/2;

var rightPressed = false;
var leftPressed = false;
var upPressed = false;
var downPressed = false;


document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);
document.addEventListener("mousemove", mouseMoveHandler, false);


function keyDownHandler(e) {
    if(e.key == "D" || e.key == "ArrowRight") {
        rightPressed = true;
    }
    else if(e.key == "Q" || e.key == "ArrowLeft") {
        leftPressed = true;
    }
    else if(e.key == "Z" || e.key == "ArrowUp") {
        upPressed = true;
    }
    else if(e.key == "S"|| e.key == "ArrowDown"){
        downPressed == true;
    }
}

function keyUpHandler(e) {
    if(e.key == "D" || e.key == "ArrowRight") {
        rightPressed = false;
    }
    else if(e.key == "Q" || e.key == "ArrowLeft") {
        leftPressed = false;
    }
    else if(e.key == "Z" || e.key == "ArrowUp") {
        upPressed == false;
    }
    else if(e.key == "S"|| e.key == "ArrowDown"){
        downPressed == false;
    }
}

function mouseMoveHandler(e) {
  var relativeX = e.clientX - canvas.offsetLeft;
  if(relativeX > 0 && relativeX < canvas.width) {
    paddleX = relativeX - paddleWidth/2;
  }
}


function drawPaddle() {
    ctx.beginPath();
    ctx.rect(paddleX, paddleY, paddleWidth, paddleHeight);
    ctx.fillStyle = "#0095DD";
    ctx.fill();
    ctx.closePath();
  }

function draw() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  drawPaddle();

  if(rightPressed && paddleX < canvas.width-paddleWidth) {
    paddleX += 7;
  }
  else if(leftPressed && paddleX > 0) {
    paddleX -= 7;
  }
  else if(upPressed && paddleY > 0){
      paddleY -= 7;
  }
  else if(upPressed && paddleY < canvas.height-paddleHeight  ){
      paddleY += 7;
  }

  x += dx;
  y += dy;
  requestAnimationFrame(draw);
}

draw();