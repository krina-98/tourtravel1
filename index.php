<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Travel Website</h1>
            <form id="searchForm">
                <input type="text" id="searchInput" placeholder="Search destinations...">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

    <section class="slogan">
      <div class="container">
          <div class="slogan-content">
              <div class="slogan-text">
                  <h2>Your Gateway to Adventure</h2>
                  <p>Discover new destinations, create unforgettable memories, and embark on the journey of a lifetime with us.</p>
              </div>
              <div class="slogan-image">
                  <img src="img/tourtravel.jpg" alt="Slogan Image">
              </div>
          </div>
      </div>
  </section>
  
  

    <section class="destination-cards">
        <div class="container">
            <div class="destination-card">
                <img src="img/d1.jpg" alt="Destination 1">
                <h2>Paris, France</h2>
                <p>The city of love, famous for its iconic landmarks like the Eiffel Tower and Louvre Museum.</p>
                <p>Price: 23,000</p>
                <button class="book-now-btn" onclick="redirectToBookingForm('Paris, France', 23000)">Book Now</button>
            </div>
            <div class="destination-card">
                <img src="img/d2.jpg" alt="Destination 2">
                <h2>Tokyo, Japan</h2>
                <p>Experience the vibrant culture, delicious cuisine, and futuristic cityscape of Tokyo.</p>
                <p>Price: 45,000</p>
                <button class="book-now-btn" onclick="redirectToBookingForm('Tokyo, Japan', 45000)">Book Now</button>
            </div>
            <div class="destination-card">
                <img src="img/d3.jpeg" alt="Destination 3">
                <h2>New York City, USA</h2>
                <p>The Big Apple, known for its bustling streets, iconic skyline, and diverse cultural attractions.</p>
                <p>Price: 20,000</p>
                <button class="book-now-btn" onclick="redirectToBookingForm('New York City, USA', 20000)">Book Now</button>
            </div>
            <div class="destination-card">
                <img src="img/d4.jpeg" alt="Destination 4">
                <h2>Rome, Italy</h2>
                <p>Discover the ancient ruins, exquisite art, and mouthwatering cuisine in the Eternal City.</p>
                <p>Price: 25,000</p>
                <button class="book-now-btn" onclick="redirectToBookingForm('Rome, Italy', 25000)">Book Now</button>
            </div>
            <div class="destination-card">
                <img src="img/d5.jpg" alt="Destination 5">
                <h2>Sydney, Australia</h2>
                <p>Explore the stunning beaches, iconic landmarks, and vibrant culture of Sydney.</p>
                <p>Price: 13,000</p>
                <button class="book-now-btn" onclick="redirectToBookingForm('Sydney, Australia', 13000)">Book Now</button>
            </div>
            <div class="destination-card">
                <img src="img/d6.jpeg" alt="Destination 6">
                <h2>Cairo, Egypt</h2>
                <p>Experience the rich history, ancient wonders, and bustling souks of Cairo.</p>
                <p>Price: 10,000</p>
                <button class="book-now-btn" onclick="redirectToBookingForm('Cairo, Egypt', 10000)">Book Now</button>
            </div>
        </div>
    </section>

    <!-- Other content of your website goes here -->

    <script src="script.js"></script>
</body>
</html>
