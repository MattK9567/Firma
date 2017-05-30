<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <h2>das</h2>
        <div class="page-header">
            <h1>Rezervácia číslo: <small><?php echo $title; ?></small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php foreach ($rezervacie as $key => $value): ?>
                    <div>
                        <dl>
                            <dt><strong><?php echo $key; ?></strong>  <?php echo $value ?></dt>
                        </dl>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Späť</button>
        </div>
    </div>
</div>
