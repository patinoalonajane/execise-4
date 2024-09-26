<?php

$name = "Harbert Sammy Gendrano";
$age = 22;
$address = "San Guillermo St Poblacion Muntinlupa City";
$linkedin ="";
$github = "";
$coursera = "";

// Team Member 2
$name1 = "Alona Jane Patiño";
$age1 = 25;
$address1 = "Sv3 Poblacion";
$image1 = "Member1.jpg";
$linkedin1 = "https://www.linkedin.com/in/alona-jane-pati%C3%B1o-144406324/";
$github1 = "https://github.com/patinoalonajane";
$coursera1 = "https://www.coursera.org/user/dd46220e3939c0e9cb9eadf014e16d1d";

// Team Member 3
$name2 = "Cyraine Mae H. Magdaraog";
$age2 = 24;
$address2 = "Purok 1 Blk10B Bayanan Muntinlupa City";
$image2 = "Member2.jpg";
$linkedin2 = "#"; // Add actual link if available
$github2 = "#"; // Add actual link if available
$coursera2 = "#"; // Add actual link if available

// Team Member 4
$name3 = "Eredos Christian III";
$age3 = 22;
$address3 = "Tepaurel compound putatan muntinlupa city";
$image3 = "Member3.jpg";
$linkedin3 = "#"; // Add actual link if available
$github3 = "#"; // Add actual link if available
$coursera3 = "#"; // Add actual link if available

// Team Member 5
$name4 = "Salve Barbacena";
$age4 = 22;
$address4 = "Bayanan Muntinlupa";
$image4 = "Member4.jpg";
$linkedin4 = "#"; // Add actual link if available
$github4 = "#"; // Add actual link if available
$coursera4 = "#"; // Add actual link if available
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Group Nine Profile</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    </head>

    <body background="Bg.jpg">

    <div class="navbar">
            <h1>Group Nine</h1>
            <div>
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </div>
    </div>

        <h1>&#169;GROUP NINE</h1>
        <div class="team">


            <!-- Team Member 1 -->
<div class="profile" id="Sam">
    <img src="Sammy.jpg" alt="Sammy">
    <div class="profile-content">
            <h2><?php echo $name; ?></h2>
            <p>Hello! I’m Sammy, someone who believes in the power of self-motivation as a driving force for personal and professional growth.</p>
            <button onclick="toggleDetails(this)">View Profile</button>

        <!-- Hidden drop-down details -->
             <div class="profile-details">
            <?php
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            ?>
             <div class="social-links">
                <a href="<?php echo $linkedin1; ?>"><img src="linkedin.png" alt="LinkedIn"></a>
                <a href="<?php echo $github1; ?>"><img src="github.png" alt="GitHub"></a>
                <a href="<?php echo $coursera1; ?>"><img src="learning.png" alt="Learning"></a>
            </div>
        </div>
    </div>
</div>

         <!-- Team Member 2 -->
<div class="profile" id="Mem1">
    <img src="<?php echo $image1; ?>" alt="Mem1">
    <div class="profile-content">
        <h2><?php echo $name1; ?></h2>
        <p>Something About You.</p>
        <button onclick="toggleDetails(this)">View Profile</button>

        <!-- Hidden drop-down details -->
        <div class="profile-details">
            <?php
            echo "<p><strong>Name:</strong> $name1</p>";
            echo "<p><strong>Age:</strong> $age1</p>";
            echo "<p><strong>Address:</strong> $address1</p>";
            ?>
            <div class="social-links">
                <a href="<?php echo $linkedin1; ?>"><img src="linkedin.png" alt="LinkedIn"></a>
                <a href="<?php echo $github1; ?>"><img src="github.png" alt="GitHub"></a>
                <a href="<?php echo $coursera1; ?>"><img src="learning.png" alt="Learning"></a>
            </div>
        </div>
    </div>
</div>

<!-- Team Member 3 -->
<div class="profile" id="Mem2">
    <img src="<?php echo $image2; ?>" alt="Mem2">
    <div class="profile-content">
        <h2><?php echo $name2; ?></h2>
        <p>Something About You.</p>
        <button onclick="toggleDetails(this)">View Profile</button>

        <!-- Hidden drop-down details -->
        <div class="profile-details">
            <?php
            echo "<p><strong>Name:</strong> $name2</p>";
            echo "<p><strong>Age:</strong> $age2</p>";
            echo "<p><strong>Address:</strong> $address2</p>";
            ?>
            <div class="social-links">
                <a href="<?php echo $linkedin2; ?>"><img src="linkedin.png" alt="LinkedIn"></a>
                <a href="<?php echo $github2; ?>"><img src="github.png" alt="GitHub"></a>
                <a href="<?php echo $coursera2; ?>"><img src="learning.png" alt="Learning"></a>
            </div>
        </div>
    </div>
</div>

<!-- Team Member 4 -->
<div class="profile" id="Mem3">
    <img src="<?php echo $image3; ?>" alt="Picture 4">
    <div class="profile-content">
        <h2><?php echo $name3; ?></h2>
        <p>Hi, I’m Christian III! I’m hardworking, polite, and friendly. I enjoy meeting new people and creating a welcoming atmosphere.</p>
        <button onclick="toggleDetails(this)">View Profile</button>

        <!-- Hidden drop-down details -->
        <div class="profile-details">
            <?php
            echo "<p><strong>Name:</strong> $name3</p>";
            echo "<p><strong>Age:</strong> $age3</p>";
            echo "<p><strong>Address:</strong> $address3</p>";
            ?>
            <div class="social-links">
                <a href="<?php echo $linkedin3; ?>"><img src="linkedin.png" alt="LinkedIn"></a>
                <a href="<?php echo $github3; ?>"><img src="github.png" alt="GitHub"></a>
                <a href="<?php echo $coursera3; ?>"><img src="learning.png" alt="Learning"></a>
            </div>
        </div>
    </div>
</div>

<!-- Team Member 5 -->
<div class="profile" id="Mem4">
    <img src="<?php echo $image4; ?>" alt="Profile Picture 3">
    <div class="profile-content">
        <h2><?php echo $name4; ?></h2>
        <p>Hi, I’m Salve Barbacena! I’m kind, polite, and love meeting new people. I strive to create a friendly atmosphere where everyone feels welcome.</p>
        <button onclick="toggleDetails(this)">View Profile</button>

        <!-- Hidden drop-down details -->
        <div class="profile-details">
            <?php
            echo "<p><strong>Name:</strong> $name4</p>";
            echo "<p><strong>Age:</strong> $age4</p>";
            echo "<p><strong>Address:</strong> $address4</p>";
            ?>
            <div class="social-links">
                <a href="<?php echo $linkedin4; ?>"><img src="linkedin.png" alt="LinkedIn"></a>
                <a href="<?php echo $github4; ?>"><img src="github.png" alt="GitHub"></a>
                <a href="<?php echo $coursera4; ?>"><img src="learning.png" alt="Learning"></a>
            </div>
        </div>
    </div>
</div>

    <script>
        function toggleDetails(button) {
            var details = button.nextElementSibling;
            if (details.style.display === "none" || details.style.display === "") {
                details.style.display = "block";
            } else {
                details.style.display = "none";
            }
        }
    </script>
    </body>
    <footer>
        <div class="container">
            <p>&#169; 2024 Group Nine. All Rights Reserved.</p>
            <div class="social-links">
                <a href="#"><img src="facebook.png" alt="Facebook"></a>
                <a href="#"><img src="twitter.png" alt="Twitter"></a>
                <a href="#"><img src="instagram.png" alt="instagram"></a>
            </div>
        </div>
    </footer>
</html>