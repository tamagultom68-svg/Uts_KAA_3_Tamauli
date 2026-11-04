<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title ?? 'MyStore') ?></title><base href="<?= htmlspecialchars(rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\\\') . '/') ?>"><link rel="stylesheet" href="css/style.css"></head>
<body><header class="site-header"><div><h1>MyStore</h1><p>Sistem Manajemen Toko</p></div></header>
<nav class="navbar"><a href="./">Beranda</a><a href="products">Produk</a><a href="categories">Kategori</a><a href="about">Tentang</a>
<?php if(isset($_SESSION['user_id'])): ?><a href="admin">Dashboard Admin</a><a href="logout">Logout (<?= htmlspecialchars($_SESSION['username']) ?>)</a>
<?php else: ?><a href="login">Login Admin</a><?php endif; ?></nav>
<main class="container"><?= $content ?></main>
<footer class="footer">© <?= date('Y') ?> MyStore</footer><script src="js/app.js"></script></body></html>
