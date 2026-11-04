<nav>
    <a href="./">Home</a> |
    <a href="products">Produk</a> |
    <a href="categories">Kategori</a> |
    <a href="about">Tentang</a> |
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="logout">Logout (<?= htmlspecialchars($_SESSION['username'] ?? '') ?>)</a>
    <?php else: ?>
        <a href="login">Login</a> |
        <a href="register">Daftar</a>
    <?php endif; ?>
</nav>