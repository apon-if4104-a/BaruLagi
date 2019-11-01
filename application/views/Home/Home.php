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
  <style>
    .Input_obat {
      width: 3000px;
      height: 1000px;
    }

    #Tombol {
      padding: 20px;
    }

    .form {
      outline: none;
    }

    .row {
      margin-top: 5px;
    }
  </style>
</head>

<body>
  <nav class="navbar" style="border-bottom:2px solid #13B1E2;">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url('assets/Apon.png'); ?>" alt="Logo" style="width:100px; padding-left:20px; height:40px; margin-top:-20px;">
    </a>
    <button id="btndaftar" type="button" name="button" class="btn btn-outline-light text-dark" style="border:1px solid #F35410; margin-left:10px; width:100px;"><span style="color:#F35410;">Keluar</span></button>
  </nav>

  <center>
    <?php if ($this->session->flashdata('flash')) : ?>
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        Obat Berhasil Ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('flash_gagal')) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Obat Gagal Ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <h1 class="Hello" style="margin-top:30px;">Hello <span style="color:#f35410">Admin!</span></h1>
    <hr size="30px" width="50%" style="background-color:#f35410">
  </center>
  <div class="row">
    <div class="Input_obat col-md-4">
      <center><button id="Tombol" data-toggle="modal" data-target="#Input_obat" type="button" class="btn btn-light" style="padding-bottom:80px; background-color:white; border:1px solid #f35410;">Input <span style="color:#f35410">Obat</span></button></center>
      <!-- The Modal -->
      <div class="modal" id="Input_obat">
        <div class="modal-dialog">
          <div class="modal-content" style="width:800px; margin-left:-125px;">

            <!-- Modal Header -->
            <div class="modal-header" style="border:none">
              <h4 class="modal-title"><b style="color:#13B1E2">Input Obat</b></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= validation_errors(); ?>
                </div>
              <?php endif; ?>
              <form action="" method="post">
                <div class="card" style="float:right; padding-bottom:90px; padding-left:10px;">
                  <div class="card-body">
                    <h5>Foto Obat</h5>
                    <input id="alamat" type="file" name="nama1" value="" style=" border:none; ">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2; width:400px;">
                      <div class="formgroup">
                        <label for="Nama" style="float:left; margin-left:10px;">ID Obat</label>
                        <br>
                        <input id="Nama" type="text" class="form" name="nama2" placeholder="Masukan ID Obat" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2; width:400px;">
                      <div class="formgroup">
                        <label for="Nama" style="float:left; margin-left:10px;">Nama Obat</label>
                        <br>
                        <input id="Nama" type="text" class="form" name="nama3" placeholder="Masukan Nama Obat" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2; width:400px;">
                      <div class="formgroup">
                        <label for="Nama" style="float:left; margin-left:10px;">Keterangan Obat</label>
                        <br>
                        <input id="Nama" type="text" class="form" name="nama4" placeholder="Masukan Keterangan Obat" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2; width:400px;">
                      <div class="formgroup">
                        <label for="ket" style="float:left; margin-left:10px;">Harga Obat</label>
                        <br>
                        <input type="text" class="form" id="ket" name="nama5" placeholder="Masukan Harga Obat" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="Pass" style=" border-left:10px solid #13B1E2; width:400px;">
                      <div class="formgroup">
                        <textarea class="form-control" rows="10" id="comment" style="margin-bottom:30px; border:1px solid grey;" name="nama6" placeholder="Deskripsi Obat">
                            </textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer" style="border:none">
                  <button type="submit" class="btn" style="background-color:#13B1E2" name="tambah"><span style="color:white">Submit</span></button>
                </div>
              </form>
            </div>
            <!-- Modal footer -->
          </div>
        </div>
      </div>
    </div>
    <div class="Delete_obat col-md-4">
      <center><button id="Tombol" data-toggle="modal" data-target="#Delete_obat" type="button" class="btn btn-light" style="padding-bottom:80px; background-color:white; border:1px solid #f35410;">Delete <span style="color:#f35410">Obat</span></button></center>
      <form action="" method="post">
        <!-- The Modal -->
        <div class="modal" id="Delete_obat">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header" style="border:none">
                <h4 class="modal-title"><b style="color:#F35410">Delete Obat</b></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #F35410;">
                  <div class="formgroup">
                    <label for="Nama" style="float:left; margin-left:10px;">ID Obat</label>
                    <br>
                    <input id="Nama" type="text" class="form" name="DID" placeholder="Masukan ID Obat" required style="border:none; color:#F35410; width:96%; margin-left:10px;">
                  </div>
                </div>
                <br>
                <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #F35410;">
                  <div class="formgroup">
                    <label for="namaObt" style="float:left; margin-left:10px;">Nama Obat</label>
                    <br>
                    <input type="text" class="form" id="namaObt" name="DNama" placeholder="Masukan Nama Obat" required style="border:none; color:#F35410; width:96%; margin-left:10px;">
                  </div>
                </div>
              </div>
              <div class="modal-footer" style="border:none">
                <button type="submit" class="btn" style="background-color:#F35410"><span style="color:white">Delete</span></button>
              </div>
      </form>
      <!-- Modal footer -->
    </div>
  </div>
  </div>
  </div>
  <div class="Update_obat col-md-4">
    <center><button id="Tombol" data-toggle="modal" data-target="#Update_obat" type="button" class="btn btn-light" style="padding-bottom:80px; background-color:white; border:1px solid #f35410;">Update <span style="color:#f35410">Obat</span></button></center>
    <form action="" method="post">
      <!-- The Modal -->
      <div class="modal" id="Update_obat">
        <div class="modal-dialog">
          <div class="modal-content" style="width:800px; margin-left:-125px;">

            <!-- Modal Header -->
            <div class="modal-header" style="border:none">
              <h4 class="modal-title"><b style="color:#13B1E2">Update Obat</b></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div class="card" style="float:right; padding-bottom:90px; padding-left:10px;">
                <div class="card-body">
                  <h5>Foto Obat</h5>
                  <input id="alamat" type="file" name="FotoUpdate" value="" style=" border:none; ">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2; width:400px;">
                    <div class="formgroup">
                      <label for="Nama" style="float:left; margin-left:10px;">ID Obat</label>
                      <br>
                      <input id="Nama" type="text" class="form" name="NamaID" placeholder="Masukan ID Obat" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2; width:400px;">
                    <div class="formgroup">
                      <label for="Nama" style="float:left; margin-left:10px;">Nama Obat</label>
                      <br>
                      <input id="Nama" type="text" class="form" name="NamaObat" placeholder="Masukan Nama Obat" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="Username" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2; width:400px;">
                    <div class="formgroup">
                      <label for="Nama" style="float:left; margin-left:10px;">Keterangan Obat</label>
                      <br>
                      <input id="Nama" type="text" class="form" name="KetObat" placeholder="Masukan Keterangan Obat" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="Pass" style="border:2px solid #7D7D7D; border-left:10px solid #13B1E2; width:400px;">
                    <div class="formgroup">
                      <label for="ket" style="float:left; margin-left:10px;">Harga Obat</label>
                      <br>
                      <input type="text" class="form" id="ket" name="HargaObat" placeholder="Masukan Harga Obat" required style="border:none; color:#13B1E2; width:96%; margin-left:10px;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="Pass" style=" border-left:10px solid #13B1E2; width:400px;">
                    <div class="formgroup">
                      <textarea class="form-control" name="DesObat" rows="10" id="comment" style="margin-bottom:30px; border:1px solid grey;" placeholder="Deskripsi Obat">
                            </textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer" style="border:none">
              <button type="submit" class="btn" style="background-color:#13B1E2"><span style="color:white">Submit</span></button>
            </div>
    </form>
    <!-- Modal footer -->
  </div>
  </div>
  </div>
  </div>
  </div>
</body>