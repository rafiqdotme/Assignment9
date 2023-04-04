<?php require_once('inc/header.php'); ?>

<?php
$info= "";

if (isset($_POST['submit'])){
    $info = "Message has been send.";
}

?>


<!-- =======Start content======= -->
<div class="content_wraper_bg">
  <div class="container">
      <section class="content_part col-sm-7">
          <h2>Contact Us</h2>
          <h2 style="background-color: cornflowerblue;"><?php echo $info; ?></h2>
          <form action="" method="POST">
              <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" name="userName" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                  <label for="exampleSubject">Subject</label>
                  <input type="text" name="subject" class="form-control" id="exampleSubject" placeholder="Subject">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Message:</label>
                  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
      </section>

<!-- ========Start Sidebar======== -->
      <aside class="sid_bar col-sm-4 col-sm-offset-1">
        <div class="about_blog">
          <h2 >ABOUT Rafiq.</h2>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <p>Excepteur sint occaecat sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="search">
          <h2>SEARCH.</h2>
          <div class="search_box">
          <input type="text" name="search" placeholder="What are you looking for">

          <div class="search_icon">
          <input type="submit" name="">
          </div>
          </div>
        </div>




        <div class="stay_tuned">
          <h2>STAY TUNED.</h2>
          <div class="email_box">
          <input type="email" name="email" placeholder="Your Email">
          <div class="mail_icon">
          <input type="submit" name="">
          </div>
          </div>
        </div>
      </aside><!-- =End Sidbar= -->
  </div>
</div>
<!-- ========End content======== -->

<?php require_once('inc/footer.php') ?>