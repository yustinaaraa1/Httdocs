<div class="row wrapper border-bottom white-bg page-heading" >
    <div class="col-lg-10">
        <h2>Profil</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=base_url();?>dashboard">Home</a>
            </li>
            <li class="active">
                <strong>Profil</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight" >
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Profil Form <small></small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form role="form" action="<?php echo base_url();?>profil/action" method="post" enctype="multipart/form-data">
                        <div class="row">  
                            <div class="form-group col-lg-12"><label>Nama Lengkap</label> 
                                <input type="text" class="form-control" name="nama_lengkap" value="<?=$this->session->userdata('nama_lengkap');?>">
                            </div>  
                            <div class="form-group col-lg-12"><label>Username</label> 
                                <input type="text" class="form-control" name="username" value="<?=$this->session->userdata('username');?>">
                            </div>
                            <div class="form-group col-lg-12"><label>Password</label> 
                                <input type="password" class="form-control" id="password_lama" name="password" class="form-control">
                            </div>
                            <br>
                            <div class="form-group col-lg-12">
                                <div class="pull-right">
                                    <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Simpan</strong></button>
                                </div>
                            </div>
                        </div>
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
