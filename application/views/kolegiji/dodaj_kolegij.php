<h1>Dodaj kolegij</h1>
<p>Popunite sva polja kako bi kreirali novi kolegij</p>
<?php echo validation_errors('<p class="text-error">'); ?>
 <?php echo form_open('kolegiji/unos'); ?>
<p>
<?php echo form_label('Naziv:'); ?>
<?php
$data = array(
              'name'        => 'naziv',
              'value'       => set_value('naziv')
            );
?>
<?php echo form_input($data); ?>
</p>

<p>
<?php echo form_label('Godina:'); ?>
<?php
$data = array(
              'name'        => 'godina',
              'value'       => set_value('godina')
            );
?>
<?php echo form_input($data); ?>
</p>

<p>
<?php echo form_label('Profesor:'); ?>
<?php
$data = array(
              'name'        => 'profesor',
              'value'       => set_value('profesor')
            );
?>
<?php echo form_input($data); ?>
</p>


<?php $data = array("value" => "Dodaj kolegij",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>