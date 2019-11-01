<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/846a9086-8a40-43e0-aa10-2fc7d6d73730/dd4byb2-1fc5e70f-4099-4e15-b194-7f450ac735fe.png/v1/fill/w_800,h_800,strp/avengers__endgame__2019__avengers_snap_logo_png__by_mintmovi3_dd4byb2-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODAwIiwicGF0aCI6IlwvZlwvODQ2YTkwODYtOGE0MC00M2UwLWFhMTAtMmZjN2Q2ZDczNzMwXC9kZDRieWIyLTFmYzVlNzBmLTQwOTktNGUxNS1iMTk0LTdmNDUwYWM3MzVmZS5wbmciLCJ3aWR0aCI6Ijw9ODAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.soebOX2_vOWgPcZuFxyAq5rPW2okbZogwJUq0YwF3PE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Apon</title>

    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }

        #btndaftar:hover {
            background-color: white;
        }

        #btnUnggah:hover {
            background-color: white;
        }

        .form {
            outline: none;
        }
    </style>

</head>

<body>

    <nav class="navbar" style="border-bottom:2px solid #13B1E2;">
        <form class="form-inline" action="/action_page.php">
            <a class="navbar-brand" href="<?php echo base_url() . 'index.php/Home' ?>">
                <img src="<?php echo base_url('assets/Apon.png'); ?>" alt="Logo" style="width:100px; padding-left:20px; height:40px; margin-top:-20px;" />
            </a>
            <div class="input-group mb-3 input-group-lg">
                <div class="input-group-prepend">
                    <img src="https://www.gshiftlabs.com/wp-content/uploads/2016/03/search19-300x203.png" type="submit" alt="Icon" style="width:45px; border:1px solid #13B1E2;
            border-right:none; border-radius:3px; padding-top:8px; padding-bottom:8px;">
                </div>
                <input class="form" type="text" name="keywoard" placeholder="Cari Obat" style="border:1px solid #13B1E2; border-left:none; width:850px;">
            </div>

            <button id="Btnlogin" data-toggle="modal" data-target="#Log-in" type="button" name="button" class="btn btn-outline-light text-dark" style="border:1px solid #F35410; margin-left:10px; background-color:#F35410; margin-top:-20px;"><span style="color:White;">Log-In</span></button>

            <!-- The Modal -->
            <form action="<?php echo site_url('TampilanAwal/login'); ?>" method="post">
                <div class="modal" id="Log-in">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header" style="border:none">
                                <h4 class="modal-title"><b style="color:#F35410">Login</b></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #F35410;">
                                    <div class="formgroup">
                                        <label for="Nama" style="float:left; margin-left:10px;">Username</label>
                                        <br>
                                        <input id="Nama" type="text" class="form" name="username1" placeholder="Masukan Nama anda" required style="border:none; color:#F35410; width:96%; margin-left:10px;">
                                    </div>
                                </div>
                                <br>
                                <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #F35410;">
                                    <div class="formgroup">
                                        <label for="pwd" style="float:left; margin-left:10px;">Password</label>
                                        <br>
                                        <input type="password" class="form" id="pwd" name="pwd" placeholder="Masukan Password anda" required style="border:none; color:#F35410; width:96%; margin-left:10px;">
                                    </div>
                                </div>
                                <a href="#"><span style="color:#F35410; float:right; margin-top:10px;">Lupa Password</span></a>
                            </div>
                            <a class="login" href="<?php echo base_url() . 'index.php/TampilanAwal/login' ?>">
                                <div class="modal-footer" style="border:none">
                                    <button type="submit" class="btn" style="background-color:#F35410"><span style="color:white">Login</span></button>
                                </div>
                            </a>
                            <!-- Modal footer -->
                        </div>
                    </div>
                </div>
            </form>

            <button id="btndaftar" data-toggle="modal" data-target="#Daftar" type="button" name="button" class="btn btn-outline-light text-dark" style="border:1px solid #F35410;  margin-top:-20px; margin-left:10px;"><span style="color:#F35410;">Daftar</span></button>
            <!-- The Modal -->
            <div class="modal" id="Daftar">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header" style="border:none">
                            <h4 class="modal-title"><b style="color:#13B1E2">Daftar</b></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2;">
                                <div class="formgroup">
                                    <label for="Nama" style="float:left; margin-left:10px;">Username</label>
                                    <br>
                                    <input id="Nama" type="text" class="form" name="nama2" placeholder="Masukan Nama anda" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                                </div>
                            </div>
                            <br>
                            <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2;">
                                <div class="formgroup">
                                    <label for="Nama" style="float:left; margin-left:10px;">Email</label>
                                    <br>
                                    <input id="Nama" type="email" class="form" name="email" placeholder="Masukan Email anda" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                                </div>
                            </div>
                            <br>
                            <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2;">
                                <div class="formgroup">
                                    <label for="Nama" style="float:left; margin-left:10px;">No Handphone</label>
                                    <br>
                                    <input id="Nama" type="email" class="form" name="email" placeholder="Masukan Email anda" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                                </div>
                            </div>
                            <br>
                            <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2;">
                                <div class="formgroup">
                                    <label for="pwd" style="float:left; margin-left:10px;">Password</label>
                                    <br>
                                    <input type="password" class="form" id="pwd" name="pwd" placeholder="Masukan Password anda" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                                </div>
                            </div>
                            <br>
                            <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2;">
                                <div class="formgroup">
                                    <label for="pwd" style="float:left; margin-left:10px;">Ketik Ulang Password</label>
                                    <br>
                                    <input type="password" class="form" id="pwd" name="pwd" placeholder="Masukan Password anda" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer" style="border:none">
                            <button type="submit" class="btn" style="background-color:#13B1E2"><span style="color:white">Daftar</span></button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </nav>

    <div class="container">
        <div class="row" style="margin-top:40px;">
            <div class="col">
                <a class="unggah" href="<?php echo base_url() . 'index.php/Home/Input_Resep' ?>">
                    <button id="btnUnggah" type="submit" name="button" class="btn btn-outline-light text-dark" style="border:3px solid #F35410;  margin:10px 20px 10px; width:15%; float:right;">
                        <b style="color:#F35410;">Unggah Resep</b>
                    </button>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h4 style="color:#F35410; margin:10px 20px 20px; float:left; display:block;"><b><u>Katalog Obat</u></b></h4>
            </div>
        </div>
        <div class="row" style="margin-bottom:40px;">
            <?php foreach ($BanyakObat as $P) : ?>
                <div class="col-sm-3">
                    <a href="<?php echo base_url('index.php/Home/PilihObat/' . $P['ID_Obat']) ?>">
                        <div class="card" style="width:105%; border:2px solid #13B1E2;">
                            <div class="card-header" style="background-color:white;border:none"><img src="file:///C:/Users/asus/Pictures/Nelco.png" alt="Icon"></div>
                            <div class="card-body" style="border:none"><b><?php echo $P['Nama_Obat'] ?></b></div>
                            <div class="card-footer" style="color:#F35410; background-color:white;border:none"><b><?php echo $P['Harga_Obat'] ?></b></div>
                            <div class="card-footer" style="background-color:white;border:none"><?php echo $P['Keterangan_Obat'] ?></div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>

</html>