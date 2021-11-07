<!DOCTYPE html>
<html>

<head>
     
    <?php error_reporting(0); $this->load->view('layouts/head') ?>
    <?php 
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
</head>

<body>
    <div id="wrapper">
        <?php $this->load->view('layouts/sidebar'); ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php $this->load->view('layouts/navbar'); ?>

                <div class="row wrapper bmember-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>
                            <?php
                            $header1 = ucwords($this->uri->segment('1'));
                            $text1 = str_replace('_', ' ', $header1);
                            echo $text1;
                            ?>  
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?=base_url()?>dashboard">Home</a>
                            </li>
                            <li>
                                <a><?php 
                                $header2 = ucwords($this->uri->segment('1'));
                                $text2 = str_replace('_', ' ', $header2);
                                echo $text2;
                                ?></a>
                            </li>
                            <?php 
                                if($this->uri->segment('2') != null){
                            ?>
                            <li class="active">
                                <strong>
                                    <?php
                                        if($this->uri->segment('3') != null){
                                            $header3 = ucwords($this->uri->segment('2'));
                                            $text3 = str_replace('_', ' ', $header3);
                                            echo $text3;
                                        } else {
                                            $header3 = ucwords($this->uri->segment('3'));
                                            $text3 = str_replace('_', ' ', $header3);
                                            echo $text3;
                                        }
                                    ?>
                                </strong>
                            </li>
                            <?php } ?>
                        </ol>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <?php echo $output; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><bR>
                    <?php $this->load->view('layouts/footer'); ?>
                </div>
            </div>

        </div>
    </div>
    <?php 
    foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php 
    
    endforeach; 

    ?>

    <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
     <script src="<?=base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> 
    <script src="<?=base_url()?>assets/js/inspinia.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace/pace.min.js"></script>
</body>
</html>
