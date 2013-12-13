<?php include("includes/head.php"); ?>
  <?php include("includes/header.php"); ?>


    <!--Content wrapper starts-->
    <div class="content-wrapper">
      
      <!--Container starts-->
      <div class="container">
        
        <ul class='tabs' id="tab-buttons">
          <li id="form-btn" class="tab active"><a href="#form"><h2>form</h2></a></li>
          <li id="map-btn" class="tab"><a id="map-btn-a" href="#map"><h2>map</h2></a></li>
          <li id="team-btn" class="tab"><a href="#team"><h2>team</h2></a></li>
        </ul>
        
        <!--Tab content starts-->
        <div id="tab-content">
          
          <!--Section Form starts-->
          <section id="form">
            <form action="thankyou.php" method="post">
              <p>* All fields are required.</p>
              <label>
                <div class="labelappend">First Name</div>
                <input type="text" name="firstname">
              </label>
              <label>
                <div class="labelappend">Last Name</div>
                <input type="text" name="lastname">
              </label>
              <label>
                <div class="labelappend">Email</div>
                <input type="text" name="email">
              </label>
              <label>
                <div class="labelappend">Comments</div>
                <textarea name="comments"></textarea>
              </label>
              <input type="submit" value="Send Message">
            </form>
          </section><!--Section Form ends-->

          <!--Section Map starts-->
          <section id="map">
            <p id="top-instructions">Select a location on the map.</p>
            <div id="map-results">
              <button id="close-btn" onClick="closeDir()">Close</button>
              <h3 id="location" class="subhead">Select a location on the map for details.</h3>
              <p id="street"></p>
              <p id="extra"></p>
              <p id="city"></p>
              <p id="postalcode"></p>
              <p id="phone"></p>
              <p id="fax"></p>
              <p id="email"></p>
              <p id="directions"></p>
            </div>
            <div id="map-view"></div>
          </section><!--Section Map ends-->

          <!--Section Team starts-->
          <section id="team">
            <ul>
              <li>
                <img src="images/calendar/calendar1.jpg"/>
                <h3 class="subhead">Marcie Ponte</h3>
                <p>Executive Director</p>
                <p>E: <a href="mailto:marcie@workingwomencc.org">marcie</a></p>
                <p>T: 416-532-2824 ext. 42</p>
                <p>F: 416-532-1065</p>
              </li>
              <li>
                <img src="images/calendar/calendar1.jpg"/>
                <h3 class="subhead">Blas Austria</h3>
                <p>Director of Finance and Administration</p>
                <p>E: <a href="mailto:baustria@workingwomencc.org">baustria</a></p>
                <p>T: 416-532-2824 ext. 41</p>
                <p>F: 416-532-7432</p>
              </li>
              <li>
                <img src="images/calendar/calendar1.jpg"/>
                <h3 class="subhead">Adriana Beemans</h3>
                <p>Director of Programs and Services</p>
                <p>E: <a href="mailto:abeemans@workingwomencc.org">abeemans</a></p>
                <p>T: 416-532-2824 ext. 33</p>
                <p>F: 416-532-1065</p>
              </li>
              <li>
                <img src="images/calendar/calendar1.jpg"/>
                <h3 class="subhead">Sylvie Charliekaram</h3>
                <p>Manager, Hippy Program</p>
                <p>E: <a href="mailto:scharliekaram@workingwomencc.org">scharliekaram</a></p>
                <p>T: 416-750-9600 ext 260</p>
                <p>F: 416-750-9606</p>
              </li>
            </ul>
          </section><!--Section Team ends-->
        </div><!--Tab content ends-->
      </div><!--Container ends-->
    </div><!--Content wrapper ends-->

<?php include("includes/footer.php"); ?>