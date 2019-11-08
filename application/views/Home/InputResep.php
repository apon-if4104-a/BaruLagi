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
    <title>Apon</title>
    <style>
      #Unggh{
        background-color: white;
      }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?php echo base_url('index.php/Home/Input_Resep_Foto'); ?>" method="post" enctype="multipart/form-data">
            <div class="card" style="margin-top:30px; padding-bottom:90px; border:1px solid #13B1E2;">
                <div class="card-body">
                    <center>
                        <input type="file" name="FotoResep" value="">
                    </center>
                </div>
            </div>
            <h2 style="margin-top:30px;">Deskripsi Tambahan :</h2>
            <div class="row">
                <div class="col-sm-8">
                    <textarea class="form-control" rows="10" id="comment" name="DeskripsiTambahan" style="margin-bottom:30px; border:1px solid #13B1E2;">
                    </textarea>
                </div>
                <div class="col">
                    <button id="Unggh" class="btn btn-light" type="submit" name="button" style="width:250px; border:1px solid #F35410; margin-left:20px; margin-top:100px;"><span style="color:#F35410">Unggah</span></button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
