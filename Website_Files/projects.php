<?php include_once("_connect_to_db.php"); ?>
<?php include_once("header.php"); ?>

<div class="container">
    <h1>Projects</h1>
    <?php
    $query = "SELECT a.ProjectCode, a.ProjectName, a.ProjectStatus, a.ProjectEstimate, b.FirstName, b.LastName, b.Email, "
        .   "c.ClientCode, c.FirstName, c.LastName, c.ContactEmail "
        .   "FROM pProject a "
        .   "INNER JOIN pProjectManager b "
        .   "ON a.ProjectManagerEmail = b.Email "
        .   "INNER JOIN pClient c "
        .   "ON a.ClientCode = c.ClientCode";

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
            <th>Project Code</th>
            <th>Project Name</th>
            <th>Project Status</th>
            <th>Project Estimate</th>
            <th>Manager First Name</th>
            <th>Manager Last Name</th>
            <th>Manager Email</th>
            <th>Client Code</th>
            <th>Client First Name</th>
            <th>Client Last Name</th>
            <th>Client Contact Email</th>
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
                    <td><?php echo $row[ 10 ] . "<br/>";?></td>
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

