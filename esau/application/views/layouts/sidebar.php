<?php
$menu=$this->uri->segment(1);
$smenu=$this->uri->segment(2);
?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element" style="margin-left:-10px;"> <span><img alt="image" style="border-top-right-radius: 20px;border-bottom-left-radius: 20px;" width="180" src="<?=base_url()?>assets/logo3.png">
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span > <span class="block m-t-xs"> <strong class="font-bold"><?=$this->session->userdata('username')?></strong>
                     </span> <span class="text-muted text-xs block">Administrator<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?=base_url()?>profil">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url()?>">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    RAFAEL
                </div>
            </li>   
                <li class="<?php if($menu=="dashboard") {echo 'active';}?>">
                    <a href="<?=base_url();?>dashboard"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboards</span> </a>
                </li>
                <li class="<?php if($menu=="buku") {echo 'active';}?>">
                    <a  href="<?=base_url();?>buku"><i class="fa fa-book"></i> <span class="nav-label">Data Buku</span></a>
                </li>
                <li class="<?php if($menu=="kategori") {echo 'active';}?>">
                    <a  href="<?=base_url();?>kategori"><i class="fa fa-bookmark"></i> <span class="nav-label">Data Kategori</span></a>
                </li>
                <li class="<?php if($menu=="pinjam") {echo 'active';}?>">
                    <a  href="<?=base_url();?>pinjam"><i class="fa fa-bullhorn"></i> <span class="nav-label">Data Pinjam</span></a>
                </li>
                <li class="<?php if($menu=="batas_ambang" || $menu=="import_data_pinjam") {echo 'active';}?>">
                    <a  href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Setting</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?=base_url();?>batas_ambang">Batas Centroid</a></li>
                        <li><a href="<?=base_url()?>import_data_pinjam">Import Data Pinjam</a></li>
                        <li><a href="<?=base_url()?>import_data_buku">Import Data Buku</a></li>
                    </ul>
                </li>
                <li class="<?php if($menu=="cluster") {echo 'active';}?>">
                    <a  href="<?=base_url();?>cluster"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Cluster</span></a>
                </li>
        </ul>

    </div>
</nav>


