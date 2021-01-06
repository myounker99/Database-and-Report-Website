<?php include_once("_connect_to_db.php"); ?>
<?php include_once("header.php"); ?>

<div class="container">
    <h1>Outstanding Purchase Order Items</h1>
    <?php
    $query = "SELECT DISTINCT tbl1.ponum, tbl1.invnum, tbl1.invline, tbl1.invamount, tbl2.poamount "
	        .   "FROM (SELECT DISTINCT a.PONumber ponum, a.InvoiceNumber invnum, b.LineNumber invline, b.Quantity invamount "
     	    .   "FROM pInvoice a "
     		.   "INNER JOIN pInvoiceLine b "
     		.	"ON a.InvoiceNumber = b.InvoiceNumber) AS tbl1 "
	        .   "INNER JOIN "
    	    .   "(SELECT DISTINCT c.PONumber ponum2, d.POLineNumber poline, d.Quantity poamount "
         	.   "FROM pPurchaseOrder c "
         	.	"INNER JOIN pPurchaseOrderLine d ON c.PONumber = d.PONumber) AS tbl2 "
	        .   "ON tbl1.ponum = tbl2.ponum2 "
            .   "AND tbl1.invline = tbl2.poline "
            .   "AND tbl1.invamount < tbl2.poamount ";

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
            <th>Invoice Number</th>
            <th>Line</th>
            <th>Invoice Amount</th>
            <th>Purchase Order Amount</th>
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
