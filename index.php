<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS --> 
       

    <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
        <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:2.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:center}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}
        .flex{display:flex}.items-center{align-items:center}
        .h-5{height:1.50rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.py-4{padding-top:1.5rem;padding-bottom:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}
        </style>

        <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
        </style>
</head>
<body>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                
                <a href="index.php">                                       
                    <svg viewbox="0 0 0 0" xmlns="http://www.w3.org/2000/svg" class="h-5 fill-current text-gray-500"> </svg>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj6Kxf7g4YobKBoUlvgonZxKoRpab0ohznWP0LO4vTTWNPsfXu97aTmB3ynK6C8__dVVhkVidwEIzF2M0B1P5gSw5WgMCJl3nP5qWUQuc6lF5rh47bzQpfEJ_qRqZ85-rvpNGBcMM4BG0-fWqoHxq1CjPl7pxwRvN4tZZFuuEPmIHNtsbDPPm-U5_C9/s176/Captura-removebg-preview.png"  svg>
                </a>
            
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        
            <form action="validar.php" method="post">
                <h1>Sistema de Login</h1>
                <div>
                    <label class="block font-medium text-sm text.gray-700" for="usuario"> Usuario
                    </label>

                <p> <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" type="text" placeholder="Ingrese Usuario" name="usuario" required="required" autofocus="autofocus"></p>
                </div>
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password"> Contraseña
                    </label>

                <p><input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" type="password" placeholder="Ingrese Contraseña" name="contraseña" required="required" autocomplete="current-password"></p>
                </div>
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </div>
</div>
</body>
</html>

