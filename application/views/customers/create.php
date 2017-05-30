<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <h2>das</h2>
        <div class="page-header">
            <h1>Pridanie zákazníka: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo form_open('customers/create',array('class'=>'form-horizontal')); ?>
            <div class="form-group">
            <?php if (isset($message)) { ?>
                <CENTER><h3 style="color:green;">Dáta úspešne vložené</h3></CENTER><br>
            <?php } ?>
                <div class="form-group">
                    <div class="col-sm-10">
                        <?php echo form_label('Meno :'); ?> <?php echo form_error('dmeno'); ?><br />
                        <?php echo form_input(array('id' => 'dmeno', 'name' => 'dmeno')); ?><br />

                        <?php echo form_label('Priezvisko :'); ?> <?php echo form_error('dpriezvisko'); ?><br />
                        <?php echo form_input(array('id' => 'dpriezvisko', 'name' => 'dpriezvisko')); ?><br />

                        <?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
                        <?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

                        <?php echo form_label('Názov Firmy :'); ?> <?php echo form_error('dnazov_firmy'); ?><br />
                        <?php echo form_input(array('id' => 'dnazov_firmy', 'name' => 'dnazov_firmy')); ?><br /><br />

                        <a class="btn btn-default" href="<?php echo base_url()."index.php/Customers"; ?>">Späť</a>
                        <?php echo form_submit(array('class' =>'btn btn-primary', 'id' => 'submit', 'value' => 'Vložiť')); ?>
                        <?php echo form_close(); ?><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
