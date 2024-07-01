<?php
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta name="theme-color" content="#131318">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-widht, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="shortcut icon" type="image/webp" href="https://animiku.cc/templates/anime/images/logo.webp">
    <link rel="apple-touch-icon" href="https://animiku.cc/templates/anime/images/logo.webp">
    <link rel="apple-touch-icon" sizes="76x76" href="https://animiku.cc/templates/anime/images/logo.webp">
    <link rel="apple-touch-icon" sizes="120x120" href="https://animiku.cc/templates/anime/images/logo.webp">
    <link rel="apple-touch-icon" sizes="152x152" href="https://animiku.cc/templates/anime/images/logo.webp">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body 
        {
            background-color: #131318;
            font-family: sans-serif;
            line-height: 1;
        }
        h1 
        {
            color: #fff;
            font-size: 7em;
        }
        h2
        {
            color: #dfdfdf;
            font-size: 2em;
        }
        h3 {
            font-size: 1.5em;
            color: #ffffff;
        }

        h4 {
            font-size: 1em;
            margin-top: 5px;
            color: #dfdfdf;
        }

        .error-container {
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
        }

        .error-block-1 {
            text-align: center;
        }

        .h3-h4 {
            text-align: center;
            background-color: #232329;
            margin-top: 15px;
            padding: 15px;
            border-radius: 15px;
        }

        .btn {
            display: inline-flex;
            margin-top: 15px;
        }
        
        .links {
            border-radius: 0.35rem;
            color: #ffffff;
            padding: 10px 25px;
            background: linear-gradient(to right, #006c9a, #00e2d7c0);
            text-shadow: 0 0 10px #000;
            text-decoration: none;
            margin-left: 5px;
            margin-right: 5px;
        }

        a {
            color: #fff;
            padding: 10px 0px 8px 10px;
            font-size: 0.9em;
            text-decoration: underline #808080;
        }

        .error-logo {
            display: flex;
            justify-content: center;
        }

        .error-logo img {
            width: 350px;
            height: 350px;
        }

        @media (max-width: 360px) {
            .error-logo img {
                width: 200px;
                height: 200px;
            }

            h1 
            {
                color: #fff;
                font-size: 5em;
            }
            h2
            {
                color: #dfdfdf;
                font-size: 1.2em;
            }
            h3 {
                font-size: 1em;
                color: #ffffff;
            }

            h4 {
                margin-top: 5px;
                color: #dfdfdf;
            }
        }

    </style>
    <title>ANIMIKU - Нет Доступа</title>
</head>
<body>
    <div class="error-container">
        <div class="error">
            <div class="error-logo">
                <img src="https://animiku.cc/templates/anime/images/error.png">
            </div>
            <div class="error-block-1">
                <h1>Упс!</h1>
                <div class="">
                    <div class="h3-h4">
                        <h2>Вам пока сюда нельзя (～￣▽￣)～</h2>
                    </div>
                </div>
                <div class="btn">
                    <a class="links" href="https://discord.com/invite/BXGzzWx7HN">Discord</a>
                    <a class="links" href="https://animiku.cc">На главную</a>
                    <a class="links" href="https://t.me/+6LuEyk6ckwU0MDMy">Telegram</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>