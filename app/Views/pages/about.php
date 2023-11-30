<?php $this->extend('layout/template.php'); ?>

<?php $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>About Me</h1>
            <p>there is a comment in Routes.php that mentioned The Auto Routing (Legacy) is very dangerous. If you want
                to enable it, don't forget to set $autoRoutesImproved = true; in app/Feature.php . Not sure why is the
                improved one not set to true by default
                Anggara
                Jul 15 at 18:14</p>
            <?php d($arrayKU); ?>
        </div>
    </div>
</div>
<?php $this->endSection() ?>