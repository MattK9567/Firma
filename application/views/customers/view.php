<?php if (!defined( 'BASEPATH')) exit('Prístup zamietnutý'); ?>

<div class="container">
    <div class="row">
        <div class="page-header">
            <h1><?php echo $title ?> <small><?php echo $subtitle ?></small></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php foreach ($zakaznici as $key => $value): ?>
                    <div>
                        <dl>
                            <dt><?php echo $key ?></dt>
                            <dt><?php echo $value ?></dt>
                        </dl>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-default" onclick="javascript:window.history.go(-1);">Back</button>
        </div>
    </div>

    <div class="row">

    </div>
</div>