<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body, h1, h2, h3, p, ul, li, table, th, td {
            margin: 0 auto;
            padding: 50px;
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
            margin: 0 auto;
            padding: 0px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #000000;
        }

        /* Form Styles */
        form {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #000000;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="submit"] {
            width: 45%;
            padding: 5px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #000000;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #000000;
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
    <h1>Halaman Registrasi</h1>
    <form action="proses_registrasi.php" method="post">
    <table>
            <tr>
                <td><b>Username</b></td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td><b>Password</b></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><b>Nama Lengkap</b></td>
                <td><input type="text" name="namalengkap"></td>
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Registrasi"></td>
            </tr>
        </table>
    </form>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form')
        form.addEventListener('submit', (e) => {
            alert('Apakah Anda Ingin Melakukan Registrasi Sekarang?')
        })
    })
</script>

</html>