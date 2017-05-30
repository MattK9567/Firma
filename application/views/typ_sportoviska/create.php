<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <h2>das</h2>
        <div class="page-header">
            <h1>Pridanie typu športoviska: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo form_open('typ_sportoviska/create',array('class'=>'form-horizontal')); ?>
            <div class="form-group">
                <?php if (isset($message)) { ?>
                    <CENTER><h3 style="color:green;">Dáta úspešne vložené</h3></CENTER><br>
                <?php } ?>
                <div class="form-group">
                    <div class="col-sm-10">
                        <?php echo form_label('Názov :'); ?> <?php echo form_error('dnazov'); ?><br />
                        <?php echo form_input(array('id' => 'dnazov', 'name' => 'dnazov')); ?><br /><br />

                        <a class="btn btn-default" href="<?php echo base_url()."index.php/Typ_sportoviska"; ?>">Späť</a>
                        <?php echo form_submit(array('class' =>'btn btn-primary', 'id' => 'submit', 'value' => 'Vložiť')); ?>
                        <?php echo form_close(); ?><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
