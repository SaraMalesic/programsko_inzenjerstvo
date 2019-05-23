<div style="position:absolute; left:1400px; top:30px;"><ul id="actions">
    <h4>Obaveze</h4>  
    <li> <a href="<?php echo base_url(); ?>obaveze/unos/<?php echo $obaveza->idKolegija; ?>">Dodaj obavezu</a></li> 
    <li> <a href="<?php echo base_url(); ?>obaveze/izmjena/<?php echo $obaveza->idObaveze; ?>">Izmijeni obavezu</a></li> 
    <?php if($status) : ?>
        <li> <a href="<?php echo base_url(); ?>obaveze/oznaci_neizvrseno/<?php echo $obaveza->idObaveze; ?>">Nova</a></li> 
    <?php else : ?>
        <li> <a href="<?php echo base_url(); ?>tasks/oznaci_izvrseno/<?php echo $obaveza->idObaveze; ?>">Izvršena</a></li> 
    <?php endif; ?>
    <li> <a onclick="return confirm('Da li ste sigurni?')" href="<?php echo base_url(); ?>obaveze/brisanje/<?php echo $obaveza->idKolegija; ?>/<?php echo $this->uri->segment(3); ?>">Obrisi obavezu</a></li>
</ul>
</div>
<h1><?php echo $obaveza->naziv_obaveze; ?></h1>
<ul id="info">
  <?php if($obaveza->status == 0) : ?>
    <li>Status: <strong>Neizvršena</strong></li>
<?php else : ?>
    <li>Status: <strong>Izvršena</strong></li>
<?php endif; ?>
    <li>Datum: <strong><?php echo date("n-j-Y",strtotime($obaveza->datum)); ?></strong></li>
</ul><br />
<div style="max-width:500px;"><?php echo $obaveza->opis; ?></div>
<br /><hr />