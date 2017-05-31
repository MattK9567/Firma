<html>
<head>
    <title>Editácia dát</title>
</head>
<body>
<div id="container">
    <div class="row">
        <h2>das</h2>
        <div class="col-sm-offset-1">
            <div class="page-header">
                <h1>Editácia športoviska: </h1>
            </div>
        </div>
        <div class="row">
            <div id="detail" class="col-sm-offset-1">
                <?php foreach ($jedno_sportovisko as $sportovisko_item): ?>
                    <form method="post" action="<?php echo base_url() . "index.php/Sportoviska/update_sportovisko_id1"?>">
                        <label id="hide">Id :</label><br />
                        <input type="text" id="hide" name="did" value="<?php echo $sportovisko_item->ID; ?>"><br />
                        <label>Názov :</label><br />
                        <input type="text" name="dnazov" value="<?php echo $sportovisko_item->nazov; ?>"><br />
                        <label>ID typu športoviska :</label><br />
                        <input type="text" name="dtyp_sportoviska_ID" value="<?php echo $sportovisko_item->typ_sportoviska_ID; ?>"><br /><br />

                        <br /><a class="btn btn-default" href="<?php echo base_url()."index.php/Sportoviska"; ?>">Späť</a>
                        <input type="submit" id="submit" class="btn btn-primary" name="dsubmit" value="Editovať">
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>