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
    #KatalogObat:hover{
      text-decoration: none;
    }
    .container{
      max-width : 1000px;
    }
    .box{
      margin : 5px;
      padding : 5px;
      min-width : 250px;
      position : relative;
      float:left;
      max-width: 500px;
      max-height: 500px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row" style="margin-top:40px;">
      <div class="col">
          <a href="<?php echo base_url('index.php/Home/Input_Resep/') ?>">
            <button id="btnUnggah" type="button" name="button" class="btn btn-outline-light text-dark" style="border:3px solid #F35410;  margin:10px 20px 10px; width:15%; float:right;"><b style="color:#F35410;">Unggah Resep</b></button>
          </a>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h4 style="color:#F35410; margin:10px 20px 20px; float:left; display:block;"><b><u>Katalog Obat</u></b></h4>
      </div>
    </div>

      <div class="container" style="margin-bottom:40px;">
        <?php foreach ($BanyakObat as $P) : ?>
          <a id="KatalogObat" href="<?php echo base_url('index.php/Home/PilihObat/' . $P['ID_Obat']) ?>">
          <div class="box">
            <div class="card" style="width:105%; border:2px solid #13B1E2;float:left">
              <div class="card-header" style="background-color:white;border:none   width: 100px;
      height: 100px;">
                <?php 
                  echo '<img src=data:image;base64,'.$P['foto'].' alt="Icon"; style = "      max-width: 100px;
      max-height: 100px;"/>';
                ?>
              </div>
                <div class="card-body" style="border:none"><b style="color:#13B1E2"><?php echo $P['Nama_Obat'] ?></b></div>
                <div class="card-footer" style="color:#F35410; background-color:white;border:none"><b><?php echo $P['Harga_Obat'] ?></b></div>
            <div class="card-footer" style="background-color:white;border:none"><?php echo $P['Keterangan_Obat'] ?></div>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>

  </div>
</body>
<script type="text/javascript">
  console.log('<?= $P['Foto_Obat'];?>');
</script>

</html>
