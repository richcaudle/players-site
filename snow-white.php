<!DOCTYPE html>
<html>
<head>
  <title>Leckhampton Players | Snow White and the Seven Dwarfs</title>
  <meta name="description" content="Leckhampton Players 2017 pantomime is Snow White and the Seven Dwarfs, and runs from 28/1/17 - 4/2/17." />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <style>
    html {
      min-height: 100%;
    }
    body {
      background: #196cae; /* Old browsers */
      background: -moz-linear-gradient(-45deg,  #196cae 0%, #40b3e6 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(-45deg,  #196cae 0%,#40b3e6 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(135deg,  #196cae 0%,#40b3e6 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#196cae', endColorstr='#40b3e6',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
      height: 100%;
      margin: 0;
      color: white;
      font-family: "Roboto", sans-serif;
      font-weight: 400;
    }

    .back-link {
      color: white;
      padding: 15px;
      display: block;
    }
    .back-link:hover {
      text-decoration: none;
      color: #ddd;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <a class="back-link" href="http://www.leckhamptonplayers.com"><i class="fa fa-arrow-left"></i> &nbsp;Back to Leckhampton Players</a>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <img class="img-fluid" src="images/snow-white.png" />
        </div>
      </div>
      <?php if(!$_POST): ?>
      <div class="row">
        <div class="col-sm-8 offset-sm-2" style="text-align: center; font-size: 1rem;">
          <p class="lead" style="font-size: 1.5rem;">by The Leckhampton Players</p>
          <p>Mirror mirror on the wall, which is the fairest panto of all?</p>
          <p>Well it's sure to be the Leckhampton Player's production of Snow White and the Seven Dwarfs with spectacular cast, music, sets and costumes.</p>
          <p>Join Chuckles, Edna & friends at Leckhampton Village Hall as they try to overcome the wicked Queen Avarice and save Snow White.</p>
          <p>This year's pantomime runs from Saturday 28<sup>th</sup> January - Saturday 4<sup>th</sup> February, call the box office now on 07867 884 985 (lines open 10am - 9pm daily), or book online using the form below.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
          <br/>
          <form method="post">
            <div class="form-group">
            <label for="exampleSelect1" style="font-weight:500;">Choose a performance</label>
            <select class="form-control" id="performance" name="performance">
              <option>Saturday 28th January @ 2:00pm</option>
              <option>Saturday 28th January @ 7:30pm</option>
              <option>Sunday 29th January @ 2:00pm</option>
              <option>Tuesday 31st January @ 7:30pm</option>
              <option>Wednesday 1st February @ 7:30pm</option>
              <option>Thursday 2nd February @ 7:30pm</option>
              <option>Friday 3rd February @ 7:30pm</option>
              <option>Saturday 4th February @ 2:00pm</option>
              <option>Saturday 4th February @ 7:30pm</option>
            </select>
            </div>
            <div class="form-group row">
            <label for="adult" style="font-weight:500;" class="col-xs-9 col-form-label">Adult tickets @ £8.00:</label>
              <div class="col-xs-3">
                <select class="form-control" id="adult" name="adult" required>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10+</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
            <label for="child" style="font-weight:500;" class="col-xs-9 col-form-label">Child tickets @ £4.00:</label>
              <div class="col-xs-3">
                <select class="form-control" id="child" name="child" required>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10+</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
            <label for="name" style="font-weight:500;" class="col-xs-2 col-form-label">Name:</label>
              <div class="col-xs-10">
                <input class="form-control" type="text" placeholder="Enter your name..." id="name" name="name" required>
              </div>
            </div>
            <div class="form-group row">
            <label for="email" style="font-weight:500;" class="col-xs-2 col-form-label">Email:</label>
              <div class="col-xs-10">
                <input class="form-control" type="email" placeholder="Enter your email..." id="email" name="email" required>
              </div>
            </div>
            <div class="form-group row">
            <label for="phone" style="font-weight:500;" class="col-xs-2 col-form-label">Phone:</label>
              <div class="col-xs-10">
                <input class="form-control" type="phone" placeholder="Enter your phone number..." id="phone" name="phone" required>
              </div>
            </div>
            <div style="text-align: center;" class="form-group">
              <button style="padding: 10px 30px; border: 2px solid white; margin-bottom: 50px;" type="submit" class="btn btn-danger">Book now!</button>
            </div>
          </form>
        </div>
      </div>
      <?php else:
        $email_to = "rob@robtribe.co.uk";
        $email_subject = "New Snow White Booking from ".$_POST['name'];
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        //$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        $headers .= 'From: LP TICKETS <do-not-reply@leckhamptonplayers.com>' . "\r\n";
        $headers .= 'Reply-to: '.$_POST['email'].'' . "\r\n";
        $headers .= 'Cc: test@robtribe.co.uk' . "\r\n";
        $headers .= 'Cc: test1@robtribe.co.uk' . "\r\n";
        $headers .= 'Cc: test2@robtribe.co.uk' . "\r\n";
        //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

        $message = "A new online booking for Snow White as been received from the Leckhampton Players website:<br/><br/>

Name: ".$_POST['name']."<br/>
Email: ".$_POST['email']."<br/>
Phone: ".$_POST['phone']."<br/>
Performance: ".$_POST['performance']."<br/>
Adult tickets: ".$_POST['adult']."<br/>
Child tickets: ".$_POST['child']."<br/><br/>
You can email ".$_POST['name']." by replying to this email.";

        mail($email_to, $email_subject, $message, $headers);
      ?>

        <div class="row">
          <div class="col-sm-6 offset-sm-3" style="text-align: center; font-size: 1rem;">
            <p class="lead" style="font-size: 1.5rem;">Thanks for booking your tickets!</p>
            <p>We'll contact you by phone within 2 working days to confirm your booking.</p>
            <p>You can pay for your tickets by cash, card or cheque - please be aware that there is an additional £1.50 booking fee for payments by card.</p>
            <p>If you want to confirm your booking now by telephone, you can call us on 07867 884 985 (lines open 10am - 9pm daily).</p>
            <a class="btn btn-danger" style="padding: 10px 30px; border: 2px solid white; margin-bottom: 50px;" href="snow-white.php"><i class="fa fa-arrow-left"></i> &nbsp;Make another booking</a>
          </div>
        </div>

      <?php endif; ?>
    </div>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
</body>
</html>
