<h1>Popis kolegija</h1>
<?php if($this->session->flashdata('kolegij_kreiran')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('kolegij_kreiran') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('kolegij_obrisan')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('kolegij_obrisan') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('kolegij_izmijenjen')) : ?>
    <?php echo '<p class="text-success">' .$this->session->flashdata('kolegij_izmijenjen') . '</p>'; ?>
<?php endif; ?>

<ul class="list_items">
<?php foreach ($kolegiji as $kolegij) : ?>
    <li>
        <div class="naziv"><a href="<?php echo base_url(); ?>kolegiji/prikaz/<?php echo $kolegij->idKolegija; ?>"><?php echo $kolegij->naziv; ?></a></div>
        <div class="profesor"><?php //echo $kolegij->profesor; ?></div>
    </li>
<?php endforeach; ?>
</ul>
    <br />
<p>Kako bi kreirano novi kolegij - <a href="<?php echo base_url(); ?>kolegiji/unos">Klikni ovdje</a>