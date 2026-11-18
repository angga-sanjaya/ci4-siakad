<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'SIAKAD') ?></title>

    <link rel="icon" type="image/png" href="<?= base_url('images/Logo.png') ?>">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
        }

        header {
            background: #173b65;
            color: white;
            padding: 20px;
        }

        nav {
            background: #24588b;
            padding: 12px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            padding: 25px;
            min-height: 350px;
            background: white;
            margin: 20px;
        }

        footer {
            background: #173b65;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .site-header .brand {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .brand-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            border-radius: 8px;
            padding: 6px 10px;
            flex-shrink: 0;
        }

        .brand-logo img {
            display: block;
            height: 44px;
            width: auto;
        }

        .brand-text h2,
        .brand-text p {
            margin: 0;
        }

        .brand-text h2 {
            line-height: 1.2;
        }

        .brand-text p {
            margin-top: 4px;
            opacity: .85;
            font-size: .95rem;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .footer-inner p {
            margin: 0;
        }

        .footer-logo {
            height: 34px;
            width: auto;
            background: #fff;
            border-radius: 4px;
            padding: 3px 5px;
        }

        @media (max-width: 600px) {
            .brand-logo img {
                height: 34px;
            }

            .brand-text h2 {
                font-size: 1.15rem;
            }
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #e9eff6;
        }
    </style>
</head>

<body>

    <header class="site-header">
        <div class="brand">
            <span class="brand-logo">
                <img src="<?= base_url('images/logo-itm1.png') ?>" alt="Logo ITM">
            </span>
            <span class="brand-text">
                <h2>Sistem Informasi Akademik</h2>
                <p>Program Studi Sistem Informasi</p>
            </span>
        </div>
    </header>

    <nav>
        <a href="<?= site_url('/') ?>">Beranda</a>
        <a href="<?= site_url('mahasiswa') ?>">Mahasiswa</a>
        <a href="<?= site_url('dosen') ?>">Dosen</a>
        <a href="<?= site_url('mata-kuliah') ?>">Mata Kuliah</a>
        <a href="<?= site_url('tentang') ?>">Tentang</a>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <div class="footer-inner">
            <img src="<?= base_url('images/Logo.png') ?>"
                 alt="Logo ITM"
                 class="footer-logo">
            <p>Praktikum Pemrograman Web II - SIAKAD</p>
        </div>
    </footer>

</body>
</html>