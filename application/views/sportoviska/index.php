<h2>ard</h2>
<div class="col-sm-3 col-md-12">
    <h1>Športoviská</h1>
    <div class = "row">
        <div class = "col-md-12">
            <a href = "<?php echo base_url()."index.php/Sportoviska/create"; ?>" class = "btn btn-primary pull-left">Pridať športovisko</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Názov</th>
                <th>Typ športoviska</th>
            </thead>
            <tbody>
            <?php foreach ($sportoviska as $sportoviska_item): ?>
                <tr>
                    <td><?php echo $sportoviska_item['ID']; ?></td>
                    <td><?php echo $sportoviska_item['nazov']; ?></td>
                    <td><?php echo $sportoviska_item['typ_sportoviska_ID']; ?></td>
                    <td>
                        <a class="btn btn-success btn-xs" href="<?php echo base_url()."index.php/Sportoviska/show_sportovisko_id/".$sportoviska_item['ID']; ?>">Edit</a>
                        <a class="btn btn-warning btn-xs" href="<?php echo base_url()."index.php/Sportoviska/delete/".$sportoviska_item['ID']; ?>" onclick="confirm('Naozaj zmazať toto športovisko??')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
