<h2>ard</h2>
<div class="col-sm-3 col-md-12">
    <h1>Typy športovísk</h1>
    <div class = "row">
        <div class = "col-md-12">
            <!--Treba zmeniť dashboard na niečo iné-->
            <a href = "<?php echo base_url(); ?>Dashboard/addCustomer" class = "btn btn-primary pull-left">Pridať typ športoviska</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>#</th>
            <th>Názov</th>
            <th>Akcie</th>
            </thead>
            <tbody>
            <?php foreach ($typ_sportoviska as $typ_sportoviska_item): ?>
                <tr>
                    <td><?php echo $typ_sportoviska_item['ID']; ?></td>
                    <td><?php echo $typ_sportoviska_item['nazov']; ?></td>
                    <td>
                        <a class="btn btn-info btn-xs" href="<?php echo site_url('typ_sportoviska/view'.$typ_sportoviska_item['ID']); ?>">View</a>
                        <a class="btn btn-success btn-xs" href="<?php echo site_url('typ_sportoviska/edit'.$typ_sportoviska_item['ID']); ?>">Edit</a>
                        <a class="btn btn-warning btn-xs" href="<?php echo site_url('typ_sportoviska/delete'.$typ_sportoviska_item['ID']); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
