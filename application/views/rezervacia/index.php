<h2>ard</h2>
<div class="col-sm-3 col-md-12">
    <h1>Rezervácie</h1>
    <div class = "row">
        <div class = "col-md-12">
            <a href = "<?php echo base_url()."index.php/Rezervacia/create"; ?>" class = "btn btn-primary pull-left">Pridať rezerváciu</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>#</th>
            <th>Dátum</th>
            <th>Cena</th>
            <th>Čas</th>
            </thead>
            <tbody>
            <?php foreach ($rezervacie as $rezervacie_item): ?>
                <tr>
                    <td><?php echo $rezervacie_item['ID']; ?></td>
                    <td><?php echo $rezervacie_item['datum']; ?></td>
                    <td><?php echo $rezervacie_item['cena']; ?></td>
                    <td><?php echo $rezervacie_item['cas']; ?></td>
                    <td>
                        <a class="btn btn-info btn-xs" href="<?php echo base_url()."index.php/Rezervacia/view/".$rezervacie_item['ID']; ?>">View</a>
                        <a class="btn btn-success btn-xs" href="<?php echo base_url()."index.php/Rezervacia/show_rezervacia_id/".$rezervacie_item['ID']; ?>">Edit</a>
                        <a class="btn btn-warning btn-xs" href="<?php echo base_url()."index.php/Rezervacia/delete/".$rezervacie_item['ID']; ?>" onclick="confirm('Naozaj zmazať rezerváciu??')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
