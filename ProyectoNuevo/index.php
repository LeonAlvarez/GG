<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagina HTML</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/menu.css">
    <style>
        html, body{
            display:flex;
            flex-wrap: wrap;
            justify-content:flex-start;
            align-items: flex-start;
            min-width:100%;
            min-height:100%;
        }
        .pim {
            text-align: center;
        }
        .cabezon{
            min-height: 90.8vh;
            width:100%;
        }
    </style>
</head>

<body>

    <?php require('menu.php');?>

    <div class="cabezon">
    </div>
    <div class="pim">
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Inserte datos para ingresar en su cuenta</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="login.php">
                            <div class="form-group">
                                <label for="nick">Nick:</label>
                                <input type="text" class="form-control" name="Usuario_nick" placeholder="Escribe su Nick">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="Usuario_clave" placeholder="Escribe su clave">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>