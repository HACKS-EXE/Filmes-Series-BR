<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />

    <title>Zaquiles</title>

    <style>
      * {
        user-select: none;
        -ms-user-select: none;
        cursor: default;
        box-sizing: border-box;
      }

      html,
      body {
        -ms-overflow-style: none;

        margin: 0;
        padding: 0;

        font-family: "Segoe UI Light", "Segoe UI", "Lucida Sans", Arial,
          sans-serif;
        font-style: normal;
        font-weight: lighter;

        display: flex;
        min-height: 100vh;
        flex-direction: column;
        background: black;
      }

      body {
        background: transparent;
      }

      .background-container {
        inset: 0;
        position: fixed;
        z-index: -1;
      }
      .background-container:before {
        background: #000;
        background: url(./CDGBR.png);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        content: "";
        height: 100%;
        opacity: 0.25;
        position: fixed;
        top: 0;
        width: 100%;
      }

      body {
        height: 100%;
        width: 100%;
      }

      .content {
        width: 100%;
        text-align: center;
        padding-top: 30px;
      }

      div.button {
        margin: 5px 10px;
        display: inline-block;
        border: 1px solid #44413f;
        color: rgba(244, 240, 235, 0.776);
        cursor: pointer;
        background-color: rgb(42, 40, 39);
        width: auto;
        text-align: center;
        padding: 0.5rem;
        border-radius: 0.5rem;
        transition: all 0.1s linear;
        font-size: 1rem;
        font-weight: normal;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen,
          Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
      }

      div.button:hover {
        background-color: rgb(48, 45, 44);
        border: 1px solid #4a4745;
      }

      h1,
      h1 * {
        font-size: 3rem;
        font-weight: bold;
        color: white;

        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen,
          Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
      }
    </style>
  </head>

  <body>
    <div class="background-container"></div>

    <div class="content">
      <h1>
        <span style="color: #f97316">C</span
        ><span style="color: #ec511c">D</span
        ><span style="color: #e53f21">G</span
        ><span style="color: #e23623">B</span
        ><span style="color: #dc2626">R</span>
      </h1>
      <div class="button" onclick="window.external.runGame()">Inicia jogo</div>
      <div class="button" onclick="window.external.openUrl('discord://discordapp.com/invite/hFT4eJfQ3u/')">
        Entrar no Discord Oficial: CDGBR
      </div>
      <div class="button" onclick="window.external.openUrl('https://zaquiles.servehttp.com')">
        Site Oficial
      </div>
    </div>
  </body>
</html>
