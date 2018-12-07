<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
            <div class="panel">
                <div class="panel-body">
                    <div class="example-box-wrapper">
                        <table id="datatable-tabletools" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Micro</th>
                                <th>Hora de partida</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Micro</th>
                                <th>Hora de partida</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($itinerarios as $item){ ?>
                                <tr>
                                    <td><?php echo $item->getMicro(); ?></td>
                                    <td><?php echo $item->getHora(); ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table> <!-- fin de la tabla -->
                    </div>
                </div>
            </div> <!-- panel -->
        </div> <!-- container -->
    </div> <!-- page-content -->
</div> <!-- page-content-wrapper -->