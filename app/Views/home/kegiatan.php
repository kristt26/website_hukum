<?= $this->extend('home/layout') ?>
<?= $this->section('content') ?>
<?php foreach ($kegiatan as $key => $value) : ?>
    <article style="margin-bottom: 50px;">
        <h6 class="heading"><?= $value->kegiatan; ?></h6>
        <figure><img src="assets/berkas/akademik/<?= $value->foto; ?>" style="width: 100%;" alt=""></figure>
        <div class="excerpt">
            <ul class="nospace meta">
                <li><i class="fas fa-user rgtspace-5"></i>Admin</li>
            </ul>
            <p><?= $value->desc ?></p>
        </div>
        <hr>
    </article>
<?php endforeach; ?>
<?= $this->endSection() ?>