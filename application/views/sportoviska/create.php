<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <h2>das</h2>
        <div class="page-header">
            <h1>Pridanie športoviska: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo form_open('sportoviska/create',array('class'=>'form-horizontal')); ?>
            <div class="form-group">
                <?php if (isset($message)) { ?>
                    <CENTER><h3 style="color:green;">Dáta úspešne vložené</h3></CENTER><br>
                <?php } ?>
                <div class="form-group">
                    <div class="col-sm-10">
                        <?php echo form_label('Názov :'); ?> <?php echo form_error('dnazov'); ?><br />
                        <?php echo form_input(array('id' => 'dnazov', 'name' => 'dnazov')); ?><br />

                        <?php echo form_label('ID typu športoviska :'); ?> <?php echo form_error('dtyp_sportoviska_ID'); ?><br />
                        <?php echo form_input(array('id' => 'dtyp_sportoviska_ID', 'name' => 'dtyp_sportoviska_ID')); ?><br /><br />

                        <a class="btn btn-default" href="<?php echo base_url()."index.php/Sportoviska"; ?>">Späť</a>
                        <?php echo form_submit(array('class' =>'btn btn-primary', 'id' => 'submit', 'value' => 'Vložiť')); ?>
                        <?php echo form_close(); ?><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
