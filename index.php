<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design PC</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 1000px;
            margin: 0 auto;
        }

        .pc {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .display {
            width: 100%;
            height: 300px;
            background-color: #000;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .keyboard {
            width: 100%;
            height: 50px;
            background-color: #222;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .keyboard div {
            float: left;
            width: 50px;
            height: 50px;
            background-color: #333;
            margin-right: 10px;
            text-align: center;
            line-height: 50px;
            border-radius: 5px;
        }

        .mouse {
            width: 50px;
            height: 50px;
            background-color: #222;
            margin-bottom: 20px;
            border-radius: 50%;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="pc">
            <div class="display"></div>
            <div class="keyboard">
                <div>A</div>
                <div>S</div>
                <div>D</div>
                <div>F</div>
                <div>G</div>
                <div>H</div>
                <div>J</div>
                <div>K</div>
                <div>L</div>
            </div>
            <div class="mouse"></div>
        </div>
        <div class="footer">Powered by HTML, CSS, and JavaScript</div>
    </div>
</body>
</html>