<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sorting <?= esc($title) ?></title>

    <style>
      .logo {
        font-size: xx-large;
        font-weight: bold;
      }
      .logo a {
        color: #000;
        text-decoration: none;
      }
    </style>
  </head>
  <body class="container">

  <div class="row justify-content-between align-items-center p-4">
    <div class="col-auto">
    <span class="logo"><a href="/sorts">Sorting</a></span>
    </div>
    <div class="col-auto">
      <a href="/sorts/bubble" class="btn btn-link">Bubble</a>
      <a href="/sorts/selection" class="btn btn-link">Selection</a>
    </div>
  </div>