<h2>Daftar Akun</h2>

<?php if (!empty($error)): ?>
    <p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="POST">
    <p>
        <label>Username</label><br>
        <input type="text" name="username" value="<?= htmlspecialchars($old ?? '') ?>" required>
    </p>
    <p>
        <label>Password</label><br>
        <input type="password" name="password" required>
    </p>
    <p>
        <label>Konfirmasi Password</label><br>
        <input type="password" name="confirm" required>
    </p>
    <button type="submit">Daftar</button>
</form>

<p>Sudah punya akun? <a href="login">Login</a></p>