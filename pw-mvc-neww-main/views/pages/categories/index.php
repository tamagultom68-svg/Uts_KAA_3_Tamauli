<?php /** @var array $categories */ ?>
<h2>Daftar Kategori</h2>

<table border="1" cellpadding="6">
    <?php foreach ($categories as $i => $row): ?>
        <?php if ($i === 0): ?>
            <tr>
                <?php foreach (array_keys($row) as $col): ?>
                    <th><?= htmlspecialchars($col) ?></th>
                <?php endforeach; ?>
            </tr>
        <?php endif; ?>
        <tr>
            <?php foreach ($row as $val): ?>
                <td><?= htmlspecialchars((string)$val) ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>