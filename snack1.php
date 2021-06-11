<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  
  <ul>
    <?php foreach ($matches as $match) { ?>

      <li>
        <?php echo $match['team1'] ?> - <?php echo $match['team2'] ?> | <?php echo $match['point_team_1'] ?>-<?php echo $match['point_team_2'] ?>
      </li>

    <?php } ?>
  </ul> 

</body>
</html>