<h2>ard</h2>
<div class="col-sm-3 col-md-12">
    <h1>Typy športovísk</h1>
    <div class = "row">
        <div class = "col-md-12">
            <a href = "<?php echo base_url()."index.php/Typ_sportoviska/create"; ?>" class = "btn btn-primary pull-left">Pridať typ športoviska</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th>#</th>
            <th>Názov</th>
            </thead>
            <tbody>
            <?php foreach ($typ_sportoviska as $typ_sportoviska_item): ?>
                <tr>
                    <td><?php echo $typ_sportoviska_item['ID']; ?></td>
                    <td><?php echo $typ_sportoviska_item['nazov']; ?></td>
                    <td>
                        <a class="btn btn-success btn-xs" href="<?php echo base_url()."index.php/Typ_sportoviska/edit/".$typ_sportoviska_item['ID']; ?>">Edit</a>
                        <a class="btn btn-warning btn-xs" href="<?php echo base_url()."index.php/Typ_sportoviska/delete/".$typ_sportoviska_item['ID']; ?>" onclick="confirm('Naozaj zmazať tento typ športovisko??')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
