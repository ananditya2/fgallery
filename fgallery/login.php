<?php
    session_start();
    if (isset($_SESSION['userid'])) {
        header('location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Tambahkan link untuk ikon Font Awesome -->
    <title>Halaman Login</title>
    <style>
        body, h1, h2, h3, p, ul, li, table, th, td {
            margin: 0 auto;
            padding: 0;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f4f4f4;
            color: #333;
            background-image: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #000000;
        }

        form {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="submit"] {
            width: 100%; 
            padding: 10px; 
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #000000;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #333333;
        }

        @media (max-width: 600px) {
            ul li {
                display: block;
                margin-bottom: 10px;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Login</h1>
        <form action="proses_login.php" method="post">
            <table>
                <tr>
                    <td><b><i class="fas fa-user"></i> Username</b></td> 
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><b><i class="fas fa-lock"></i> Password</b></td> 
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
        <p style="text-align: center;">Don't have an account? <a href="register.php">Create Account</a></p>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form')
        form.addEventListener('submit', (e) => {
            alert('Apakah Anda Ingin Login')
        })
    })
</script>
</html>
