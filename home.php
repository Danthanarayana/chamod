<?php
    // Set timezone to Sri Lanka
    date_default_timezone_set('Asia/Colombo');

    // Get visitor name and email from POST request
    $visitorName = isset($_POST['visitorName']) ? $_POST['visitorName'] : 'Guest';
    $email = isset($_POST['email']) ? $_POST['email'] : 'No Email';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        // Function to update the clock every second
        function updateClock() {
            var now = new Date();
            var year = now.getFullYear();
            var month = ('0' + (now.getMonth() + 1)).slice(-2); // Months are zero-based
            var day = ('0' + now.getDate()).slice(-2);
            var hours = ('0' + now.getHours()).slice(-2);
            var minutes = ('0' + now.getMinutes()).slice(-2);
            var seconds = ('0' + now.getSeconds()).slice(-2);
            var currentTime = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
            
            document.getElementById('real-time').innerHTML = "Current Date and Time (Sri Lanka): " + currentTime;
        }

        // Update the clock every second (1000 milliseconds)
        setInterval(updateClock, 1000);
    </script>
</head>
<body onload="updateClock()">
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($visitorName); ?>!</h1>
        <p>Email: <?php echo htmlspecialchars($email); ?></p>
        <div class="cart-icon">
            <img src="images/cart1.png" alt="Shopping Cart" width="180">
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">COURSES</a></li>
            <li><a href="#">AFFILIATIONS</a></li>
            <li><a href="#">HOW TO JOIN</a></li>
            <li><a href="#">TESTIMONIALS</a></li>
        </ul>
    </nav>

    <div class="date-time" id="real-time">
        <!-- JavaScript will update this with the current time -->
    </div>

    <div class="courses-grid">
        <div class="course-item">
            <img src="images/g1.jpg" alt="Course 1">
            <h3>EC0001 Quantitative Analysis in Business</h3>
            <p>(45 Hours)</p>
            <p>Rs. 35,000/-</p>
        </div>

        <div class="course-item">
            <img src="images/g3.png" alt="Course 2">
            <h3>EC0002 Information Technology in Retailing</h3>
            <p>(45 Hours)</p>
            <p>Rs. 35,000/-</p>
        </div>

        <div class="course-item">
            <img src="images/g4.png" alt="Course 3">
            <h3>EC0003 Brand Innovation & Development</h3>
            <p>(30 Hours)</p>
            <p>Rs. 25,000/-</p>
        </div>

        <div class="course-item">
            <img src="images/g5.png" alt="Course 4">
            <h3>EC0004 Packaging & Logistic Management</h3>
            <p>(30 Hours)</p>
            <p>Rs. 25,000/-</p>
        </div>

        <div class="course-item">
            <img src="images/g6.png" alt="Course 5">
            <h3>EC0005 Service Marketing</h3>
            <p>(40 Hours)</p>
            <p>Rs. 30,000/-</p>
        </div>

        <div class="course-item">
            <img src="images/g7.png" alt="Course 6">
            <h3>EC0006 E-Commerce</h3>
            <p>(45 Hours)</p>
            <p>Rs. 35,000/-</p>
        </div>
    </div>
</body>
</html>
