<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="./calendar.css" />    
    </head>
    <body>
    <?php     
        
        class CalendarEventsRepo
        {
             public function GetEvents()
             {
                $events = array();
                
                $events[] = $this->GetNewEvent('5/15/2012', "Weekly Auction", "./calendar_events/may_event.html");
                $events[] = $this->GetNewEvent('5/22/2012', "Weekly Auction", "./calendar_events/may_event.html");
                $events[] = $this->GetNewEvent('5/24/2012', "Weekly Auction", "./calendar_events/may_event.html");
                $events[] = $this->GetNewEvent('6/2/2012', "Weekly Auction", "./calendar_events/june_event.html");
                $events[] = $this->GetNewEvent('6/15/2012', "Weekly Auction", "./calendar_events/june_event.html");
                $events[] = $this->GetNewEvent('6/15/2012', "Weekly Auction", "./calendar_events/june_event.html");
                $events[] = $this->GetNewEvent('6/22/2012', "Weekly Auction", "./calendar_events/june_event.html");
                $events[] = $this->GetNewEvent('6/23/2012', "Weekly Auction", "./calendar_events/june_event.html");
                $events[] = $this->GetNewEvent('6/30/2012', "Weekly Auction", "./calendar_events/june_event.html");
                $events[] = $this->GetNewEvent('7/5/2012', "Weekly Auction", "./calendar_events/junly_event.html");
                $events[] = $this->GetNewEvent('7/15/2012', "Weekly Auction", "./calendar_events/july_event.html");
                $events[] = $this->GetNewEvent('7/15/2012', "Weekly Auction", "./calendar_events/july_event.html");
       
                return $events;
             }
             
             public function GetNewEvent($date, $description, $linkToDetails)
             {
                 $event = new CalendarEvent();
                 
                 $event->EventDate = $date;
                 $event->Description = $description;
                 $event->LinkToDetails = $linkToDetails;
                 
                 return $event;
                 
             }
        }
        
        class CalendarEvent{
             public $EventDate;
             public $Description = "";
             public $LinkToDetails = "";
        }
        
        function getDayAsNumeric($weekDay)
        {
            switch($weekDay)
            {
                case "Sun": return 1; break;
                case "Mon": return 2; break;
                case "Tue": return 3; break;
                case "Wed": return 4; break;
                case "Thu": return 5; break;
                case "Fri": return 6; break;
                case "Sat": return 7; break;
            }
            
            return 1;
        }
        
        function writeEvent($events, $date)
        {      
               foreach($events as $event)
               {
                    if($event->EventDate == $date)
                    {
                        echo "\r\n         <li><a href='{$event->LinkToDetails}'>{$event->Description}</a></li>\r\n";
                    }
               }
        }
        
        ?>
        
        <?php
            
            $currentMonth = "6";
            $currentYear = "2012";
            $repository = new CalendarEventsRepo();
            $events = $repository->GetEvents();
            $totalEventsCount = count($events);
            $month = "June";
            $year = 2012;
            $dayofweek = date("w");
            $firstWeekDayOfMonth = date("D", strtotime(date('m').'/01/'.date('Y').' 00:00:00'));
            $lastWeekDayOfMonth = date("D", strtotime('-1 second',strtotime('+1 month',strtotime(date('m').'/01/'.date('Y').' 00:00:00'))));
            $currentDayOfMonth = 0;
            $firstWeekDayAsNumberic = getDayAsNumeric($firstWeekDayOfMonth);
            $daysInMonth = 31;
            
            echo "<h1>PDM Live Auction Calendar</h1>";
            echo "<h3>" . $month . " " . $year . "</h3>";
            
            echo "\r\n<table class='.calendar'>\r\n";
            
            $daysOfWeek =  array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
            
            foreach($daysOfWeek as $dayOfWeek)
            {
                   echo "   <th>" . $dayOfWeek . "</th>\r\n";
            }
            
            for($weekIndex = 1; $weekIndex < 7; $weekIndex++)
            {
                echo( "   <tr>\r\n");
                for($dayIndex = 1; $dayIndex < 8; $dayIndex++)
                {
                     if($weekIndex > 1 || $currentDayOfMonth > 0 || ($weekIndex === 1 && $dayIndex === $firstWeekDayAsNumberic))
                         $currentDayOfMonth++;
                     
                     if($currentDayOfMonth > 0 && $currentDayOfMonth < $daysInMonth)
                     {    echo("      <td>\r\n");
                          echo("            <div class='month-day'>" . $currentDayOfMonth);
                          echo("                 <div class='month-day-details'>");
                          echo("                      <ul>\r\n");
                          writeEvent($events, $currentMonth . "/" . $currentDayOfMonth . "/" . $currentYear);  
                          echo("\r\n                  </ul>\r\n");
                          echo("\r\n             </div>\r\n");
                          echo "      </td>\r\n";
                           
                     }
                     else
                     {
                         echo("       <td> </td>\r\n");
                     }
                }
                
                echo( "   </tr>\r\n");

            }
            
            echo "</table>\r\n";
        ?>
    </body>
</html>
