<?php
include "inc/header.php";
kullanicikontrol();
?>

    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-success">
                    <header class="panel-heading">
                        <h2 class="panel-title">Aktif Varlıklarım</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-details">
                            <thead>
                            <tr>
                                <th>Hisse Adı</th>
                                <th>Miktarı</th>
                                <th>Değeri</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>AEFES</td>
                                <td>150</td>
                                <td>12640</td>
                            </tr>
                            <tr>
                                <td>GUBRF</td>
                                <td>125</td>
                                <td>125.50</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!--KODLAR BURAYA-->


<?php include "inc/footer.php"; ?>