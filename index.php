<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Meowsint</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Courier New', monospace;
    }

    body {
      background-color: #0d0d0d;
      color: #ffffff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
      text-align: center;
    }

    .logo {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background-color: #1a1a1a;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #4caf50;
      overflow: hidden;
    }

    .logo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h1 {
      font-size: 2.5em;
      color: #4caf50;
      margin-bottom: 10px;
      text-shadow: 0 0 20px #4caf50, 0 0 40px #0f0, 0 0 60px #0f0;
      position: relative;
      animation: flicker 2s infinite alternate;
    }

    @keyframes flicker {
      0% { opacity: 1; text-shadow: 0 0 20px #4caf50, 0 0 40px #0f0; }
      10% { opacity: 0.8; text-shadow: 0 0 30px #4caf50; }
      20% { opacity: 1; text-shadow: 0 0 60px #0f0, 0 0 20px #4caf50; }
      50% { opacity: 0.9; text-shadow: 0 0 40px #4caf50, 0 0 60px #0f0; }
      70% { opacity: 1; text-shadow: 0 0 80px #0f0; }
      100% { opacity: 0.95; text-shadow: 0 0 40px #4caf50, 0 0 100px #0f0; }
    }

    .bio {
      font-size: 1em;
      max-width: 500px;
      line-height: 1.6;
      margin-bottom: 30px;
      padding: 0 10px;
      color: #cfcfcf;
    }

 .socials {
  display: flex;
  flex-direction: row;
  justify-content: center;
  gap: 25px;
  margin-top: 20px;
}

.socials a {
  width: 45px;
  height: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #1a1a1a;
  border-radius: 50%;
  box-shadow: 0 0 10px #4caf50, 0 0 20px #0f0;
  transition: all 0.3s ease-in-out;
  border: 1px solid #4caf50;
}

.socials a img {
  width: 24px;
  height: 24px;
  filter: brightness(1.5);
}

.socials a:hover {
  transform: scale(1.2);
  box-shadow: 0 0 20px #00ff00, 0 0 40px #4caf50;
  background-color: #262626;
}
  </style>
</head>
<body>
  <div class="logo">
    <img src="meowsint.png" alt="Logo"> -->
  </div>

  <h1>MEOWSINT</h1>

  <div class="bio">
    A cybersecurity enthusiast and bug bounty hunter. <br>
    I'm passionate about web app security, API testing, and ethical hacking.
  </div>

  <div class="socials">
    <a href="https://www.linkedin.com/in/meowsint" target="_blank" title="LinkedIn">
      <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" width="30" height="30">
    </a>
    <a href="https://github.com/meowsint62" target="_blank" title="GitHub">
      <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/github.svg" width="30" height="30">
    </a>
    <a href="https://twitter.com/meowsint" target="_blank" title="X / Twitter">
      <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/x.svg" width="30" height="30">
    </a>
  </div>
</body>
</html>