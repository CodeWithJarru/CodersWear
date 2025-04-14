<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .about-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            
            width: 40%;
            margin: 20px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .about-section h2 {
            text-align: center;
            color: #333;
        }
        .about-section p {
            text-align: center;
            color: #555;
            line-height: 1.6;
        }
        .about-section a {
            display: inline-block;
            margin: 10px auto;
            text-align: center;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .about-section a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Online Selling About Section -->
        <div class="about-section">
            <h2>About Selling</h2>
            <p>Join us as a seller to showcase your products to a wide audience. Create your store and start selling luxury items coding with ease.</p>
            <a href="seller.php">Create Now</a>
        </div>
        
        <!-- Online Buying About Section -->
        <div class="about-section">
            <h2>About Buying</h2>
            <p>Sign up as a buyer to explore and purchase coding items from trusted sellers. Enjoy a seamless and secure shopping experience.</p>
            <a href="buyer.php">Create Now</a>
        </div>
    </div>
</body>
</html>
