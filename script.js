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
  if (button.textContent === "Yes, or No other option..❤") {
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

/**
 * Draw multi-line text centered at (x, y) where y is the baseline of line 1.
 * Uses the CURRENT context.font, context.textAlign, shadow, fillStyle etc.
 */
function drawLines(lines, x, y, fontSize, lineHeight) {
  lines.forEach((line, index) => {
    context.fillText(line, x, y + index * (fontSize + lineHeight));
  });
}

/**
 * Convenience: choose desktop vs mobile lines.
 */
function pickLines(isMobile, mobileLines, desktopLines) {
  return isMobile ? mobileLines : desktopLines;
}

function drawText() {
  // readability
  var fontSize = Math.min(36, window.innerWidth / 20);
  var lineHeight = Math.round(fontSize * 0.32);
  const isMobile = window.innerWidth < 750;

  // ONE font everywhere
  context.font = `${fontSize}px "Cormorant Garamond", serif`;
  context.textAlign = "center";
  context.textBaseline = "alphabetic";

  // glow effect (peach/rose)
  context.shadowColor = THEME.glow;
  context.shadowBlur = THEME.glowBlur;
  context.shadowOffsetX = 0;
  context.shadowOffsetY = 0;

  const x = canvas.width / 2;
  const y = canvas.height / 2;

  // Helper: fade in/out single block of lines
  function block(lines, startIn, startOut, endOut, alphaVarName) {
    // We’ll just use global `opacity` like you did; keeping this simple.
  }

  // 1
  if (frameNumber < 250) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["everyday I cannot believe", "how lucky I am"],
        ["everyday I cannot believe how lucky I am"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity += 0.01;
  }
  if (frameNumber >= 250 && frameNumber < 500) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["everyday I cannot believe", "how lucky I am"],
        ["everyday I cannot believe how lucky I am"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity -= 0.01;
  }
  if (frameNumber == 500) opacity = 0;

  // 2
  if (frameNumber > 500 && frameNumber < 750) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["amongst trillions and trillions of stars,", "over billions of years"],
        ["amongst trillions and trillions of stars, over billions of years"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity += 0.01;
  }
  if (frameNumber >= 750 && frameNumber < 1000) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["amongst trillions and trillions of stars,", "over billions of years"],
        ["amongst trillions and trillions of stars, over billions of years"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity -= 0.01;
  }
  if (frameNumber == 1000) opacity = 0;

  // 3
  if (frameNumber > 1000 && frameNumber < 1250) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["to be alive,", "and to get to spend this life with you"],
        ["to be alive, and to get to spend this life with you"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity += 0.01;
  }
  if (frameNumber >= 1250 && frameNumber < 1500) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["to be alive,", "and to get to spend this life with you"],
        ["to be alive, and to get to spend this life with you"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity -= 0.01;
  }
  if (frameNumber == 1500) opacity = 0;

  // 4
  if (frameNumber > 1500 && frameNumber < 1750) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["is so incredibly,", "unfathomably unlikely"],
        ["is so incredibly, unfathomably unlikely"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity += 0.01;
  }
  if (frameNumber >= 1750 && frameNumber < 2000) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["is so incredibly,", "unfathomably unlikely"],
        ["is so incredibly, unfathomably unlikely"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity -= 0.01;
  }
  if (frameNumber == 2000) opacity = 0;

  // 5
  if (frameNumber > 2000 && frameNumber < 2250) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["and yet here I am to get the impossible", "chance to get to know you"],
        ["and yet here I am to get the impossible chance to get to know you"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity += 0.01;
  }
  if (frameNumber >= 2250 && frameNumber < 2500) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      pickLines(
        isMobile,
        ["and yet here I am to get the impossible", "chance to get to know you"],
        ["and yet here I am to get the impossible chance to get to know you"]
      ),
      x,
      y,
      fontSize,
      lineHeight
    );
    opacity -= 0.01;
  }
  if (frameNumber == 2500) opacity = 0;

  // Final long message (stays on) — consistent line breaks everywhere
  if (frameNumber > 2500 && frameNumber < 99999) {
    context.fillStyle = themedFill(opacity);

    drawLines(
      [
        "I love you so much my theeksh🧡",
        ".."
      ],
      x,
      y,
      fontSize,
      lineHeight
    );

    opacity += 0.01;
  }

  // Second block appears (consistent breaks desktop/mobile)
  if (frameNumber >= 2750 && frameNumber < 99999) {
    context.fillStyle = themedFill(secondOpacity);

    const secondLines = pickLines(
      isMobile,
      ["and I can't wait to spend all the time in", "the world to share that love with you!"],
      ["and I can't wait to spend all the time in the world to share that love with you!"]
    );

    drawLines(secondLines, x, y + Math.round(fontSize * 1.9), fontSize, lineHeight);

    secondOpacity += 0.01;
  }

  // Ending: keep SAME font (Cormorant Garamond) + consistent line breaks
  if (frameNumber >= 3000 && frameNumber < 99999) {
    context.fillStyle = themedFill(thirdOpacity);

    const startY = y + Math.round(fontSize * 3.6);

    const end1 = ["Happy Valentine's Day <3"];

    const end2 = pickLines(
      isMobile,
      ["and, the important question -", "Will you be my valentine?"],
      ["and, the important question -", "Will you be my valentine?"] // keep the break even on desktop for consistency
    );

    // Draw section 1
    drawLines(end1, x, startY, fontSize, lineHeight);

    // gap then section 2
    const section2Y = startY + (fontSize + lineHeight) + Math.round(fontSize * 0.9);
    drawLines(end2, x, section2Y, fontSize, lineHeight);

    // Button under section 2 (works for 1 or 2 lines)
    const questionHeight = end2.length * (fontSize + lineHeight);
    const buttonY = section2Y + questionHeight + Math.round(fontSize * 0.7);

    button.style.display = "block";
    button.style.top = `${buttonY}px`;

    thirdOpacity += 0.01;
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
