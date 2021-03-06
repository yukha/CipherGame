﻿<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
  <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Šifrovačka ŠvP Štúrovo</title>
    <meta name="description" content="Šifrovačka ŠvP Štúrovo" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous" />

    <link href="css/signin.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
  <body class="text-center">
    <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
    <form id="login" class="form-signin" onsubmit="signIn(); return false">
      <h1 class="h3 mb-3 font-weight-normal">Vítejte na šifrovačce :)</h1>
      <label class="sr-only" for="teamcode">Kod týmu</label>
      <input
        id="teamcode"
        class="form-control"
        type="text"
        placeholder="Kod týmu"
        maxlength="3"
        pattern="[A-Za-z]{3}"
        title="Třípísmenný kod týmu"
        required=""
        autofocus=""
      />
      <br />
      <input
        class="btn btn-lg btn-primary btn-block"
        type="submit"
        value="Přihlásit"
      />
      <br />
      <div class="msg"></div>
    </form>
    <br />

    <form id="place" class="form-signin" onsubmit="checkPlace(); return false">
      <h1 class="h3 mb-3 font-weight-normal teamname">Přihlášen tým</h1>
      <label class="sr-only" for="placecode">Kod stanoviště</label>
      <input
        id="placecode"
        class="form-control"
        type="text"
        placeholder="Kod stanoviště"
        maxlength="10"
        pattern="[A-Za-z]{1-10}"
        title="Kod stanoviště obsahuje pouze písmena"
        required=""
        autofocus=""
      />
      <br />
      <input
        class="btn btn-lg btn-primary btn-block"
        type="submit"
        value="Přejít na stanoviště"
      />
      <br />
      <div class="msg"></div>
    </form>

    <form
      id="result"
      class="form-signin"
      onsubmit="checkResult(); return false"
    >
      <h1 class="h3 mb-3 font-weight-normal teamname">Přihlášen tým</h1>
      <label class="sr-only" for="cipher">Šifra</label>
      <input
        id="cipher"
        class="form-control"
        type="text"
        placeholder="Šifra"
        maxlength="10"
        pattern="[A-Za-z]{1-10}"
        title="Šifra obsahuje pouze písmena"
        required=""
        autofocus=""
      />
      <br />
      <input
        class="btn btn-lg btn-primary btn-block"
        type="submit"
        value="Ověřit"
      />
      <br />
      <div class="msg"></div>
    </form>

    <script src="js/main.js?random=<?php echo uniqid(); ?>" async defer></script>
  </body>
</html>
