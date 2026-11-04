<h2>Daftar Produk</h2><div class="panel table-wrap"><table><thead><tr><th>Nama Produk</th><th>Harga</th><th>Stok</th><th>Kategori</th></tr></thead><tbody>
<?php foreach($products as $p): ?><tr><td><?= htmlspecialchars($p['name']) ?></td><td>Rp <?= number_format((float)$p['price'],0,',','.') ?></td><td><?= (int)$p['stock'] ?></td><td><?= htmlspecialchars($p['category_name'] ?? '-') ?></td></tr><?php endforeach; ?>
</tbody></table></div>
