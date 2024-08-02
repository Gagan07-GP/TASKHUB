<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="rgad.css">

  <style>
  </style>
</head>

<body>
  <section class="container">
    <header>Registration Form</header>
    <form action="connect.php" method="post" class="form">
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" placeholder="Enter full name" name="fullname">
      </div>

      <div class="input-box">
        <label>Email Address</label>
        <input type="text" placeholder="Enter email address" name="email">
      </div>

      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" placeholder="Enter phone number" name="number">
        </div>
        <div class="input-box">
          <label>Birth Date</label>
          <input type="date" placeholder="Enter birth date" name="birthdate">
        </div>
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" checked />
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" />
            <label for="check-female">Female</label>
          </div>

        </div>
      </div>

      </div>
      <!-- <a href="login.php"> -->
        <button>Submit</button>
      <!-- </a> -->
    </form>
  </section>
   
</body>

</html>