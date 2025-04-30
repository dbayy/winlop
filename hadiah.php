<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadiah Spesial</title>
    <style>
        body {
            background: linear-gradient(to right, #ffe6e6, #ffcccc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 600px;
            width: 100%;
            animation: fadeIn 1.2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }

        h1 {
            color: #e6005c;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        .gift-box {
            width: 150px;
            height: 150px;
            background-color: #ffcccb;
            border: 5px solid #ff6b81;
            border-radius: 10px;
            margin: 0 auto;
            position: relative;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: transform 0.5s ease;
        }

        .gift-box.open {
            transform: scale(1.2);
            border: 5px solid #e6005c;
        }

        .gift-box.open .flower {
            display: block;
            animation: flowerAnimation 1s forwards;
        }

        .flower {
            display: none;
            font-size: 60px;
            color: #ff6b81;
            position: absolute;
            top: -60px;
            left: 50%;
            transform: translateX(-50%);
        }

        @keyframes flowerAnimation {
            0% {
                top: -60px;
                opacity: 0;
            }
            100% {
                top: 30px;
                opacity: 1;
            }
        }

        p {
            font-size: 18px;
            color: #333;
            margin-top: 30px;
        }

        /* Media Queries for smaller screens */
        @media (max-width: 768px) {
            .card {
                padding: 30px;
            }

            h1 {
                font-size: 1.5em;
            }

            .gift-box {
                width: 120px;
                height: 120px;
            }

            .flower {
                font-size: 50px;
            }

            p {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .card {
                padding: 20px;
            }

            h1 {
                font-size: 1.2em;
            }

            .gift-box {
                width: 100px;
                height: 100px;
            }

            .flower {
                font-size: 40px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Buat kamu💖</h1>

        <div class="gift-box" id="giftBox">
            <div class="flower">🌸</div>
        </div>

        <script>
            const giftBox = document.getElementById("giftBox");
            giftBox.addEventListener("click", function() {
                giftBox.classList.toggle("open");
            });
        </script>
    </div>
</body>
</html>
