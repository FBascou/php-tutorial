<?php
  define ('GLOBAL_LOGO_URL', "https://url...");

  const TITULO_CONSTANTE = "Titulo";

  $name = 'Felipe';
  $isDev = true;
  $age = 31;
  $concatenatedWord = 'Hello' . " " . 'World';
  $output = "$concatenatedWord! Hello \"$name\", you are $age";
  $output .= ", concatenate an additional sentence.";
  $isOld = $age > 31;
  $isNotDev = !$isDev;
  $isNotDevAndIsOld = !$isDev && $age > 30;
  $outputAge = $isOld ? "Bro you're old" : "You're not there yet";
  $outputAgeMatch = match ($age) {
    0, 1, 2 => "Eres un bebe, $name",
    3, 4, 5 => "Eres un nino, $name",
    32 => "Sos re viejo, $name",
    default => "Tenemos la misma edad, $name"
  };

  $outputAgeMatchTrue = match (true) {
    $age < 2   => "Eres un bebe, $name",
    $age < 10  => "Eres un nino, $name",
    $age < 18  => "Eres un adolecente, $name",
    $age < 31  => "Eres un adulto, $name",
    $age == 31 => "Vamooo somos iguales, $name",
    $age > 31  => "Sos re viejo, $name",
    default    => "Tenemos la misma edad, $name"
  };

  if ($isOld) {
    echo "<h3>Eres viejo.</h3>";
  } else if ($age == 31) {
      echo "<h3>Tenemos la misma edad.</h3>";
  } else {
      echo "<h3>Eres joven.</h3>";
  }

  var_dump($name);
  var_dump($isDev);
  var_dump($age);
  echo gettype($name);
  echo is_string($name);

  $bestLanguagesOne = array('PHP', "Python");
  $bestLanguagesTwo = ['PHP', "Python", "Javascript", "Ruby", "Go"];
  $bestLanguagesTwo[3] = "Java";
  $bestLanguagesTwo[] = "Typescript";

  $person = [
    "name" => "Felipe",
    "age" => 31,
    "isDev" => true, 
    "languages" => ['PHP', "Python", "Javascript", "Ruby", "Go"]
  ];
  $person["name"] = "Miguel";
  $person["languages"][] = "Java";


?>

<h1>
  <?= TITULO_CONSTANTE ?>
</h1>

<h2>
  <?= $output; ?>
</h2>

<h4 style="color: red;">
  <?= $outputAgeMatch ?>
</h4>

<h4 style="color: purple;">
  <?= $outputAgeMatchTrue ?>
</h4>

<h5>
  The best language is: 
  <?= $bestLanguagesTwo[5] ?>
</h5>

<ul>
  <?php foreach ($bestLanguagesTwo as $key => $language) : ?>
    <li><?= $key . " " . $language ?></li>
  <?php endforeach; ?>
</ul>


<?php if ($isOld) : ?>
  <h3>Eres viejo.</h3>;
<?php elseif ($age == 31) : ?>
  <h3>Tenemos la misma edad.</h3>
<?php else : ?>
  <h3>Eres joven.</h3>
<?php endif; ?>

<img src="<?= GLOBAL_LOGO_URL ?>" alt="PHP LOGO" width="200">

<?= $outputAge ?>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>