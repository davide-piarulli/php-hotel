<?php
$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

$option_parcheggio = $_GET['parcheggio'];
$option_voto = $_GET['voto'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Hotel</title>
</head>

<body>
  <div class="container my-5 ">
    <!-- FORM -->
    <form action="index.php" method="GET">
      <label for="select-parcheggio">Il parcheggio è presente?</label>
      <select name="parcheggio" id="select-parcheggio">
        <option value="default" selected>Seleziona..</option>
        <option value="si">Si</option>
        <option value="no">No</option>
      </select>

      <label for="select-voto">Voto dell'hotel:</label>
      <select name="voto" id="select-voto">
        <option value="default" selected>Seleziona..</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>

      <button type="submit" class="btn btn-primary ">Filtra Hotels</button>

    </form>
    <!-- /FORM -->
    <div class="row row-cols-5">

      <?php foreach ($hotels as $hotel) : ?>
        <?php
        if (isset($option_parcheggio)) {
          echo "parcheggio selezionato";
        } else {
          echo "parcheggio NON selezionato";
        }
        ?>
        <div class="col d-flex flex-wrap my-2 ">
          <div class="card" style="width: 18rem;">
            <h2><?php echo $hotel['name'] ?></h2>
            <ul>
              <li><?php echo $hotel['description'] ?></li>
              <li>Parcheggio: <?php echo $hotel['parking'] ? 'Si' : 'No' ?></li>
              <li>Voto: <?php echo $hotel['vote'] ?></li>
              <li>Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> Km</li>
            </ul>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>

</html>