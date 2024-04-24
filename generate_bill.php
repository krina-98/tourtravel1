<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <style>
        /* Basic styles for the form */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .bill-container {
            margin-top: 40px;
        }
        .bill-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Booking Form</h2>
        <form id="bookingForm">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" id="destination" name="destination" readonly>
            </div>
            <div class="form-group">
                <label for="date">Date of Travel</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" readonly>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="container bill-container" id="billContainer">
        <!-- Booking bill will be displayed here -->
    </div>

    <script>
        // Function to handle form submission
        document.getElementById('bookingForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Retrieve form data
            var fullName = document.getElementById('fullName').value.trim();
            var email = document.getElementById('email').value.trim();
            var phone = document.getElementById('phone').value.trim();
            var destination = document.getElementById('destination').value.trim();
            var date = document.getElementById('date').value.trim();
            var price = document.getElementById('price').value.trim();

            // Display the booking bill dynamically
            var billContainer = document.getElementById('billContainer');
            billContainer.innerHTML = `
                <div class="bill-card">
                    <h2>Booking Bill</h2>
                    <p>Full Name: ${fullName}</p>
                    <p>Email: ${email}</p>
                    <p>Phone Number: ${phone}</p>
                    <p>Destination: ${destination}</p>
                    <p>Date of Travel: ${date}</p>
                    <p>Price: ${price}</p>
                </div>
            `;
        });

        // Function to set the price and destination from URL parameters
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const price = urlParams.get('price');
            const destination = urlParams.get('destination');
            document.getElementById('price').value = price;
            document.getElementById('destination').value = destination;
        };
    </script>
</body>
</html>
