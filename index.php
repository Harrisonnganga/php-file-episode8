<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" rel= "crossorigin">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php
      $Movies = [
        ['Title' => 'Titanic', 'releaseYear' => 1997, 'streaming' => 'netflix'],
        ['Title' => 'The Silence of the Lambs', 'releaseYear' => 1991, 'streaming' => 'netflix'],
        ['Title' => 'Pulp Fiction', 'releaseYear' => 1991, 'streaming' => 'netflix'],
        ['Title' => 'The Matrix', 'releaseYear' => 1999, 'streaming' => 'netflix'],
        ['Title' => 'Jurassic Park', 'releaseYear' => 1993, 'streaming' => 'netflix'],                                                  
        ['Title' => 'Forrest Gump', 'releaseYear' => 1994, 'streaming' => 'netflix'],                                                  
                  ]; 
     {             

      function filterByreleaseYear($Movies, $Date)
        {
    

        $releaseYears = []; {

         foreach ($Movies as $Movie) {
            if ($Movie['releaseYear'] >= $Date);}
                $releaseYears[] = $Movie;  
            }
        }

        return $releaseYears;
      }
    ?>

    <?php foreach(filterByYear($Movies, 2010) as $Movie) : ?>
        <ul>

           <li style="font-family: 'Merriweather', serif;
font-family: 'Open Sans', sans-serif; "><?= $Movie['Title']." release in ".$Movie['releaseYear']." published on ".$Movie['streaming']?></li>
        </ul>

    <?php endforeach; ?>

    
</body>
</html>