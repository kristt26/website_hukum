<?= $this->extend('home/layout') ?>
<?= $this->section('content') ?>
<h1>struktur kurikulum program studi hukum</h1>
<div class="scrollable">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Kode</th>
                <th>Matakuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matakuliah as $key=>$value) : ?>
                <tr>
                    <td><?= $key+1;?></td>
                    <td><?= $value->jenis?></td>
                    <td><?= $value->kode?></td>
                    <td><?= $value->matakuliah?></td>
                    <td><?= $value->sks?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>