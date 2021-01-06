<?php include_once("_connect_to_db.php"); ?>
<?php include_once("header.php"); ?>

<div class="container">
    <h1>Purchase Orders</h1>
    <?php
    $query = "SELECT a.PONumber, a.BuyingFactoryCode, a.ReceivingFactoryCode, a.SupplierCode, a.PODate, b.POLineNumber, b.Description, b.Quantity, b.UnitPrice, b.CurrencyCode "
            .   "FROM pPurchaseOrder a "
            .   "INNER JOIN pPurchaseOrderLine b "
            .   "ON a.PONumber = b.PONumber";

    $result = mysqli_query( $con, $query);

    if(mysqli_errno($con))
    {
        ?>
        <h3>Failed executing query</h3>
        <h4><?php echo mysqli_error($con); ?></h4>
        <?php
    }
    else if(!$row = $result->fetch_array())
    {
        ?>
        <h1><i>No Results</i></h1>
        <?php
    }
    else
    {
        ?>
        <table class="table table-striped" style="white-space: nowrap;">
            <thead>
            <th>Purchase Order Number</th>
            <th>Buying Factory Code</th>
            <th>Receiving Factory Code</th>
            <th>Supplier Code</th>
            <th>Purchase Order Date</th>
            <th>Purchase Order Line Number</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Currency Code</th>
            </thead>
            <?php
            do
            {
                ?>
                <tr>
                    <td><?php echo $row[ 0 ] . "<br/>";?></td>
                    <td><?php echo $row[ 1 ] . "<br/>";?></td>
                    <td><?php echo $row[ 2 ] . "<br/>";?></td>
                    <td><?php echo $row[ 3 ] . "<br/>";?></td>
                    <td><?php echo $row[ 4 ] . "<br/>";?></td>
                    <td><?php echo $row[ 5 ] . "<br/>";?></td>
                    <td><?php echo $row[ 6 ] . "<br/>";?></td>
                    <td><?php echo $row[ 7 ] . "<br/>";?></td>
                    <td><?php echo $row[ 8 ] . "<br/>";?></td>
                    <td><?php echo $row[ 9 ] . "<br/>";?></td>

                </tr>
                <?php
            }while($row = $result->fetch_array())
            ?>
        </table>

        <?php
    }
    ?>
</div>

<?php include_once("footer.php"); ?>

