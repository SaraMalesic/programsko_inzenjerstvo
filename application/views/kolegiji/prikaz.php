<div style="position:absolute; left:1400px; top:30px;"><ul id="actions">
    <h4>Kolegij</h4>
    <li> <a href="<?php echo base_url(); ?>obaveze/add/<?php echo $kolegij->idKolegija; ?>">Dodaj obavezu</a></li> 
    <li> <a href="<?php echo base_url(); ?>kolegiji/izmjena/<?php echo $kolegij->idKolegija; ?>">Uredi kolegij</a></li> 
    <li> <a onclick="return confirm('Da li ste sigurni?')" href="<?php echo base_url(); ?>kolegiji/delete/<?php echo $kolegij->idKolegija; ?>">Obrisi kolegij</a></li>
</ul>
</div>
<h1><?php echo $kolegij->naziv; ?></h1>
<p style="max-width:500px;">Godina: <?php echo $kolegij->godina; ?></p>
<p style="max-width:500px;">Profesor: <?php echo $kolegij->profesor; ?></p>

<br /><br />
