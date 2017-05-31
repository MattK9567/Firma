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
                <h1>Editácia rezervácie: </h1>
            </div>
        </div>
        <div class="row">
            <div id="detail" class="col-sm-offset-1">
                <?php foreach ($jedna_rezervacia as $rezervacia_item): ?>
                    <form method="post" action="<?php echo base_url() . "index.php/Rezervacia/update_rezervacia_id1"?>">
                        <label id="hide">Id :</label><br />
                        <input type="text" id="hide" name="did" value="<?php echo $rezervacia_item->ID; ?>"><br />
                        <label>Športovisko :</label><br />
                        <input type="text" name="dsportoviska_ID" value="<?php echo $rezervacia_item->sportoviska_ID; ?>"><br />
                        <label>Status rezervácie :</label><br />
                        <input type="text" name="dstatus_rezervacie_ID" value="<?php echo $rezervacia_item->status_rezervacie_ID; ?>"><br />
                        <label>Zákazník :</label><br />
                        <input type="text" name="dzakaznici_ID" value="<?php echo $rezervacia_item->zakaznici_ID; ?>"><br />
                        <label>Dátum :</label><br />
                        <input type="text" name="ddatum" value="<?php echo $rezervacia_item->datum; ?>"><br />
                        <label>Cena :</label><br />
                        <input type="text" name="dcena" value="<?php echo $rezervacia_item->cena; ?>"><br />
                        <label>Čas :</label><br />
                        <input type="text" name="dcas" value="<?php echo $rezervacia_item->cas; ?>"><br /><br />

                        <br /><a class="btn btn-default" href="<?php echo base_url()."index.php/Rezervacia"; ?>">Späť</a>
                        <input type="submit" id="submit" class="btn btn-primary" name="dsubmit" value="Editovať">
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>