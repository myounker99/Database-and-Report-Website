<?php include_once("_connect_to_db.php"); ?>
<?php include_once("header.php"); ?>

<div class="container">
    <h1>Tasks & Requirements</h1>
    <?php
    $query = "SELECT a.ProjectCode, a.RequirementCode, a.RequirementDescription, a.DependentRequirement, b.TaskCode, b.TaskDescription, b.TaskStatus, b.TaskEstimate "
            .   "FROM pRequirement a "
            .   "INNER JOIN pTask b "
            .   "ON a.RequirementCode = b.RequirementCode";

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
            <th>Requirement Code</th>
            <th>Requirement Description</th>
            <th>Dependent Requirement</th>
            <th>Task Code</th>
            <th>Task Description</th>
            <th>Task Status</th>
            <th>Task Estimate</th>
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
