<?php

    include "../../core/messagesFns.php";
    include "../../core/components/components.php";

    $result = messageFns::selectOne($_GET["id"]);

    foreach($result as $item){
        $message = new message($item['id'], $item['id_client'], $item['id_artist'], $item['date_envoie'], $item['contenu'], $item['fichier_attache']);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artisons Admin Space</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom_styles.css">

    <script src="js/formvalidators/valider.js"></script>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php components::sidebar(); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        <div class="card shadow-lg m-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Modification d'un message</h6>
                </div>
                <div class="card-body">
                    <form action="message_update_script.php" method="POST" enctype="multipart/form-data">
                        <input style="display: none" type="text" value="<?php echo $message->getMessageId(); ?>" name="id" id="id">
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2 mb-2">
                                <select name="client_id" id="client_id" class="form-control mt-2 mb-2">
                                    <option value="-1" disabled>Client</option>
                                    <option <?php if($message->getClientId() == 0) echo 'selected'; ?> value="0">Nourhene</option>
                                    <option <?php if($message->getClientId() == 1) echo 'selected'; ?> value="1">Hamza</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 mt-2 mb-2">
                                <select name="artist_id" id="artist_id" class="form-control mt-2 mb-2">
                                    <option value="-1" disabled>Artist</option>
                                    <option <?php if($message->getArtistId() == 0) echo 'selected'; ?> value="0">Amine</option>
                                    <option <?php if($message->getArtistId() == 1) echo 'selected'; ?> value="1">Yahya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group mt-2 mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Fichier attache</span>
                                </div>
                            <div class="custom-file">
                                    <input type="file" name="fichier_attache" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2 mb-2">
                                <input value="<?php echo $message->getDateEnvoie(); ?>" type="date" class="form-control mt-2 mb-2" name="date_envoie" id="date_envoie" placeholder="Le date d'envoie">
                            </div>
                        </div>
                        <div class="form-row"> 
                        <div class="form-group col-md-6 mt-2 mb-2">
                            <textarea class="form-control mt-2 mb-2" name="contenu" id="contenu" rows="3" placeholder="Contenu">
                                <?php echo $message->getContenu(); ?>
                            </textarea>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Modifier dans la base de données</button>
                    </form>

                </div>
            </div>

            <!-- Topbar -->
            <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->


            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Begin Page Content -->
            <div class="container-fluid">

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
