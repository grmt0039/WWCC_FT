<?php include("includes/head.php"); ?>
<?php include("includes/top-bar.php"); ?>


  <div class="container">

    <div id="wrapper">
      <section class="maincontent">
        <form>

          <div class="formgroup">
            <label>First Name</label>
            <input type="text" name="firstname" />
          </div>

          <div class="formgroup">
            <label>Last Name</label>
            <input type="text" name="lastname" />
          </div>

          <div class="formgroup">
            <label>Email Address</label>
            <input type="text" name="email" />
          </div>

          <div class="formgroup">
            <label>Address</label>
            <input type="text" name="address" />
          </div>

          <div class="formgroup">
            <label>City</label>
            <input type="text" name="city" />
          </div>

          <div class="formgroup">
            <label>Province</label>
            <input type="text" name="province" />
          </div>

          <div class="formgroup">
            <label>Country</label>
            <input type="text" name="country" />
          </div>

          <div class="formgroup">
            <label>Postal Code</label>
            <input type="text" name="postalcode" />
          </div>

          <div class="formgroup">
            <label>Phone Number</label>
            <input type="text" name="phone" />
          </div>

          <div class="formgroup">
            <label>Comments</label>
            <textarea name="comments"></textarea>
          </div>

          <div class="formgroup">
            <input type="submit" class="btn">
          </div>

        </form>
      </section>

      <?php include("includes/sidebar.php"); ?>

    </div>
  </div>

 <?php include("includes/footer.php"); ?>