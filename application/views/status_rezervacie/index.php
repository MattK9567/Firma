<h2>ard</h2>
<div class="col-sm-3 col-md-12">
    <h1>Status rezervácie</h1>
    <div class = "row">
        <div class = "col-md-12">
            <!--Treba zmeniť dashboard na niečo iné-->
            <a href = "<?php echo base_url(); ?>Dashboard/addCustomer" class = "btn btn-primary pull-left">Pridať status rezervácie</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>#</th>
            <th>status</th>
            <th>Akcie</th>
            </thead>
            <tbody>
            <?php foreach ($status_rezervacie as $status_rezervacie_item): ?>
                <tr>
                    <td><?php echo $status_rezervacie_item['ID']; ?></td>
                    <td><?php echo $status_rezervacie_item['status']; ?></td>
                    <td>
                        <a class="btn btn-info btn-xs" href="<?php echo site_url('status_rezervacie/view'.$status_rezervacie_item['ID']); ?>">View</a>
                        <a class="btn btn-success btn-xs" href="<?php echo site_url('status_rezervacie/edit'.$status_rezervacie_item['ID']); ?>">Edit</a>
                        <a class="btn btn-warning btn-xs" href="<?php echo site_url('status_rezervacie/delete'.$status_rezervacie_item['ID']); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
