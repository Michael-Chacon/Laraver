<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>
                    Correo electronico
                </title>
            </meta>
        </meta>
    </head>
    <body>
        <h2>
            contenido del correo
        </h2>
        <p>
            Recibiste un mensaje de {{ $mensaje['nombre'] }} - {{ $mensaje['email'] }}
        </p>
        <p>
            <strong>
                Asunto:
            </strong>
            {{ $mensaje['asunto'] }}
        </p>
        <p>
            <strong>
                Contenido
            </strong>
            {{ $mensaje['mensaje'] }}
        </p>
    </body>
</html>