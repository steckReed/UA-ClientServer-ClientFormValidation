<?php
  include './View/header.php';
?>

<h1 class='welcome-message-text center'>Event Listing</h1>

<div class='form-container box-shadow'>
  <!-- Form -->
    <form action="" method="POST">
      <!-- Date & Time -->
        <div class="form-row">
          <div class="col"> 
            <label for="eventDate">Date</label>
            <input id="eventDate" name='eventDate' type="date" class="form-control" required>
          </div>  

          <div class="col"> 
            <label for="eventTime">Time</label>
            <input id="eventTime" name='eventTime' type="time" class="form-control" required>
          </div>
        </div>
      <!-- Date & Time -->

      <!-- Location & Title -->
        <div class="form-row">
            <div class="col"> 
              <label for="eventLocation">Location</label>
              <input id="eventLocation" name='eventLocation' type="text" class="form-control" placeholder="Polsky Room 222" minlength="10" maxlength="100" required>
            </div>

            <div class="col"> 
              <label for="eventTitle">Event Title</label>
              <input id="eventTitle" name='eventTitle' type="text" class="form-control" placeholder="Hot Cocoa Party" minlength="1" maxlength="50" required>
            </div>
        </div>
      <!-- Location & Title -->

      <!-- Description -->
        <label for="eventDescription">Description</label>
        <textarea id="eventDescription" name='eventDescription' type="text" class="form-control" placeholder="Enter Description Here" minlength="10" maxlength="200" required></textarea>
      <!-- Description -->

      <!-- Phone & Email -->
        <div class="form-row">
          <div class="col"> 
            <label for="eventUserPhone">Phone Number</label>
            <input id="eventUserPhone" name='eventUserPhone' type="tel" class="form-control" placeholder='555-867-5309' maxlength="12" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            <small>555-867-5309</small>
          </div>

          <div class="col"> 
            <label for="eventUserEmail">Email address</label>
            <input id="eventUserEmail" name='eventUserEmail' type="email" class="form-control" placeholder="email@Email.com" required>
          </div>
        </div>
      <!-- Phone & Email -->
      
      <!-- Submit Button -->
      <button name='form-add-event' type="submit" class="btn-event-submit btn btn-primary">Add Event</button>
    </form>
  <!-- Form -->

  <div id="localStorageData" class='box-shadow'></div>
</div>

<?php
  include './View/footer.php';
  include './Controller/add-event.php';
?>