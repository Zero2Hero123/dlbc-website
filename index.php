<!DOCTYPE html>

<?php include './utils/events.php' ?>

<html>
  <head>
    <title><?php echo "DLBC Baltimore | Home" ?></title>

    <meta charset="utf-8">
    <meta name="viewport" 


content="width=device-width,initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="./assets/styles/nav.css" rel='stylesheet'>
    <link href="./assets/styles/footer.css" rel='stylesheet'>
    
    <link href='./assets/styles/main.css' rel='stylesheet'>
    <link href='./assets/styles/home.css' rel='stylesheet'>
    
</head>

  <body>

    <?php include './assets/templates/navbar.html' ?>

    <div class='web-grid'>

      <main> 
      
        <?php 
          $schedule = getWeekSchedule(); 
          foreach($schedule as $e){
            echo $e['title'] . date(' M d ',$e['time']) . ' | ';
          }
        ?>

        <section class="weekly">

          <?php 

            $eventStatus;
            foreach($schedule as $event)

              // $eventStatus = "Upcoming";

              // // if(date('d',$event['time']) === date('d')){
              // //   $eventStatus = "Happening Today";
              // // }

              echo('<div class="shadow">' .
              '<h3 class="event_date">' . date(' M d ',$event['time']) . '</h2>
              <p class="event_desc lead">' . $event['title'] . '</p>
              </div>');

          ?>

          <!-- <div class='shadow' >
            <h3 class="event_date"><?php echo date("M d") ?></h2>
            <p class="event_desc lead">Sunday Service</p>
          </div> -->
        </section>

      </main>

      <footer>
        <?php include './assets/templates/footer.html' ?>
      </footer>
      
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
      console.log('hello');
    </script>
  </body>

</html>