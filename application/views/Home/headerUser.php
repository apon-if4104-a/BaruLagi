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
    <style media="screen">
      #SearchBar{
        outline: none;
      }
      #SearchBar:focus{
        border-bottom: 2px solid #13B1E2;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row" style="text-align:center;position: relative;">
        <div class="col-sm-2" style = "display:inline-block;float:none;min-width:100px;">
          <a onclick="back()" style=" cursor: pointer">
           <img src="<?php echo base_url() ;?>Asset/Apon.png" alt="Logo" style="width:100px; height:40px; margin-top:7px;position: relative;">
          </a>
        </div>
        <div class="col-sm-6" style = "display:inline-block;float:none;min-width:100px;min-height:10px;">
            <form action="<?php echo base_url();?>index.php/Home/search" method = "post">
              <div class="form-inline my-2 my-lg-0">
                <img src="https://www.gshiftlabs.com/wp-content/uploads/2016/03/search19-300x203.png" alt="Icon" style="width:40px; margin-top:7px;position: relative;"/>
                <input id="" name= "yangdicari" type="text" placeholder="Cari Obat" style="border:none; width:75%; margin-top:7px;position: relative;"></input>
                <input class="btn btn-outline-light text-dark" type="submit" style="background-color:#F35410; border:1px solid #F35410; border-radius:3px; margin-top:7px;position: relative;"><span style="color:White;">Search</span></input>
              </div>
            </form>
        </div>
        <div class="col-sm-2" style = "display:inline-block;float:none;min-width:100px;">
          <button onclick="logout()" id="Btnlogin"  type="button" name="button" class="btn btn-outline-light text-dark" style="margin-top:7px; float:right; border:1px solid #F35410; background-color:#F35410;"><span style="color:White;">Log Out</span></button>
          <a onclick="profile()"><img src="https://www.gkipeterongan.org/wp-content/uploads/2019/01/user_circle_1048392.png" alt="" style="margin-top:7px; width:40px; cursor:pointer;"></a>          
        </div>
      </div>
    </div>
    <hr style="background-color:#13B1E2">

    <script>
      function logout(){
        window.location = "<?php echo base_url('index.php/TampilanAwal/logout');?>";
      }
      function back(){
        window.location = "<?php echo base_url('index.php/Home/index');?>";
      }
      function profile(){
        window.location = "<?php echo base_url('index.php/user/profile');?>";
      }
    </script>
  </body>
</html>
