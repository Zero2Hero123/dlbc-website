<?php

    function getWeekSchedule(){

        $sundayService;
        $tuesdayBibleStudy;
        $revivalHour;

        $timeCheck = time();        
             
        for($t = 0; $t < 7; $t++){

            $checkDate = getdate($timeCheck);

            switch($checkDate['wday']) {

                case 0:

                    $sundayService = $timeCheck;

                    break;
                case 2:
                   $tuesdayBibleStudy = $timeCheck;
                case 4:
                    $revivalHour = $timeCheck;
                


            }

            $timeCheck += 86400;

        }

        return array(
            array('title'=>'Sunday Worship Service','time'=>$sundayService),
            array('title'=>'Tuesday Bible Study','time'=>$tuesdayBibleStudy),
            array('title'=>'Thursday Revival Hour','time'=>$revivalHour)
        );

    }

?>