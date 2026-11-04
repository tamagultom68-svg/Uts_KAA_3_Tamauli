<div class="page-heading"><div><p class="eyebrow">ADMINISTRATOR</p><h2>Dashboard Admin</h2><p class="muted">Kelola produk MyStore dari satu halaman.</p></div><a class="btn primary" href="admin/create">+ Tambah Produk</a></div>
<div class="stat-card"><span>Total Produk</span><strong><?= (int)$total ?></strong></div>
<section class="panel"><div class="panel-heading"><h3>Daftar Produk</h3><span class="muted small">Kelola data produk aktif</span></div>
<div class="table-wrap"><table><thead><tr><th>No</th><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr></thead><tbody>
<?php if(empty($products)): ?><tr><td colspan="6" class="empty">Belum ada produk.</td></tr><?php endif; ?>
<?php foreach($products as $i=>$p): ?><tr><td><?= $i+1 ?></td><td><strong><?= htmlspecialchars($p['name']) ?></strong></td><td><?= htmlspecialchars($p['category_name'] ?? '-') ?></td><td>Rp <?= number_format((float)$p['price'],0,',','.') ?></td><td><?= (int)$p['stock'] ?></td><td class="actions"><a class="btn small-btn secondary" href="admin/edit?id=<?= (int)$p['id'] ?>">Edit</a><form method="POST" action="admin/delete" onsubmit="return confirm('Yakin ingin menghapus produk ini?')"><input type="hidden" name="id" value="<?= (int)$p['id'] ?>"><button class="btn small-btn danger" type="submit">Hapus</button></form></td></tr><?php endforeach; ?>
</tbody></table></div></section>
