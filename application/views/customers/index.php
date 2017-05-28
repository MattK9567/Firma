<h2>ard</h2>

<div class = "row">
    <div class = "col-md-12">
        <!--Treba zmeniť dashboard na niečo iné-->
        <a href = "<?php echo base_url(); ?>Dashboard/addCustomer" class = "btn btn-primary pull-left">Pridať zákazníka</a>
    </div>
</div>

<div class = "row">
    <div class = "col-md-12">
        <table class = "table table-stripped table-bordered">
            <thead>
                <th>#</th>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Email</th>
                <th>Názov firmy</th>
                <th>Akcie</th>
            </thead>
            <tbody>
                <?php foreach ($zakaznici as $customers_item): ?>
                <tr>
                    <td><?php echo $customers_item['ID']; ?></td>
                    <td><?php echo $customers_item['meno']; ?></td>
                    <td><?php echo $customers_item['priezvisko']; ?></td>
                    <td><?php echo $customers_item['email']; ?></td>
                    <td><?php echo $customers_item['nazov_firmy']; ?></td>
                    <td>
                        <a class="btn btn-info btn-xs" href="<?php echo site_url('customers/view'.$customers_item['ID']); ?>">View</a>
                        <a class="btn btn-success btn-xs" href="<?php echo site_url('customers/edit'.$customers_item['ID']); ?>">Edit</a>
                        <a class="btn btn-warning btn-xs" href="<?php echo site_url('customers/delete'.$customers_item['ID']); ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
