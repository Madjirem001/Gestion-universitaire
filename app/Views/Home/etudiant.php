<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Application de gestion d'une universite">
    <meta name="robots" content="noindex,nofollow">
    <title>Gestion Ecole</title>
    <link rel="canonical" href="<?= base_url() ?>/public/https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>/public/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/public/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/public/css/style.min.css" rel="stylesheet">
    <style>
        label {
            text-transform: uppercase;
            text-align: right;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?= base_url() ?>/public/Home/accueil">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img  src="<?= base_url()?>/public/plugins/images/logo.png" alt="homepage"  width="60"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?= base_url() ?>/public/plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="<?= base_url() ?>/javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <li>
                            <a class="profile-pic" href="<?= base_url() ?>/#">
                                <img src="<?= base_url() ?>/public/plugins/images/users/admin.png" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">Madji</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/public/Home/accueil" aria-expanded="false">
                                <i class="fas fa-th-large" aria-hidden="true"></i>
                                <span class="hide-menu">Accueil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/public/Home/etudiant" aria-expanded="false">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <span class="hide-menu">Eleve</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/public/Home/promotion" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Promotion</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>/public/Home/orientation" aria-expanded="false">
                                <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                                <span class="hide-menu">Conseil d'orientation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url()?>/public/Home/profile"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Eleve</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <?php
                if (session()->get('success') != null) { ?>
                    <div class="alert alert-success">
                        <p>
                            <Strong>Mise à jour </Strong>
                            <hr>
                            L'ajout de l'etudiant s'est éffectué avec succès !
                        </p>
                    </div>
                <?php
                } elseif(session()->get('success_update') != null) { ?>
                    <div class="alert alert-success">
                        <p>
                            <Strong>Mise à jour </Strong>
                            <hr>
                            La modification de l'etudiant s'est éffectué avec succès !
                        </p>
                    </div>
                <?php
                }
                elseif(session()->get('success_delete') != null) { ?>
                    <div class="alert alert-success">
                        <p>
                            <Strong>Mise à jour </Strong>
                            <hr>
                            La suppression de l'etudiant s'est éffectué avec succès !
                        </p>
                    </div>
                <?php
                }
                elseif(session()->get('error') != null) { ?>
                    <div class="alert alert-success">
                        <p>
                            <Strong>Mise à jour </Strong>
                            <hr>
                            Echec d'ajout d'un nouveau etudiant !
                        </p>
                    </div>
                <?php
                }?>
                <?php
                //request join table promotion and etudiant
                
                
                ?>

                <!-- ajout d'un nouvel etudiant -->
                <div class="row">
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="white-box">
                        <h3 class="box-title"><?= isset($the_etudiant) ? "Modification d'une promotion" : "Ajout d'un nouveau etudiant"; ?></h3>
                            <div class="card-body">
                         
                                <form class="form-horizontal form-material" action="<?= base_url("public/Home/".(isset($the_etudiant) ? "enregistrer_modification_etudiant/".$the_etudiant['id'] : "ajouter_etudiant"))?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <div class="row">
                                                    <label class="col-md-3 p-0">Nom</label>
                                                    <div class="col-md-8 border-bottom p-0">
                                                        <input type="text" name="nom" class="form-control p-0 " value="<?= isset($the_etudiant) ? $the_etudiant['nom'] : ''?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row">
                                                    <label for="example-email" class="col-md-3 p-0">Postnom</label>
                                                    <div class="col-md-8 border-bottom p-0">
                                                        <input type="text" name="postnom" class="form-control p-0 " name="example-email" id="example-email" value="<?= isset($the_etudiant) ? $the_etudiant['postnom'] : ''?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row">
                                                    <label class="col-md-3 p-0">Prenom</label>
                                                    <div class="col-md-8 border-bottom p-0">
                                                        <input type="text" name="prenom" class="form-control p-0 " value="<?= isset($the_etudiant) ? $the_etudiant['prenom'] : ''?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="row">
                                                    <label class="col-sm-3">Genre</label>

                                                    <div class="col-sm-8 border-bottom">
                                                        <select name="genre" class="form-select shadow-none p-0  form-control-line">
                                                            <option value="F">F</option>
                                                            <option value="M">M</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <div class="row">
                                                    <label class="col-md-3 p-0">Date de naissance</label>
                                                    <div class="col-md-8 border-bottom p-0">
                                                        <input type="text" name="date_naissance" class="form-control p-0 " value="<?= isset($the_etudiant) ? $the_etudiant['date_naissance'] : ''?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <div class="row">
                                                    <label class="col-md-3 p-0">Lieu de naissance</label>
                                                    <div class="col-md-8 border-bottom p-0">
                                                        <input type="text" name="lieu_naissance" class="form-control p-0 " value="<?= isset($the_etudiant) ? $the_etudiant['lieu_naissance'] : ''?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <div class="row">
                                                <label class="col-sm-3">Promotion</label>                               
                                                    <div class="col-sm-8 border-bottom">
                                                        <select class="form-select shadow-none p-0  form-control-line" name="intitule" id="id_promotion">
                                                        <?php
                                                            foreach($promotions as $key => $promotion) { ?>
                                                            <option value="<?= $promotion['id_promotion'] ?>"><?= $promotion['intitule'] ?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12 d-flex justify-content-center">
                                            <button class="btn btn-danger btn-lg text-white" type="submit"><?= isset($the_etudiant) ? "Modifier" : "Ajouter" ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- liste des etudiants -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Liste des Eleves</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">NOM</th>
                                            <th class="border-top-0">POSTNOM</th>
                                            <th class="border-top-0">PRENOM</th>
                                            <th class="border-top-0">GENRE</th>
                                            <th class="border-top-0">PROMOTION</th>
                                            <th>ACTION DISPONIBLE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if(isset($etudiants)) {
                                            $j = 1;
                                            foreach($etudiants as $key => $etudiant) { ?>
                                        <tr>
                                            <td><?= $j ?></td>
                                            <td><?= $etudiant['nom'] ?></td>
                                            <td><?= $etudiant['postnom'] ?></td>
                                            <td><?= $etudiant['prenom'] ?></td>
                                            <td><?= $etudiant['genre'] ?></td>
                                            <!-- <td></?= $etudiant['intitule'] ?></td> -->
                                            <td><?= $etudiant['id_promotion'] ?></td>
                                            <td>
                                            <a href="<?= base_url('public/Home/profile_etudiant/'. $etudiant['id']) ?>" class="btn btn-secondary btn-lg text-white">Profile</a>
                                             <a href="<?= base_url('public/Home/modifier_etudiant/'. $etudiant['id']) ?>" class="btn btn-primary btn-lg text-white">Modifier</a>
                                             <a href="<?= base_url('public/Home/supprimer_etudiant/'. $etudiant['id']) ?>" class="btn btn-danger btn-lg text-white">Supprimer</a>
                                            </td>
                                        </tr>
                                        <?php
                                            $j++;
                                            }
                                        }
                           
                                    ?>                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center"> <a
                    href="https:<?= base_url()?>/public">2022© MS-DeV | Gestion Ecole </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>/public/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>/public/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/public/js/app-style-switcher.js"></script>
    <script src="<?= base_url() ?>/public/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>/public/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>/public/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>/public/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?= base_url() ?>/public/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url() ?>/public/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url() ?>/public/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>