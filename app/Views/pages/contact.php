<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <?php foreach ($address as $addres): ?>
                <ul>
                    <li>
                        <?= $addres['nama']; ?>
                    </li>
                    <li>
                        <?= $addres['email']; ?>
                    </li>
                    <li>
                        <?= $addres['domisili']; ?>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>