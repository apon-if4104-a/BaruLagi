<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/846a9086-8a40-43e0-aa10-2fc7d6d73730/dd4byb2-1fc5e70f-4099-4e15-b194-7f450ac735fe.png/v1/fill/w_800,h_800,strp/avengers__endgame__2019__avengers_snap_logo_png__by_mintmovi3_dd4byb2-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODAwIiwicGF0aCI6IlwvZlwvODQ2YTkwODYtOGE0MC00M2UwLWFhMTAtMmZjN2Q2ZDczNzMwXC9kZDRieWIyLTFmYzVlNzBmLTQwOTktNGUxNS1iMTk0LTdmNDUwYWM3MzVmZS5wbmciLCJ3aWR0aCI6Ijw9ODAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.soebOX2_vOWgPcZuFxyAq5rPW2okbZogwJUq0YwF3PE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <title>Apon</title>
    <?php include 'headerUser.php';?>
    <style>
      #Btnlogin:hover{
        background-color:white;
      }
      #JMLHobat:focus{
        outline: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin-top:40px;">
        <div class="col-sm-3">
          <?= $obat ['Foto_Obat']; ?>
        </div>
        <div class="col-sm-9">
          <h3 id="NamaObat" nama="namaobat" style="margin-top:25px;"><?= $obat ['Nama_Obat']; ?></h3>
          <h6 nama="keteranganobat" style="margin-top:20px;"><?= $obat ['Keterangan_Obat']; ?></h6>
          <h6 nama="hargaobat" style="margin-top:20px;"><span style="color:#F35410;"><?= $obat ['Harga_Obat']; ?></span></h6>
          <div class="form-inline" action="">
            <p style="margin-top:20px;"><b>Jumlah</b></p>
            <input id="JMLHobat" type="text" name="jumlah" value="" placeholder="0" style="margin-left:10px; border:1px solid #F35410; width:5%;">
          </div>
          <button id="Btnlogin" onclick="beliobat()" type="button" name="button" class="btn btn-light" style="border:1px solid #F35410; width:100px; margin-top:20px; float:right; background-color:white;"><span style="color:#F35410;">Beli</span></button>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="col">
          <h1>Deskripsi</h1>
        </div>
      </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <textarea class="form-control" rows="10" id="comment" readonly style="background-color:white"> <?= $obat ['Deskripsi_Obat']; ?> </textarea>
            </div>
          </div>
      </div>
    </div>
    <script>

    function beliobat(){
      var jumlahobat = document.getElementById('JMLHobat').value;
      if( jumlahobat <= 0 || jumlahobat == null){
        Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'Obat Tidak Boleh Kosong'        
      })
      }else{
          window.location = "<?php echo base_url('index.php/Home/BeliObat/'.$obat['ID_Obat']);?>/"+jumlahobat;
      }

    }
    </script>
  </body>
</html>
