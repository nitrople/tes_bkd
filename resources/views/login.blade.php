
    <!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{("/login/css/main.css")}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href=" {{asset( "limitless/global_assets/css/icons/icomoon/styles.min.css" )}}" rel="stylesheet"
          type="text/css">
    <link href=" {{asset( "limitless/assets/css/bootstrap.min.css" )}}" rel="stylesheet" type="text/css">
    <link href=" {{asset( "limitless/assets/css/bootstrap_limitless.min.css" )}}" rel="stylesheet" type="text/css">
    <link href=" {{asset( "limitless/assets/css/layout.min.css" )}}" rel="stylesheet" type="text/css">
    <link href=" {{asset( "limitless/assets/css/components.min.css" )}}" rel="stylesheet" type="text/css">
    <link href=" {{asset( "limitless/assets/css/colors.min.css" )}}" rel="stylesheet" type="text/css">
</head>

<body>



<form method="post" action="{{route('cek-login')}}">
    <hgroup>
        <h1 style="font-weight: bold; color: #0D47A1;">Tes BKD</h1>
        <h1 style="font-weight: bold; color: #0D47A1;">Provinsi Bengkulu</h1>
    </hgroup>


    @csrf
    <div class="group">
        <label>Nama pengguna</label>
        <input class="input-group" type="text" name="username" placeholder="Nama pengguna"><span class="highlight"></span><span class="bar"></span>

    </div>
    <div class="group">
        <label>Kata sandi</label>

        <input class="input-group" type="password" name="password" placeholder="Kata sandi"><span class="highlight"></span><span class="bar"></span>
    </div>
    <button type="submit" class="button buttonBlue">Login
        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
</form>


<script src="{{("/login/js/main.js")}}"></script>

</body>


