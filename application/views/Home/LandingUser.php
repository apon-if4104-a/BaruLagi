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
      min-width : 300px;
      position : relative;
      float : left;
    }
  </style>

</head>

<body>
  <div class="container">
   <?php if($this->session->flashdata('passwordsalah')): ?>
    <div role="alert" class="alert alert-success alert-dismissible fade show">
      <button aria-label="Close" data-dismiss="alert" class="close" type="button">
        <span aria-hidden="true" class="fa fa-times"></span>
      </button>
      <p><?php echo $this->session->flashdata('passwordsalah')?></p>
     </div>
  <?php endif;?>
  <?php if($this->session->flashdata('usernamesalah')):?>
    <div role="alert" class="alert alert-success alert-dismissible fade show">
      <button aria-label="Close" data-dismiss="alert" class="close" type="button">
        <span aria-hidden="true" class="fa fa-times"></span>
      </button>
      <p><?php echo $this->session->flashdata('usernamesalah')?></p>
    </div>
  <?php endif;?>
  <?php if($this->session->flashdata('pwdgasama')):?>
    <div role="alert" class="alert alert-success alert-dismissible fade show">
      <button aria-label="Close" data-dismiss="alert" class="close" type="button">
        <span aria-hidden="true" class="fa fa-times"></span>
      </button>
      <p><?php echo $this->session->flashdata('pwdgasama')?></p>
    </div>
  <?php endif;?>

    <div class="row">
      <div class="col">
        <h4 style="color:#F35410; margin:10px 20px 20px; float:left; display:block;"><b><u>Katalog Obat</u></b></h4>
      </div>
    </div>

    <div class="container" style="margin-bottom:40px;">
      <?php foreach ($BanyakObat as $P) : ?>
        <div class="box">
          <div class="card" style="width:105%; border:2px solid #13B1E2;">
            <div class="card-header" style="background-color:white;border:none">
              <?php 
                echo '<img src=data:image;base64,'.$P['foto'].' alt="Icon"; style = "size:50%;"/>';
              ?>
            </div>
            <div class="card-body" style="border:none"><b style="color:#13B1E2"><?php echo $P['Nama_Obat'] ?></b></div>
            <div class="card-footer" style="color:#F35410; background-color:white;border:none"><b><?php echo $P['Harga_Obat'] ?></b></div>
            <div class="card-footer" style="background-color:white;border:none"><?php echo $P['Keterangan_Obat'] ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>
