  <div class="pat-item pat-dates" id="pat-dates">
    <div class="pat-inner-title">
      <h5>Travel Date & Duration</h5>
      <p>Explore the recognitions we've earned and the legal foundations we've built.</p>
    </div>

    <div class="pat-content pat-dates-content">
      <div class="row">
        <div class="col-lg-6">
          <div class="input-field">
            <label for="start-date">
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/calendar-date.svg" alt="">
              Preferred Travel Date</label>
            <div class="date-field-wrapper">
              <input type="text" class="start-date" placeholder="Provide the Start Date of Travel">
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="input-field">
            <label for="start-date">
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/timer.svg" alt="">
              Tour Duration</label>
            <div class="date-field-wrapper">
              <select>
                <option value="" disabled selected>Select the number of days of travel</option>
                <option value="1">1 Day</option>
                <option value="2">2 Days</option>
                <option value="3">3 Days</option>
                <option value="15">15 Days</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="input-field">
            <label for="start-date">
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/message-box.svg" alt="">
              Message</label>
            <textarea name="" id="" rows="4"
              placeholder="Write your beautiful trip plan here with a group size, budget range, trip plan and other requirement..."></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="text-end d-flex justify-content-end align-items-center pat-btn-group">
      <a href="#pat-activities" class="bh-btn bh-btn-outlined">Previous</a>
      <a href="#pat-contact-info" class="bh-btn bh-btn-filled-dark">Next</a>
    </div>
  </div>