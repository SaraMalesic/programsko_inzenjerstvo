<h1>Dodaj obavezu</h1>
<p>Kolegij:<strong> <?php echo $naziv; ?></strong></p>


<?php echo validation_errors('<p class="text-error">'); ?>
<?php echo form_open('obaveze/unos/'.$this->uri->segment(3).''); ?>


<p>
<?php echo form_label('Obaveza:'); ?>
<?php
$data = array(
              'name'        => 'naziv_obaveze',
              'value'       => set_value('naziv_obaveze')
            );
?>
<?php echo form_input($data); ?>
</p>


<p>
<?php echo form_label('Opis:'); ?>
<?php
$data = array(
              'name'        => 'opis',
              'value'       => set_value('opis')
            );
?>
<?php echo form_textarea($data); ?>
</p>


<p>
<?php echo form_label('Datum:'); ?>
<input type="date" name="datum" />
</p>


<?php $data = array("value" => "Dodaj obavezu",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>
