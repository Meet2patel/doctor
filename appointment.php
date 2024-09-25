<style>
  body {
    padding: 0px !important;
  }

  /* nav starts */

  /* nav start */

  @import url(https://fonts.googleapis.com/css?family=Raleway);

  .top-nav ul.menu li {
    transition: color 0.3s ease;
    /* Smooth transition */
  }

  .top-nav ul.menu li:hover {
    color: #1a76d1;
    /* Change text color on hover */
    cursor: pointer;
  }

  h2 {
    vertical-align: center;
    text-align: center;
  }

  html,
  body {
    margin: 0;
    height: 100%;
  }

  * {
    font-family: "Poppins", sans-serif;
    box-sizing: border-box;
  }

  .top-nav {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    background-color: #fff;
    color: #000;
    height: 50px;
    padding: 1em;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .top-nav.shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .menu {
    display: flex;
    flex-direction: row;
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  .menu>li {
    margin: 0 1rem;
    overflow: hidden;
  }

  .menu-button-container {
    display: none;
    height: 100%;
    width: 30px;
    cursor: pointer;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  #menu-toggle {
    display: none;
  }

  .menu-button,
  .menu-button::before,
  .menu-button::after {
    display: block;
    background-color: #1a76d1;
    position: absolute;
    height: 4px;
    width: 30px;
    transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1);
    border-radius: 2px;
  }

  .menu-button::before {
    content: "";
    margin-top: -8px;
  }

  .menu-button::after {
    content: "";
    margin-top: 8px;
  }

  #menu-toggle:checked+.menu-button-container .menu-button::before {
    margin-top: 0px;
    transform: rotate(405deg);
  }

  #menu-toggle:checked+.menu-button-container .menu-button {
    background: rgba(255, 255, 255, 0);
  }

  #menu-toggle:checked+.menu-button-container .menu-button::after {
    margin-top: 0px;
    transform: rotate(-405deg);
  }

  @media (max-width: 767px) {
    .container {
      margin-top: 16% !important;
    }

    .menu-button-container {
      display: flex;
    }

    .top-nav {
      justify-content: space-between;
      padding-top: 0px;
      padding-bottom: 0px;
    }

    .top-nav .menu-button-container {
      margin-bottom: 0px;
    }

    .menu {
      position: absolute;
      top: 0;
      margin-top: 50px;
      left: 0;
      flex-direction: column;
      width: 100%;
      justify-content: center;
      align-items: center;
    }

    #menu-toggle~.menu li {
      height: 0;
      margin: 0;
      padding: 0;
      border: 0;
      transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
    }

    #menu-toggle:checked~.menu li {
      /* border: 1px solid #333; */
      height: 2.5em;
      padding: 0.5em;
      transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
      margin: -1px;
    }

    .top-nav .menu li {
      justify-content: left;
      padding-left: 25px !important;
    }

    .menu>li {
      display: flex;
      justify-content: center;
      margin: 0;
      padding: 0.5em 0;
      width: 100%;
      color: #000;
      background-color: #fff;
    }

    .menu>li:not(:last-child) {
      border-bottom: 1px solid #444;
    }
  }

  @media (min-width: 768px) and (max-width: 1299px) {
    .container {
      margin-top: 13% !important;
    }
  }

  @media (min-width: 1300px) {
    .container {
      margin-top: 6% !important;
    }
  }

  /* nav ends */

  /* nav ends */

  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
  }

  .container {
    max-width: 400px;
    margin: auto;
    margin-top: 10%;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 15px;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="tel"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  textarea {
    resize: vertical;
  }

  .submit-btn {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .submit-btn:hover {
    background-color: #4cae4c;
  }

  .custom-select {
    position: relative;
    width: 100%;
    font-family: Arial, sans-serif;
  }

  .custom-select select {
    display: none;
    /* Hide original select */
  }

  .select-selected {
    background-color: #f4f4f4;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    position: relative;
    font-size: 16px;
  }

  .select-selected:after {
    content: "";
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    background-image: url("img/arrows.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    height: 24px;
    width: 24px;
    transition: transform 0.3s ease;
    /* Smooth transition for arrow rotation */
  }

  .select-arrow-inverted:after {
    transform: translateY(-50%) rotate(180deg);
    /* Rotate arrow */
  }

  .select-items {
    position: absolute;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    z-index: 99;
    display: none;
    /* Hidden by default */
  }

  .select-items div {
    padding: 10px;
    cursor: pointer;
  }

  .select-items div:hover {
    background-color: #f1f1f1;
    /* Highlight on hover */
  }

  .select-hide {
    display: none;
  }

  .brandlogo {
    width: 150px;
  }

  .top-nav {
    height: 74px;
    border-bottom: 1px solid #1a76d1;
  }

  .top-nav .second li {
    list-style-type: none;
  }

  .top-nav .second li a:hover {
    color: #1a76d1;
  }

  .top-nav .second li a {
    text-decoration: none;
    color: #2c2d3f;
    font-size: 17px;
    font-weight: 500;
    text-transform: capitalize;
    padding: 25px 12px;
    position: relative;
    display: inline-block;
    font-family: "Poppins", sans-serif;
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Appointment Form</title>
  <?php
      // Import PHPMailer classes into the global namespace
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      // Load required files
      require 'PHPMailer/PHPMailer.php';
      require 'PHPMailer/SMTP.php';
      require 'PHPMailer/Exception.php';

      // Initialize message variables
      $message = '';
      $messageType = '';

      // Function to send mail
      function send_mail($recMailAddr, $subject, $body) {
          $mail = new PHPMailer(true);
          try {
              // Server settings
              $mail->isSMTP();                                            // Send using SMTP
              $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
              $mail->Username   = 'j.smithart112@gmail.com';              // SMTP username
              $mail->Password   = 'khpazpxivwoswpfi';                     // SMTP password
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
              $mail->Port       = 465;                                    // TCP port to connect to
              
              // Recipients
              $mail->setFrom('j.smithart112@gmail.com', 'Mailer');
              $mail->addAddress($recMailAddr, 'Receiver');     // Add a recipient
              
              // Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = $subject;
              $mail->Body    = $body;

              $mail->send();
              return true;
          } catch (Exception $e) {
              return false;
          }
      }

      // Check if form is submitted
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-btn'])) {
          $name = htmlspecialchars(strip_tags(trim($_POST['first-name']))) . " " .
                  htmlspecialchars(strip_tags(trim($_POST['last-name'])));
          $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
          $contact = htmlspecialchars(strip_tags(trim($_POST['contact'])));
          $address = htmlspecialchars(strip_tags(trim($_POST['address'])));
          
          // Set the recipient email address
          $to = "meeta9913@gmail.com"; // Change this to your email
          $subject = "New message from contact form";
          
          // Create the email content
          $body = "<tr><td>Name</td><td>$name<td></tr>";
          $body .= "<tr><td>Email</td><td>$email<td></tr>";
          $body .= "<tr><td>Contact</td><td>$contact<td></tr>";
          $body .= "<tr><td>Address</td><td>$address<td></tr>";
          
          // Send the email
          if (send_mail($to, $subject, $body)) {
              $message = 'Form submitted successfully!';
              $messageType = 'success';
          } else {
              $message = 'Message could not be sent.';
              $messageType = 'error';
          }
          // sendRespond();
      }
    ?>

</head>

<body>
  <section class="top-nav">
    <div>
      <a href="./index.html">
        <img class="brandlogo" src="./img/BPharm_logo.png" alt="Logo" />
      </a>
    </div>
    <div class="second">
      <li><a class="menuhome" href="./index.html">Home</a></li>
    </div>
    <!-- <input id="menu-toggle" type="checkbox" />
      <label class="menu-button-container" for="menu-toggle">
        <div class="menu-button"></div>
      </label>
      <ul class="menu">
        <li><a class="menuhome" href="/">Home</a></li>
      </ul> -->
  </section>

  <div class="container">
    <h2 style="color: #1a76d1">Appointment Form</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name" required />
      </div>
      <div class="form-group">
        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name" required />
      </div>
      <div class="form-group">
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" required />
      </div>
      <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="appointment-type">Appointment Type:</label>
        <div class="custom-select" id="disease-select">
          <div class="select-selected">Select</div>
          <div class="select-items select-hide">
            <div>In-Person</div>
            <div>Online</div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="doctor-name">Select Doctor:</label>
        <div class="custom-select" id="doctor-select">
          <div class="select-selected">Select a doctor</div>
          <div class="select-items select-hide">
            <div>Dr. Smith</div>
            <div>Dr. Jones</div>
            <div>Dr. Brown</div>
            <div>Dr. Williams</div>
          </div>
        </div>
      </div>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
  <?php if (!empty($message)): ?>
  <script>
    document.addEventListener('DOMContentLoaded', async function () {
      // Capture the PHP variables
      var message = '<?php echo $message; ?>';
      var messageType = '<?php echo $messageType; ?>';

      // Async function to handle redirection first, then the alert after the page loads
      async function redirectThenAlert() {
        // Store the message and messageType in localStorage before redirection
        localStorage.setItem('alertMessage', message);
        localStorage.setItem('alertMessageType', messageType);

        // Redirect to the new page
        window.location.href = 'index.html'; // Change this to your redirect page
      }

      // Call the async function
      await redirectThenAlert();
    });
  </script>
  <?php endif; ?>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const customSelects = document.querySelectorAll(".custom-select");

      customSelects.forEach((customSelect) => {
        const selected = customSelect.querySelector(".select-selected");
        const itemsContainer = customSelect.querySelector(".select-items");

        selected.addEventListener("click", function () {
          // Toggle display of the items
          itemsContainer.style.display =
            itemsContainer.style.display === "block" ? "none" : "block";

          // Toggle the arrow inversion by adding/removing class
          selected.classList.toggle("select-arrow-inverted");
        });

        const items = itemsContainer.querySelectorAll("div");
        items.forEach((item) => {
          item.addEventListener("click", function () {
            selected.textContent = this.textContent; // Update selected text
            itemsContainer.style.display = "none"; // Hide items

            // Remove the arrow inversion when an item is selected
            selected.classList.remove("select-arrow-inverted");
          });
        });

        document.addEventListener("click", function (e) {
          if (!customSelect.contains(e.target)) {
            itemsContainer.style.display = "none"; // Hide items if clicked outside

            // Ensure the arrow is in its default state when clicking outside
            selected.classList.remove("select-arrow-inverted");
          }
        });
      });
    });
  </script>

  <script>
    window.addEventListener("scroll", function () {
      const topNav = document.querySelector(".top-nav");

      if (window.scrollY > 0) {
        topNav.classList.add("shadow");
      } else {
        topNav.classList.remove("shadow");
      }
    });
  </script>
</body>

</html>