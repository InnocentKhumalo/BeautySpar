<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="srcipt.js">
    </script>
    <title>Make an Appointment</title>
</head>
<body>
    <div class="appointment-container">
        <form action="bookings.php" method="post">
            <div class="appointment-item">
            <h2>Book An Appointment Now!</h2>
            <input type="hidden" id="id" name="id">
            <label for="Name">Name: <span style="color: red;">*</span> </label>
            <input type="text" name="clientname" id="clientname" placeholder="Your Name..." required>
            <label for="Email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Your Email...">
            <label for="Number">Number: <span style="color: red;">*</span></label>
            <input type="number" name="clientnumber" id="clientnumber" placeholder="Your Number..." required>
            <label for="Selection">Select Services: <span style="color: red;">*</span></label>
            <div class="custom-select">
                <select id="servicesselected" name="serviceselected">
                    <option value="0">--Select Desired Services--</option>
                    <option value="MakeUp">MakeUp</option>
                    <option value="Manicure">Manicure</option>
                    <option value="Pedicure">Pedicure</option>
                    <option value="Skin care">Skin care</option>
                    <option value="Microblading">Microblading</option>
                    <option value="Retouch">Retouch</option>
                </select>
            </div>
            <label for="Date">Date & Time: <span style="color: red;">*</span></label>
            <input type="datetime-local" name="datetime" id="datetime">
            <label for="Comments">Add Comment:</label>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Write comment/special instructions..."></textarea>
            <button type="submit">Submit Booking</button>
            </div>
        </form>
    </div>
</body>
</html>