<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <!-- Bootstrap CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        
        .error-container {
            text-align: center;
            margin-top: 100px;
            animation: bounce 1s infinite alternate; /* Tambahkan animasi bounce */
            color: #fff; /* Warna teks untuk kontras */
            padding: 50px;
        }
        .error-code {
            font-size: 3em;
            color: #dc3545;
            margin-bottom: 10px;
        }
        .error-message {
            font-size: 1.5em;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .back-btn {
            font-size: 1.2em;
        }
        .error-icon {
            font-size: 4em;
            color: #dc3545;
            margin-bottom: 20px;
        }
        @keyframes bounce {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        .animated {
            animation: fadeIn 1s;
        }
    </style>
</head>
<body>
    <div class="container error-container">
        <div class="text-center animated">
            <i class="fas fa-exclamation-triangle error-icon"></i>
            <h1 class="error-code">404</h1>
            <p class="error-message">Halaman tidak ditemukan</p>
            <a href="?page=pages/dashboard" class="btn btn-primary back-btn">Kembali ke Halaman Utama</a>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
</body>
</html>
