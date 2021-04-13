<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid" style="background-color:#eee;">
    <section class="container pt-5 text-muted">
        <h2 class="text-center">Formulario de Contacto</h2>
        <br>
        
        <form class="ajax1" action="MailContacto.php" method="POST" id="FormContacto">
            <div class="row">
                <div class="form-group col-lg-4">
                    <label>NOMBRES</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" required="required"
                        placeholder="Sus Nombres">
                </div>
                <div class="form-group col-lg-4">
                    <label>CORREO</label>
                    <input type="email" class="form-control" name="Correo" id="Correo" required="required"
                        placeholder="Su Correo">
                </div>
                <div class="form-group col-lg-4">
                    <label>ASUNTO</label>
                    <input type="text" class="form-control" name="asunto" id="asunto" required="required"
                        placeholder="Asunto">
                </div>
            </div>
            <div class="form-group">
                <label>MENSAJE</label>
                <textarea class="form-control" name="mensaje" id="comentario" rows="10"
                    placeholder="Deje su mensaje aquí" required></textarea>
            </div>

            <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg btn-busqueda d-flex" id="Contacto"
                    style="border:none;align-items: center;">
                    <span class="spinner-border spinner-border-sm" id="spinnerC" role="status" aria-hidden="true"
                        style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;"></span>
                    Enviar Consulta
                </button>
            </div>
        </form>

    </section>
    <br>
    <br>
    <br>
</div>
</body>
</html>