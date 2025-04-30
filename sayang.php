<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salam Awal</title>
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
            width: 100%;
            animation: fadeIn 1s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        h1 {
            color: #e6005c;
            font-size: 2em;
        }
        p {
            color: #333;
            font-size: 18px;
        }
        .btn {
            margin-top: 20px;
            background-color: #e6005c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.1);
            background-color: #ff4c7a;
        }

        /* Media Queries for smaller screens */
        @media (max-width: 768px) {
            .card {
                padding: 30px;
            }

            h1 {
                font-size: 1.8em;
            }

            p {
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

            p {
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
        <h1>Hai, Sayang 💕</h1>
        <p>ada sesuatu nih...</p>
        <a href="ucapan.php" class="btn">love</a>
    </div>
</body>
</html>
