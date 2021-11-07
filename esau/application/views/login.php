<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IMPLEMENTASI DATA MINING CLUSTERING DATA PERPUSTAKAAN  MENGGUNAKAN ALGORITMA K-MEANS UNTUK MENENTUKAN PENAMBAHAN KOLEKSI BUKU DI PERPUSTAKAAN UPY</title>

    <link href="<?=base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url() ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="landing-page" style="background-color:white;" >

    <div id="inSlider" class="" data-ride="carousel">
        <div class="" role="listbox">
            <div class="item ">
                <div class="">
                    <div style="float:right;width:55.333%;padding-right: 0px;margin-top: 170px;">
                        <img style="color:black;margin-left: -160px" src="<?=base_url()?>assets/logo2.png" width="800">
                    </div>
                    <div style="float:left;width:33.333%;padding-right: 0px;margin-left: 100px;margin-top: 6%;">
                        <div >
                            <div class="text-center" style="background: #104E72;  height: 400px; margin-top: 20px;width: 70%;">
                                <div class=" text-center col-lg-12">
                                    <br><br><br><br>
                                    <h1 style="color: white;">LOGIN</h1>
                                    <BR>
                                    <div>
                                        <div id="pesan"></div>
                                        <form role="form" data-act="akses/login_act" id="formLogin">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Username" required="" name="username" id="username">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" required="" name="password" id="password">
                                            </div>
                                            <button type="submit" class="btn block full-width m-b" style="background-color: #FCC425;"><strong>Login</strong></button>
                                        </form>
                                    </div>
                                </div>
                                <br><br><br><br>
                                <br><br><br><br>
                                <br><br><br><br>
                                <p class="m-t">
                                    <small style="color:white;">PERPUSTAKAAN UPY &copy; 2019</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div> 

    <script src="<?=base_url() ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
    <script>
        $(document).on('submit', '#formLogin', function(event) {
            event.preventDefault();
            var url= $(this).attr('data-act');
            var data= $(this).serialize();
            $.ajax({
                url: '<?=base_url() ?>'+url,
                type: 'POST',
                dataType: 'json',
                data:data,
            })
            .done(function(json) {
                if (json.login=='TRUE') {
                  window.location=json.link;
                } else {
                  // alert(json.pesan);
                  $('#pesan').html('<div class="alert alert-danger">'+json.pesan+'</div>');
                }
                // console.log(json);
            })
            .fail(function() {
                console.log(url+" = error");
            })
        });



    </script>

</body>

</html>

