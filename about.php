<?php
// Files to store the data
$inquiryFile = 'inquiries.txt';
$feedbackFile = 'feedback.txt';

// Process Inquiry Form (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitInquiry'])) {
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $contact = htmlspecialchars($_POST['contact']);
    
    // Prepare inquiry data for logging
    $inquiryData = "Name: $name, Address: $address, Contact: $contact\n";
    file_put_contents($inquiryFile, $inquiryData, FILE_APPEND);
    $thankYouMessage = "Thank you, $name! We have received your inquiry.";
}

// Process Feedback Form (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitFeedback'])) {
    $feedback = htmlspecialchars($_POST['feedback']);
    $feedbackEntry = "Feedback: $feedback, Submitted on: " . date('Y-m-d H:i:s') . "\n";
    file_put_contents($feedbackFile, $feedbackEntry, FILE_APPEND);
}

// Load past inquiries or feedback based on GET parameters
$inquiries = [];
$feedbackEntries = [];

if (isset($_GET['view']) && $_GET['view'] == 'inquiries') {
    if (file_exists($inquiryFile)) {
        $inquiries = file($inquiryFile, FILE_IGNORE_NEW_LINES);
    }
} elseif (isset($_GET['view']) && $_GET['view'] == 'feedback') {
    if (file_exists($feedbackFile)) {
        $feedbackEntries = file($feedbackFile, FILE_IGNORE_NEW_LINES);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body background="Bg.jpg">

    <!-- Navbar -->
    <div class="navbar">
        <h1>Group Nine</h1>
        <div>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <!-- Main Container -->
    <div class="container">
        <h1 style="text-align: center;">About Us</h1>

        <!-- Mission Section -->
        <div class="section">
            <div class="description">
                <h2>Our Mission</h2>
                <p>
                    Our mission is to empower individuals through innovative solutions and exceptional service. We are dedicated to fostering growth 
                    and success in our community by providing quality products, inspiring creativity, and maintaining a commitment to excellence. 
                    We believe in building lasting relationships with our clients and partners, ensuring their needs are met with integrity and professionalism.
                </p>
            </div>
            <img src="Aboutimg.png" alt="Mission Image">
        </div>

        <!-- Vision Section -->
        <div class="section">
            <img src="Aboutimg.png" alt="Vision Image">
            <div class="description">
                <h2>Our Vision</h2>
                <p>
                    Our vision is to be a leading force in our industry, recognized for our commitment to innovation and sustainability.
                    We aspire to create a world where individuals are empowered to achieve their dreams and contribute positively to society.
                    Through our dedication to excellence and collaboration, we aim to inspire change and foster a brighter future for all.
                </p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="services-section">
            <h2 style="text-align: center;">Our Services</h2>
            <div class="services-container">
                <div class="service">
                    <h3>Web Design</h3>
                    <p>Creating stunning and responsive websites tailored to your needs.</p>
                </div>
                <div class="service">
                    <h3>Computer Related Services</h3>
                    <p>Offering expert technical support and maintenance for all your devices.</p>
                </div>
                <div class="service">
                    <h3>Digital Marketing</h3>
                    <p>Helping you reach your audience effectively through online strategies.</p>
                </div>
                <div class="service">
                    <h3>Graphic Design</h3>
                    <p>Designing visuals that communicate your brand message powerfully.</p>
                </div>
                <div class="service">
                    <h3>Technical Support</h3>
                    <p>Providing assistance and solutions for your technical issues.</p>
                </div>
            </div>
        </div>


        <!-- Forms Section: Inquiry and Feedback Side-by-Side -->
        <div class="forms-section">
            <!-- Inquiry Form (POST) -->
            <div class="form-wrapper">
                <h2>Submit Inquiry</h2>
                <form id="inquiryForm" method="POST" action="about.php">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>

                    <label for="contact">Contact Number:</label>
                    <input type="tel" id="contact" name="contact" required>

                    <button type="submit" name="submitInquiry">Submit Inquiry</button>
                </form>
            </div>

            <!-- Feedback Form (POST) -->
            <div class="form-wrapper">
                <h2>Submit Feedback</h2>
                <form id="feedbackForm" method="POST" action="about.php">
                    <label for="feedback">Your Feedback:</label>
                    <textarea id="feedback" name="feedback" required></textarea>

                    <button type="submit" name="submitFeedback">Submit Feedback</button>
                </form>
            </div>
        </div>

        <!-- Thank You Message -->
        <?php if (isset($thankYouMessage)): ?>
            <p class="thank-you"><?= htmlspecialchars($thankYouMessage) ?></p>
        <?php endif; ?>

        <!-- Past Inquiries and Feedback Section (GET) -->
        <div class="list-section">
            <!-- Navigation for Viewing Inquiries and Feedback -->
            <div class="view-options">
                <a href="about.php?view=inquiries" class="view-button">View Past Inquiries</a>
                <a href="about.php?view=feedback" class="view-button">View Past Feedback</a>
            </div>

            <!-- Display Past Inquiries -->
            <?php if (!empty($inquiries)): ?>
                <div class="list-wrapper">
                    <h2>Past Inquiries</h2>
                    <ul>
                        <?php foreach ($inquiries as $inquiry): ?>
                            <li><?= htmlspecialchars($inquiry) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Display Past Feedback -->
            <?php if (!empty($feedbackEntries)): ?>
                <div class="list-wrapper">
                    <h2>Past Feedback</h2>
                    <ul>
                        <?php foreach ($feedbackEntries as $entry): ?>
                            <li><?= htmlspecialchars($entry) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </div>
    </div>

</body>
</html>