<h2>ard</h2>
<div class="col-sm-3 col-md-12">
    <h1>Športoviská</h1>
    <div class = "row">
        <div class = "col-md-12">
            <!--Treba zmeniť dashboard na niečo iné-->
            <a href = "<?php echo base_url(); ?>Dashboard/addCustomer" class = "btn btn-primary pull-left">Pridať športovisko</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Názov</th>
                <th>Typ športoviska</th>
                <th>Akcie</th>
            </thead>
            <tbody>
            <?php foreach ($sportoviska as $sportoviska_item): ?>
                <tr>
                    <td><?php echo $sportoviska_item['ID']; ?></td>
                    <td><?php echo $sportoviska_item['nazov']; ?></td>
                    <td><?php echo $sportoviska_item['typ_sportoviska_ID']; ?></td>
                    <td>
                        <a class="btn btn-info btn-xs" href="<?php echo site_url('sportoviska/view'.$sportoviska_item['ID']); ?>">View</a>
                        <a class="btn btn-success btn-xs" href="<?php echo site_url('sportoviska/edit'.$sportoviska_item['ID']); ?>">Edit</a>
                        <a class="btn btn-warning btn-xs" href="<?php echo site_url('sportoviska/delete'.$sportoviska_item['ID']); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
