<?
switch($pg){
  case "home":
    $img = "beet";
    break;
  case "safe":
    $img = "turnip";
    break;
  case "vendors":
    $img = "carrot";
    break;
  case "venue":
    $img = "beet2";
    break;
  case "more":
    $img = "mushroom";
    break;
  default:
    $img = "turnip";
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vegan events in Kirkcaldy and around Fife</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/vgn.css">
</head>
<body>
  <header>
    <h1><a href="/"><img src="img/<?=$img?>.png" alt="VegFest logo is weird happy dopy vegetables" /></a></h1>
  </header>
  <main>
    <div class="line">
      <h2>19th January 2025</h2>
      <p>11&mdash;4</p>
    </div>
    <div class="line">
      <h2>Kirkcaldy</h2>
      <p><a href="/venue">The Old Kirk</a>, Kirk Wynd</p>
    </div>
