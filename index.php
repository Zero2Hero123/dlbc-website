<!DOCTYPE html>

<?php include './utils/events_util.php' ?>

<html>
  <head>
    <title><?php echo "DLBC Baltimore | Home" ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php include './assets/templates/global_links.html' ?>
    
</head>

  <body>

    <?php include './assets/templates/navbar.html' ?>

    <div class='web-grid'>

      <main>

        <section class="weekly">

        
          <?php 
            $schedule = getWeekSchedule(); 

            foreach($schedule as $event)

              // if(date('d',$event['time']) == date('d')){
              //   $status = "Happening Today";
              // }
              
              if(date('d',$event['time']) == date('d')){
                echo('<div class="shadow">' . '<p class="event_status" >Happening Today</p>' .
                '<h3 class="event_date">' . date(' M d ',$event['time']) . '</h3>
                <p class="event_desc lead">' . $event['title'] . '</p>
                </div>');
              } else {
                echo('<div class="shadow">' . '<p class="event_status" >Upcoming</p>' .
                '<h3 class="event_date">' . date(' M d ',$event['time']) . '</h3>
                <p class="event_desc lead">' . $event['title'] . '</p>
                </div>');
              }

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