<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">Kembali</a>
            </div>
        </div>
    </header>

    <main>
        <section id="login-form">
            <h1 class="heading">Form <span>Login</span></h1>
            <div class="login-container">
                <form id="loginForm" action="login.php" method="POST">
                    <input type="text" name="name" placeholder="Nama" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="number" name="phone" placeholder="Nomor Telepon" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
                    <button type="submit" class="action_btn">Login</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>