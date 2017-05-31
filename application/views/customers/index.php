<h2>ard</h2>
<div class="col-sm-3 col-md-12">
    <h1>Zákazníci</h1>
    <div class = "row">
        <div class = "col-md-12">
            <a href = "<?php echo base_url()."index.php/Customers/create"; ?>" class = "btn btn-primary pull-left">Pridať zákazníka</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Email</th>
                <th>Názov firmy</th>
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
                    <td><a class="btn btn-primary btn-xs" href="<?php echo base_url()."index.php/Customers/show_customer_id/".$customers_item['ID']; ?>">Edit</a></td>
                    <td><a class="btn btn-warning btn-xs" href="<?php echo base_url()."index.php/Customers/delete/".$customers_item['ID']; ?>" onclick="confirm('Naozaj zmazať používateľa??')">Delete</a></td>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
