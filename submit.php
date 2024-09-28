<?php
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   echo "Hello, " . $name . "! Your email is " . $email;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Submitted Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .data-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .data-header {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
        .data-card {
            background-color: #e9ecef;
            border: none;
            border-radius: 8px;
        }
        .data-card .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="data-container">
        <h2 class="data-header">Submitted Data</h2>
        <div class="card data-card">
            <div class="card-body">
                <h5 class="card-title">Full Name</h5>
                <p class="card-text" id="displayName"><?php echo $_POST['name'] ?></p>
                <h5 class="card-title">Email Address</h5>
                <p class="card-text" id="displayEmail"><?php echo $_POST['email'] ?></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simulate form submission
        document.addEventListener('DOMContentLoaded', function () {
            // For demonstration, assume these values were submitted via form
            const name = "Jane Smith";
            const email = "jane.smith@example.com";

            // Update the display fields with the submitted data
            document.getElementById("displayName").textContent = name;
            document.getElementById("displayEmail").textContent = email;
        });
    </script> -->
</body>
</html>

