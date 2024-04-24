document.getElementById('searchForm').addEventListener('submit', function(event) {
  event.preventDefault();
  var searchTerm = document.getElementById('searchInput').value.toLowerCase();
  // Perform search logic here, e.g., filter destinations based on searchTerm
  console.log('Searching for: ' + searchTerm);
  // Redirect to search results page or update content dynamically
});
function redirectToBookingForm(destination, price) {
  // Redirect to the booking form page with the price and destination as URL parameters
  window.location.href = "booking-form.php?price=" + price + "&destination=" + destination;
}


