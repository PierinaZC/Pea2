<?php
include_once 'includes/templates/header.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Consulta</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                       

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Razón Social</th>
                                        <th>Nº Doc.</th>
                                        <th>Dirección</th>  
                                    </tr>
                                </thead>
                                <tbody id="tblConsulta">

                                </tbody>          
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<script src="assets/js/consulta.js"></script>

<?php
include_once 'includes/templates/footer.php'
?>