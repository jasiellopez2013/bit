<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="border-bottom mb-5">
        <div class="row">
            <div class="col-12 ">
                   <h1 class="text-center">Inicio y fin de semana santa</h1>

            </div>
        </div>
     
    </div>
    <div class="d-flex justify-content-center"> 
        <form action="php.php" method="get">
            <div class="row">
                <div class="col">
                   <input type="date" name="fecha" id="fecha" class="mb-5 border border-white form-control " > 
                </div>
            </div>
        <div class="row ">
            <div class="col">
                  <input type="submit" value="Enviar" class="btn btn-success m-5 ">
            </div>
        </div>
      
    </form>
    </div>
</body>
</html>