// ===== Canvas setup =====
const canvas = document.getElementById("starfield");
const context = canvas.getContext("2d");

function resizeCanvas() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);

// ===== Stars =====
const stars = 500;
const colorrange = [8, 18, 35];
let starArray = [];

const THEME = {
  text: { r: 255, g: 214, b: 184 },
  glow: "rgba(255, 170, 150, 0.95)",
};

const FONTS = {
  body: `"Cormorant Garamond", serif`,
  heading: `"Great Vibes", cursive`,
};

function themedFill(alpha) {
  return `rgba(${THEME.text.r}, ${THEME.text.g}, ${THEME.text.b}, ${alpha})`;
}

function getRandom(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function generateStars() {
  starArray = [];
  for (let i = 0; i < stars; i++) {
    starArray.push({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      radius: Math.random() * 1.2,
      hue: colorrange[getRandom(0, colorrange.length - 1)],
      sat: getRandom(45, 95),
      opacity: Math.random(),
    });
  }
}
generateStars();
window.addEventListener("resize", generateStars);

function drawStars() {
  starArray.forEach(star => {
    context.beginPath();
    context.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
    context.fillStyle = `hsla(${star.hue}, ${star.sat}%, 92%, ${star.opacity})`;
    context.fill();
  });
}

function updateStars() {
  starArray.forEach(star => {
    if (Math.random() > 0.99) star.opacity = Math.random();
  });
}

// ===== Button =====
const button = document.getElementById("valentinesButton");

button.addEventListener("click", () => {
  if (button.textContent === "Click Me! ❤") {
    button.textContent = "loading...";
    fetch("send_mail.php")
      .then(res => button.textContent = res.ok ? "Check Your Email 🙃" : "Error 😞")
      .catch(() => button.textContent = "Error 😞");
  }
});

// ===== Text helper =====
function drawLines(lines, x, y, fontSize, lineHeight) {
  lines.forEach((line, i) => {
    context.fillText(line, x, y + i * (fontSize + lineHeight));
  });
}

// ===== Animation =====
let frameNumber = 0;
let opacity = 0;
let secondOpacity = 0;
let thirdOpacity = 0;

function drawText() {
  const fontSize = Math.min(36, window.innerWidth / 20);
  const lineHeight = Math.round(fontSize * 0.34);
  const isMobile = window.innerWidth < 800;

  context.textAlign = "center";
  context.shadowColor = THEME.glow;
  context.shadowBlur = Math.round(fontSize * 0.45);

  context.font = `${fontSize}px ${FONTS.body}`;

  const cx = canvas.width / 2;
  const cy = canvas.height / 2;

  const fade = v => Math.min(Math.max(v, 0), 1);

  // --- Sequence ---
  const show = (text, start, end) => {
    if (frameNumber >= start && frameNumber < end) {
      context.fillStyle = themedFill(fade(opacity));
      context.fillText(text, cx, cy);
    }
  };

  if (frameNumber < 250) opacity += 0.01;
  if (frameNumber >= 250 && frameNumber < 500) opacity -= 0.01;

  show("everyday day I cannot believe how lucky I am", 0, 500);

  if (frameNumber === 500) opacity = 0;

  if (frameNumber > 500 && frameNumber < 1000) {
    context.fillStyle = themedFill(opacity);
    const lines = isMobile
      ? ["amongst trillions and trillions of stars,", "over billions of years"]
      : ["amongst trillions and trillions of stars, over billions of years"];
    drawLines(lines, cx, cy, fontSize, lineHeight);
    opacity += frameNumber < 750 ? 0.01 : -0.01;
  }

  if (frameNumber === 1000) opacity = 0;

  if (frameNumber > 1000 && frameNumber < 1500) {
    context.fillStyle = themedFill(opacity);
    context.fillText("to be alive, and to get to spend this life with you", cx, cy);
    opacity += frameNumber < 1250 ? 0.01 : -0.01;
  }

  if (frameNumber === 1500) opacity = 0;

  if (frameNumber > 1500 && frameNumber < 2000) {
    context.fillStyle = themedFill(opacity);
    context.fillText("is so incredibly, unfathomably unlikely", cx, cy);
    opacity += frameNumber < 1750 ? 0.01 : -0.01;
  }

  if (frameNumber === 2000) opacity = 0;

  if (frameNumber > 2000 && frameNumber < 2500) {
    context.fillStyle = themedFill(opacity);
    const lines = isMobile
      ? ["and yet here I am to get the impossible", "chance to get to know you"]
      : ["and yet here I am to get the impossible chance to get to know you"];
    drawLines(lines, cx, cy, fontSize, lineHeight);
    opacity += frameNumber < 2250 ? 0.01 : -0.01;
  }

  if (frameNumber === 2500) opacity = 0;

  if (frameNumber > 2500) {
    context.fillStyle = themedFill(opacity);
    drawLines(
      [
        "I love you so much my babee my theeksh🧡, more than",
        "all the time and space in the universe can contain",
      ],
      cx,
      cy,
      fontSize,
      lineHeight
    );
    opacity += 0.01;
  }

  if (frameNumber >= 2750) {
    context.fillStyle = themedFill(secondOpacity);
    const y2 = cy + Math.round(fontSize * 2.3);
    if (isMobile) {
      drawLines(
        ["and I can't wait to spend all the time in", "the world to share that love with you!"],
        cx,
        y2,
        fontSize,
        lineHeight
      );
    } else {
      context.fillText(
        "and I can't wait to spend all the time in the world to share that love with you!",
        cx,
        y2
      );
    }
    secondOpacity += 0.01;
  }

  if (frameNumber >= 3000) {
    context.fillStyle = themedFill(thirdOpacity);

    let y = cy + Math.round(fontSize * 4.3);

    context.font = `${Math.round(fontSize * 1.55)}px ${FONTS.heading}`;
    context.fillText("Happy Valentine's Day <3", cx, y);

    y += Math.round((fontSize + lineHeight) * 1.6);

    context.font = `${Math.round(fontSize * 1.25)}px ${FONTS.heading}`;
    const q = isMobile
      ? ["and, the important question -", "Will you be my valentine?"]
      : ["and, the important question - Will you be my valentine?"];

    q.forEach((line, i) => {
      context.fillText(line, cx, y + i * (Math.round(fontSize * 1.05) + lineHeight));
    });

    const buttonY = y + q.length * (Math.round(fontSize * 1.05) + lineHeight) + Math.round(fontSize * 1.4);
    button.style.display = "block";
    button.style.top = `${buttonY}px`;

    thirdOpacity += 0.01;

    context.font = `${fontSize}px ${FONTS.body}`;
  }

  context.shadowBlur = 0;
}

// ===== Main loop =====
function draw() {
  context.clearRect(0, 0, canvas.width, canvas.height);
  drawStars();
  updateStars();
  drawText();
  frameNumber++;
  requestAnimationFrame(draw);
}

draw();
