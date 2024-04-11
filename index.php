<?php 
  const API_URL = "https://whenisthenextmcufilm.com/api";

  # Inicialize a new cURL session; ch = cURL handle
  $ch = curl_init(API_URL);

  // Indicate that we need to receive the result of the request and not to show it
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  /*Execute the request and save the result */
  $result = curl_exec($ch);

  // Alternativa: file_get_contents solo para GET de una api
  // $result = file_get_contents(API_URL)
  $data = json_decode($result, true);

  curl_close($ch); 
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Proxima peli de Marvel">
  <title>Proximas Peli de Marvel</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>
</head>

<main>
  <pre style="font-size: 12px;">
    <?php var_dump($data) ?>
  </pre>
  <section>
    <h1>La Proxima Pelicula De Marvel</h1>
    <img src="<?= $data["poster_url"]; ?>" alt="Poster de <?= $data["title"]; ?>" width="150">
  </section>
  <hgroup>
    <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h3>
    <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
    <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>