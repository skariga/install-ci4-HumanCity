<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">        
        <div class="col">
            <h1>Contact Me</h1>
            <p>NO WA : 08582736273</p>
            <?php foreach($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe'];?></li>
                    <li><?= $a['alamat'];?></li>
                    <li><?= $a['kota'];?></li>
                </ul>
                <?php endforeach;?> 
</div>
</div>        
</div>
<?= $this->endSection('');?>