

<html lang="en">
<head>
    <title>Very Good Databases&reg; Company Reports Portal</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" crossorigin="anonymous">
<style>
    td.details-control {
        background: url('details_open.png') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('details_close.png') no-repeat center center;
    }
</style>
<body style="padding-top: 100px">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
    <a href="." class="navbar-brand">Very Good Databases&reg;</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="reports">Reports <span class="caret"></span></a>
                <div class="dropdown-menu" aria-labelledby="reports">
                    <a class="dropdown-item" href="suppliers.php">Suppliers</a>
                    <a class="dropdown-item" href="projects.php">Projects</a>
                    <a class="dropdown-item" href="invoices.php">Invoices</a>
                    <a class="dropdown-item" href="pos.php">Purchase Orders</a>
                    <a class="dropdown-item" href="tasks_requirements.php">Tasks & Requirements</a>
                    <a class="dropdown-item" href="outstanding_po_items.php">Outstanding Purchase Orders</a>
                </div>
            </li>
        </ul>
    </div>
</div>