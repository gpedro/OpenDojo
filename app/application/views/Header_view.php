<?php
echo doctype('xhtml11');
?>

<html>
    <head>
        <title><?= $titulo ?> - <?= $cabecalho ?></title>

        <!--CSS
        ==========================================================-->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/opendojo.css" rel="stylesheet">

        <!--JavaScript
        ==========================================================-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-confirmation.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/opendojo.js"></script>

    </head>
    <body>

        <?php
        $this->view('Navbar_view');
        ?>
    

