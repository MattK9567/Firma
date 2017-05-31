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
                <h1>Editácia zákazníka: </h1>
            </div>
        </div>
        <div class="row">
            <div id="detail" class="col-sm-offset-1">
                <?php foreach ($jeden_zakaznik as $customer_item): ?>
                    <form method="post" action="<?php echo base_url() . "index.php/Customers/update_customer_id1"?>">
                        <label id="hide">Id :</label><br />
                        <input type="text" id="hide" name="did" value="<?php echo $customer_item->ID; ?>"><br />
                        <label>Meno :</label><br />
                        <input type="text" name="dmeno" value="<?php echo $customer_item->meno; ?>"><br />
                        <label>Priezvisko :</label><br />
                        <input type="text" name="dpriezvisko" value="<?php echo $customer_item->priezvisko; ?>"><br />
                        <label>Email :</label><br />
                        <input type="text" name="demail" value="<?php echo $customer_item->email; ?>"><br />
                        <label>Názov firmy :</label><br />
                        <input type="text" name="dnazov_firmy" value="<?php echo $customer_item->nazov_firmy; ?>"><br /><br />

                        <br /><a class="btn btn-default" href="<?php echo base_url()."index.php/Customers"; ?>">Späť</a>
                        <input type="submit" id="submit" class="btn btn-primary" name="dsubmit" value="Editovať">
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>