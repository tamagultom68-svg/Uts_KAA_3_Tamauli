<div class="auth-wrap"><section class="auth-card"><div class="brand-mark">MS</div><h2>Login Admin</h2><p class="muted">Masuk untuk mengelola toko Anda</p>
<?php if(!empty($error)): ?><div class="alert"><?= htmlspecialchars($error) ?></div><?php endif; ?>
<form method="POST" action="login"><label>Username</label><input type="text" name="username" required autofocus placeholder="Masukkan username">
<label>Password</label><input type="password" name="password" required placeholder="Masukkan password"><button class="btn primary full" type="submit">Masuk Dashboard</button></form>
<p class="muted small">Belum memiliki akun? <a href="register">Daftar akun admin</a></p></section></div>
