<?= $this->extend('home/layout') ?>
<?= $this->section('content') ?>
<h1>DAFTAR CAPAIAN PEMBELAJARAN LULUSAN studi hukum</h1>
<div class="scrollable">
    <table>
        <thead>
            <tr>
                <th>KODE</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cpl as $unsur) : ?>
                <tr>
                    <td colspan="2" align="center"><?= $unsur->unsur?></td>
                </tr>
                <?php foreach ($unsur->cpl as $value) : ?>
                    <tr>
                        <td><?= $value->kode?></td>
                        <td><?= $value->cpl?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>