<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Data Kontak</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/contact.css" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div>
    </header>

    <main>
        <section id="contact-data">
            <h1 class="heading">Data <span>Kontak</span></h1>
            <div class="contact-data-container">
                <?php
                $file = "data/data_contact.txt";
                if (file_exists($file)) {
                    $lines = file($file);
                    echo "<table>";
                    echo "<tr><th>Nama</th><th>Email</th><th>Subjek</th><th>Nomor Telepon</th><th>Pesan</th></tr>";
                    foreach ($lines as $line) {
                        $parts = explode("|", trim($line));
                        echo "<tr>";
                        foreach ($parts as $part) {
                            echo "<td>" . htmlspecialchars($part) . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No contact data found.</p>";
                }
                ?>
            </div>
        </section>
    </main>
</body>

</html>