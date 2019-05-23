<h1>Izmijeni kolegij</h1>
<?php echo validation_errors('<p class="text-error">'); ?>
 <?php echo form_open('kolegiji/izmjena/'.$ovaj_kolegij->idKolegija.''); ?>

<p>
<?php echo form_label('Naziv kolegija:'); ?>
<?php
$data = array(
              'name'        => 'naziv',
              'value'       => $ovaj_kolegij->naziv
            );
?>
<?php echo form_input($data); ?>
</p>

<p>
<?php echo form_label('Godina:'); ?>
<?php
$data = array(
              'name'        => 'godina',
              'value'       => $ovaj_kolegij->godina
            );
?>
<?php echo form_input($data); ?>
</p>

<p>
<?php echo form_label('Profesor:'); ?>
<?php
$data = array(
              'name'        => 'profesor',
              'value'       => $ovaj_kolegij->profesor
            );
?>
<?php echo form_input($data); ?>
</p>


<?php $data = array("value" => "Izmijeni",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>