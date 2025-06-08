<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <!-- Include FontAwesome for the menu icon if not already included -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style type="text/css">
  /* Basic styles for nav */
nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

nav .items {
  display: none; /* Initially hide items for mobile */
  flex-direction: column;
}

nav .items.show {
  display: flex;
}

nav .btn {
  cursor: pointer;
}

nav .logo img {
  height: 60px; /* Adjust height as needed */
  width: auto; /* Maintain aspect ratio */
  display: block;
}

nav .logo {
  flex-grow: 1;
}

/* Desktop view */
@media (min-width: 600px) {
  nav .items {
    display: flex;
    flex-direction: row;
  }
  .btn {
    display: none; /* Hide button on larger screens */
  }
}

/* Mobile view adjustments */
@media (max-width: 600px) {
  nav ul {
    flex-direction: column;
    align-items: flex-start;
  }
  nav .logo img {
    height: 40px; /* Adjust height for mobile */
  }
}
</style>

  <title>TravelHive</title>
</head>
<body>
  <nav>
    <ul>
      <li class="logo">
        <a href="home.php"><img src="image/logo1.jpg" alt="TravelHive Logo"></a>
      </li>
      <li class="btn"><span class="fas fa-bars"></span></li>
      <div class="items">
        <li><a href="home.php">Home</a></li>
        <li><a href="help.php">Help</a></li>
        <li><a href="loginMenu.php">Login</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="slide.php">Services</a></li>
      </div>
    </ul>
  </nav>

  <script>
    document.querySelector('nav ul li.btn span').addEventListener('click', function() {
      document.querySelector('nav ul div.items').classList.toggle("show");
      this.classList.toggle("show");
    });
  </script>
</body>
</html>
