var canvas = document.getElementById("starfield");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var context = canvas.getContext("2d");
var stars = 500;
var colorrange = [8, 18, 35]; // peach/rose/orange hues
var starArray = [];

// Peach/Rose/Mellow theme colors
const THEME = {
  text: { r: 255, g: 214, b: 184 },   // peach-rose mellow
  glow: "rgba(255, 170, 150, 0.95)",  // warm rose glow
  glowBlur: 12
};

function themedFill(alpha) {
  return `rgba(${THEME.text.r}, ${THEME.text.g}, ${THEME.text.b}, ${alpha})`;
}

function getRandom(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Initialize stars with random opacity values
for (var i = 0; i < stars; i++) {
  var x = Math.random() * canvas.offsetWidth;
  var y = Math.random() * canvas.offsetHeight;
  var radius = Math.random() * 1.2;
  var hue = colorrange[getRandom(0, colorrange.length - 1)];
  var sat = getRandom(50, 100);
  var opacity = Math.random();
  starArray.push({ x, y, radius, hue, sat, opacity });
}

var frameNumber = 0;
var opacity = 0;
var secondOpacity = 0;
var thirdOpacity = 0;

var baseFrame = context.getImageData(0, 0, window.innerWidth, window.innerHeight);

function drawStars() {
  for (var i = 0; i < stars; i++) {
    var star = starArray[i];
    context.beginPath();
    context.arc(star.x, star.y, star.radius, 0, 360);
    context.fillStyle = "hsla(" + star.hue + ", " + star.sat + "%, 92%, " + star.opacity + ")";
    context.fill();
  }
}

function updateStars() {
  for (var i = 0; i < stars; i++) {
    if (Math.random() > 0.99) {
      starArray[i].opacity = Math.random();
    }
  }
}

const button = document.getElementById("valentinesButton");

button.addEventListener("click", () => {
  if (button.textContent === "Click Me! ❤") {
    button.textContent = "loading...";
    fetch("send_mail.php")
      .then((response) => {
        if (response.ok) {
          button.textContent = "Check Your Email 🙃";
        } else {
          console.error("Failed to send email");
          button.textContent = "Error 😞";
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        button.textContent = "Error 😞";
      });
  }
});

function drawTextWithLineBreaks(lines, x, y, fontSize, lineHeight) {
  lines.forEach((line, index) => {
    context.fillText(line, x, y + index * (fontSize + lineHeight));
  });
}

function drawText() {
  var fontSize = Math.min(30, window.innerWidth / 24);
  var lineHeight = 8;

  context.font = fontSize + "px Comic Sans MS";
  context.textAlign = "center";

  // glow effect (peach/rose)
  context.shadowColor = THEME.glow;
  context.shadowBlur = THEME.glowBlur;
  context.shadowOffsetX = 0;
  context.shadowOffsetY = 0;

  if (frameNumber < 250) {
    context.fillStyle = themedFill(opacity);
    context.fillText("everyday day I cannot believe how lucky I am", canvas.width / 2, canvas.height / 2);
    opacity = opacity + 0.01;
  }

  if (frameNumber >= 250 && frameNumber < 500) {
    context.fillStyle = themedFill(opacity);
    context.fillText("everyday day I cannot believe how lucky I am", canvas.width / 2, canvas.height / 2);
    opacity = opacity - 0.01;
  }

  if (frameNumber == 500) opacity = 0;

  if (frameNumber > 500 && frameNumber < 750) {
    context.fillStyle = themedFill(opacity);
    if (window.innerWidth < 600) {
      drawTextWithLineBreaks(
        ["amongst trillions and trillions of stars,", "over billions of years"],
        canvas.width / 2,
        canvas.height / 2,
        fontSize,
        lineHeight
      );
    } else {
      context.fillText(
        "amongst trillions and trillions of stars, over billions of years",
        canvas.width / 2,
        canvas.height / 2
      );
    }
    opacity = opacity + 0.01;
  }

  if (frameNumber >= 750 && frameNumber < 1000) {
    context.fillStyle = themedFill(opacity);
    if (window.innerWidth < 600) {
      drawTextWithLineBreaks(
        ["amongst trillions and trillions of stars,", "over billions of years"],
        canvas.width / 2,
        canvas.height / 2,
        fontSize,
        lineHeight
      );
    } else {
      context.fillText(
        "amongst trillions and trillions of stars, over billions of years",
        canvas.width / 2,
        canvas.height / 2
      );
    }
    opacity = opacity - 0.01;
  }

  if (frameNumber == 1000) opacity = 0;

  if (frameNumber > 1000 && frameNumber < 1250) {
    context.fillStyle = themedFill(opacity);
    context.fillText("to be alive, and to get to spend this life with you", canvas.width / 2, canvas.height / 2);
    opacity = opacity + 0.01;
  }

  if (frameNumber >= 1250 && frameNumber < 1500) {
    context.fillStyle = themedFill(opacity);
    context.fillText("to be alive, and to get to spend this life with you", canvas.width / 2, canvas.height / 2);
    opacity = opacity - 0.01;
  }

  if (frameNumber == 1500) opacity = 0;

  if (frameNumber > 1500 && frameNumber < 1750) {
    context.fillStyle = themedFill(opacity);
    context.fillText("is so incredibly, unfathomably unlikely", canvas.width / 2, canvas.height / 2);
    opacity = opacity + 0.01;
  }

  if (frameNumber >= 1750 && frameNumber < 2000) {
    context.fillStyle = themedFill(opacity);
    context.fillText("is so incredibly, unfathomably unlikely", canvas.width / 2, canvas.height / 2);
    opacity = opacity - 0.01;
  }

  if (frameNumber == 2000) opacity = 0;

  if (frameNumber > 2000 && frameNumber < 2250) {
    context.fillStyle = themedFill(opacity);
    if (window.innerWidth < 600) {
      drawTextWithLineBreaks(
        ["and yet here I am to get the impossible", "chance to get to know you"],
        canvas.width / 2,
        canvas.height / 2,
        fontSize,
        lineHeight
      );
    } else {
      context.fillText(
        "and yet here I am to get the impossible chance to get to know you",
        canvas.width / 2,
        canvas.height / 2
      );
    }
    opacity = opacity + 0.01;
  }

  if (frameNumber >= 2250 && frameNumber < 2500) {
    context.fillStyle = themedFill(opacity);
    if (window.innerWidth < 600) {
      drawTextWithLineBreaks(
        ["and yet here I am to get the impossible", "chance to get to know you"],
        canvas.width / 2,
        canvas.height / 2,
        fontSize,
        lineHeight
      );
    } else {
      context.fillText(
        "and yet here I am to get the impossible chance to get to know you",
        canvas.width / 2,
        canvas.height / 2
      );
    }
    opacity = opacity - 0.01;
  }

  if (frameNumber == 2500) opacity = 0;

  // Final long message (stays on)
  if (frameNumber > 2500 && frameNumber < 99999) {
    context.fillStyle = themedFill(opacity);
    if (window.innerWidth < 600) {
      drawTextWithLineBreaks(
        ["I love you so much my babee my theeksh🧡, more than", "all the time and space in the universe can contain"],
        canvas.width / 2,
        canvas.height / 2,
        fontSize,
        lineHeight
      );
    } else {
      context.fillText(
        "I love you so much my babee my theeksh🧡, more than all the time and space in the universe can contain",
        canvas.width / 2,
        canvas.height / 2
      );
    }
    opacity = opacity + 0.01;
  }

  // Second line appears
  if (frameNumber >= 2750 && frameNumber < 99999) {
    context.fillStyle = themedFill(secondOpacity);
    if (window.innerWidth < 600) {
      drawTextWithLineBreaks(
        ["and I can't wait to spend all the time in", "the world to share that love with you!"],
        canvas.width / 2,
        canvas.height / 2 + 60,
        fontSize,
        lineHeight
      );
    } else {
      context.fillText(
        "and I can't wait to spend all the time in the world to share that love with you!",
        canvas.width / 2,
        canvas.height / 2 + 50
      );
    }
    secondOpacity = secondOpacity + 0.01;
  }

  // Ending: split into two sections + button under section 2
  if (frameNumber >= 3000 && frameNumber < 99999) {
    context.fillStyle = themedFill(thirdOpacity);

    const x = canvas.width / 2;

    // Start area for the ending text block
    let y = canvas.height / 2 + 110;

    // Section 1
    context.fillText("Happy Valentine's Day <3", x, y);

    // gap before section 2
    y += (fontSize + lineHeight) * 1.3;

    // Section 2 (responsive lines)
    let questionLines;
    if (window.innerWidth < 600) {
      questionLines = ["and, the important question -", "Will you be my valentine?"];
    } else {
      questionLines = ["and, the important question - Will you be my valentine?"];
    }

    drawTextWithLineBreaks(questionLines, x, y, fontSize, lineHeight);

    // place button below section 2
    const questionHeight = questionLines.length * (fontSize + lineHeight);
    const buttonY = y + questionHeight + fontSize * 0.9;

    button.style.display = "block";
    button.style.top = `${buttonY}px`;

    thirdOpacity = thirdOpacity + 0.01;
  }

  // Reset shadow effect
  context.shadowColor = "transparent";
  context.shadowBlur = 0;
  context.shadowOffsetX = 0;
  context.shadowOffsetY = 0;
}

function draw() {
  context.putImageData(baseFrame, 0, 0);
  drawStars();
  updateStars();
  drawText();

  if (frameNumber < 99999) frameNumber++;
  window.requestAnimationFrame(draw);
}

window.addEventListener("resize", function () {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  baseFrame = context.getImageData(0, 0, window.innerWidth, window.innerHeight);
});

window.requestAnimationFrame(draw);
