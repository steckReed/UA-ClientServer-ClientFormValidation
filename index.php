<?php
  include './View/header.php';
?>

<h1 class='welcome-message-text center'>Event Listing</h1>
<div class='form-container box-shadow'>
  <form>
    <!-- Location & Title -->
      <div class="form-row">
          <div class="col"> 
            <label for="eventLocation">Location</label>
            <input id="eventLocation" type="text" class="form-control" placeholder="">
          </div>  
          <div class="col"> 
            <label for="eventTitle">Title</label>
            <input id="eventTitle" type="text" class="form-control" placeholder="">
          </div>
      </div>
    <!-- Location & Title -->

    <!-- Description -->
            <label for="eventDescription">Description</label>
            <textarea id="eventDescription" type="text" class="form-control" placeholder=""></textarea>
    <!-- Description -->

    <!-- Phone & Email -->
      <div class="form-row">
          <div class="col"> 
            <label for="eventUserPhone">Phone Number</label>
            <input id="eventUserPhone" type="tel" class="form-control" placeholder="555-555-5555">
            <small>555-555-5555</small>
          </div>
          <div class="col"> 
            <label for="eventUserEmail">Email address</label>
            <input id="eventUserEmail" type="email" class="form-control" placeholder="Example@Example.com">
          </div>
      </div>
    <!-- Phone & Email -->
    <button type="submit" class="btn-event-submit btn btn-primary">Submit</button>
  </form>
</div>

<?php
  include './View/header.php';
?>