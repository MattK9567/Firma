<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <h2>das</h2>
        <div class="page-header">
            <h1><?php echo $title; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>x</button>
                    <strong>Varovanie!</strong> <?php echo  validation_errors(); ?>
                </div>
                <?php
            endif;
            echo form_open('rezervacia/edit/'.$rezervacie['ID'],array('class'=>'form-horizontal')); ?>
            <div class="form-group">
                <?php foreach ($rezervacie as $key => $value): ?>
                    <div class="form-group">
                        <label for="<?php echo $key; ?>" class="col-sm-2 control-label"><?php echo $key;?></label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control" id="<?php echo $key; ?>" value="<?php echo $value; ?>"
                                   placeholder="<?php echo $value; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-sm-offset-2 col-sm-10">
                    <a class="btn btn-default" href="<?php echo base_url()."index.php/Rezervacia"; ?>">Späť</a>
                    <input type="submit" class="btn btn-primary" name="submit" value="Editovať">
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
