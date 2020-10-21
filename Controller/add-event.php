<?php
if (isset($_POST['form-add-event'])){    

    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    // Clean and Extract Variables
      $eventDate = trim(htmlentities($POST['eventDate']));
      $eventTime = trim(htmlentities($POST['eventTime']));
      $eventLocation = trim(htmlentities($POST['eventLocation']));
      $eventTitle = trim(htmlentities($POST['eventTitle']));
      $eventDescription = trim(htmlentities($POST['eventDescription']));
      $eventUserPhone = trim(htmlentities($POST['eventUserPhone']));
      $eventUserEmail = trim(htmlentities($POST['eventUserEmail']));
    // Clean and Extract Variables
    
    // Set and display event information
        echo"
            <script>
                // Set localStorage
                    localStorage.setItem('eventDate', '{$eventDate}');
                    localStorage.setItem('eventTime', '{$eventTime}');
                    localStorage.setItem('eventLocation', '{$eventLocation}');
                    localStorage.setItem('eventTitle', '{$eventTitle}');
                    localStorage.setItem('eventDescription', '{$eventDescription}');
                    localStorage.setItem('eventUserPhone', '{$eventUserPhone}');
                    localStorage.setItem('eventUserEmail', '{$eventUserEmail}');
                // Set localStorage

                // Display localStorage
                    var displayEventText = '<h3>Event Information Added:</h3><br><h5>Date: </h5>'+localStorage.getItem('eventDate')+'<br><br><h5>Event Time: </h5>'+localStorage.getItem('eventTime')+'<br><br><h5>Event Location: </h5>'+localStorage.getItem('eventLocation')+'<br><br><h5>Event Title: </h5>'+localStorage.getItem('eventTitle')+'<br><br><h5>Event Description: </h5>'+localStorage.getItem('eventDescription')+'<br><br><h5>Event Phone: </h5>'+localStorage.getItem('eventUserPhone')+'<br><br><h5>Event Email: </h5>'+localStorage.getItem('eventUserEmail');

                    document.getElementById('localStorageData').innerHTML = displayEventText;
                // Display localStorage
            </script>
        ";
    // Set and display event information
}