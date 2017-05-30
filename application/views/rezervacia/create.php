<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <h2>das</h2>
        <div class="page-header">
            <h1>Pridanie rezervácie: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo form_open('rezervacia/create',array('class'=>'form-horizontal')); ?>
            <div class="form-group">
                <?php if (isset($message)) { ?>
                    <CENTER><h3 style="color:green;">Dáta úspešne vložené</h3></CENTER><br>
                <?php } ?>
                <div class="form-group">
                    <div class="col-sm-10">
                        <?php echo form_label('Športovisko :'); ?> <?php echo form_error('dsportoviska_ID'); ?><br />
                        <?php echo form_input(array('id' => 'dsportoviska_ID', 'name' => 'dsportoviska_ID')); ?><br />

                        <?php echo form_label('Status rezervácie :'); ?> <?php echo form_error('dstatus_rezervacie_ID'); ?><br />
                        <?php echo form_input(array('id' => 'dstatus_rezervacie_ID', 'name' => 'dstatus_rezervacie_ID')); ?><br />

                        <?php echo form_label('Zákazník :'); ?> <?php echo form_error('dzakaznici_ID'); ?><br />
                        <?php echo form_input(array('id' => 'dzakaznici_ID', 'name' => 'dzakaznici_ID')); ?><br />

                        <?php echo form_label('Dátum :'); ?> <?php echo form_error('ddatum'); ?><br />
                        <?php echo form_input(array('id' => 'ddatum', 'name' => 'ddatum')); ?><br />

                        <?php echo form_label('Cena :'); ?> <?php echo form_error('dcena'); ?><br />
                        <?php echo form_input(array('id' => 'dcena', 'name' => 'dcena')); ?><br />

                        <?php echo form_label('Čas :'); ?> <?php echo form_error('dcas'); ?><br />
                        <?php echo form_input(array('id' => 'dcaso', 'name' => 'dcas')); ?><br /><br />

                        <a class="btn btn-default" href="<?php echo base_url()."index.php/Rezervacia"; ?>">Späť</a>
                        <?php echo form_submit(array('class' =>'btn btn-primary', 'id' => 'submit', 'value' => 'Vložiť')); ?>
                        <?php echo form_close(); ?><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
