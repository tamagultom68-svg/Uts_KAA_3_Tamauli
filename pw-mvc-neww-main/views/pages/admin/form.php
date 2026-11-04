<div class="page-heading"><div><p class="eyebrow">MANAJEMEN PRODUK</p><h2><?= $product ? 'Edit Produk' : 'Tambah Produk Baru' ?></h2><p class="muted">Lengkapi informasi produk di bawah ini.</p></div><a class="btn secondary" href="admin">← Kembali</a></div>
<section class="panel form-panel"><?php if($error): ?><div class="alert"><?= htmlspecialchars($error) ?></div><?php endif; ?>
<form method="POST" class="product-form">
<label>Nama Produk</label><input name="name" required maxlength="100" value="<?= htmlspecialchars($product['name'] ?? '') ?>" placeholder="Contoh: Laptop ASUS VivoBook">
<label>Harga (Rp)</label><input type="number" name="price" min="0" step="0.01" required value="<?= htmlspecialchars((string)($product['price'] ?? '')) ?>">
<label>Stok</label><input type="number" name="stock" min="0" required value="<?= htmlspecialchars((string)($product['stock'] ?? '0')) ?>">
<label>ID Kategori</label><select name="category_id"><option value="">Tanpa kategori</option>
<?php require __DIR__.'/../../../config/database.php'; foreach($pdo->query('SELECT id,name FROM categories ORDER BY name') as $cat): ?><option value="<?= (int)$cat['id'] ?>" <?= (string)($product['category_id'] ?? '')===(string)$cat['id']?'selected':'' ?>><?= htmlspecialchars($cat['name']) ?> (ID <?= (int)$cat['id'] ?>)</option><?php endforeach; ?>
</select><div class="form-actions"><button class="btn primary" type="submit"><?= $product ? 'Simpan Perubahan' : 'Simpan Produk' ?></button><a class="btn secondary" href="admin">Batal</a></div></form></section>
