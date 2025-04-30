<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan Kasih Sayang</title>
    <style>
        body {
            background: linear-gradient(to right, #ffe6e6, #ffcccc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 600px;
            width: 100%;
            transform: translateY(100px);
            opacity: 0;
            animation: slideUp 1s ease-out forwards;
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h1 {
            color: #e6005c;
            font-size: 2em;
        }

        .typing {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
            min-height: 100px;
            white-space: pre-line;
        }

        .heart {
            font-size: 28px;
            color: red;
            margin-top: 20px;
        }

        .btn {
            display: none;
            margin-top: 25px;
            background-color: #e6005c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
        }

        /* Media Queries for smaller screens */
        @media (max-width: 768px) {
            .card {
                padding: 30px;
            }

            h1 {
                font-size: 1.8em;
            }

            .typing {
                font-size: 16px;
            }

            .btn {
                font-size: 14px;
                padding: 8px 16px;
            }
        }

        @media (max-width: 480px) {
            .card {
                padding: 20px;
            }

            h1 {
                font-size: 1.5em;
            }

            .typing {
                font-size: 14px;
            }

            .btn {
                font-size: 14px;
                padding: 8px 14px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>💖 Sayangku cintakuuu 💖</h1>
        <div class="typing" id="outputUcapan"></div>
        <div class="heart">❤️❤️❤️</div>
        <a href="hadiah.php" class="btn" id="btnHadiah">Lihat Hadiah 🎁</a>
    </div>

    <script>
        const teks = "Sayang,\nmakasi ya udah mau jadi pacarku, \nAstungkara kita bisa sama - sama terus, semoga kamu juga, \nkita saling percaya yaa, saling jaga komitmen \nkalo ada masalah selesaiin masalahnya, jangan hubungannya \nALOPYU PACAARKUUU <3💕";

        const output = document.getElementById("outputUcapan");
        const tombolHadiah = document.getElementById("btnHadiah");
        let i = 0;

        function ketik() {
            if (i < teks.length) {
                output.innerHTML += teks.charAt(i);
                i++;
                setTimeout(ketik, 40);
            } else {
                tombolHadiah.style.display = "inline-block";
            }
        }

        window.onload = () => {
            setTimeout(ketik, 800); // Tunggu animasi slide-up selesai
        };
    </script>
</body>
</html>
