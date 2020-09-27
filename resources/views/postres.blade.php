
  <!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="https://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    
  
  <title>Como Usar Mongo DB en Laravel 8 + Listado de Datos</title>

  <style type="text/css">
    .ghbmd {
      display: none!important; 
    }

  </style>

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://nubecolectiva.com/blog/tutos/demos/enc.css">    

  </head>

  <body>
    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="https://nubecolectiva.com"><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <a class="nav-link" href="https://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://blog.nubecolectiva.com" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li> 
            </ul>

          </div>
        </div>
      </nav>
    </header>  

    <main role="main">

        <div class="container text-center" style="margin-top: 160px;">

          <!-- Contenido -->

          <div class="row">

            <div class="col-md-12">

                <h1 style="font-size: 28px;" class="mb-4">Como Usar Mongo DB en Laravel 8 + Listado de Datos </h1>

            </div>

          </div> 

          <div class="row">

            <div class="col-md-12">

              <div class="table-responsive">

                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Stock</th>
                      <th scope="col">Imagen</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datos as $dat)
                    <tr>
                      <td>{{ $dat->_id }}</td>
                      <td>{{ $dat->nombre }}</td>
                      <td>{{ $dat->precio }}</td>
                      <td>{{ $dat->stock }}</td>
                      <td>
                        <img src="../img/{{ $dat->img }}" width="30" class="img-responsive">
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>
              
              
            </div>

            
          </div> 

          <!-- Fin Contenido -->     

          <hr>

          <div class="row text-center">

            <div class="col-md-12">

              <p class="lead">En <a href="https://nubecolectiva.com/" target="_blank"> Nube Colectiva </a> hablamos sobre:</p>

            </div>

          </div>

          <div class="row text-center">

              <div class="col-md-3">
                <h3>Frontend</h3>
                <a href="https://blog.nubecolectiva.com/category/frontend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-11-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Backend</h3>                
                <a href="https://blog.nubecolectiva.com/category/backend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-8-300x169.png">
                </a>
              </div>              

              <div class="col-md-3">
                <h3>Android</h3>
                <a href="https://blog.nubecolectiva.com/category/android/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-9-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Otros</h3>
                <a href="https://blog.nubecolectiva.com/category/articulos/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/09/edit_img_destacada_blog_devs-300x169.png">
                </a>
              </div>

          </div>            
          
        </div>

    </main>


        <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por <a href="https://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
      </div> 
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    	
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d77ca750f8a618e"></script>

    
      
  </body>
</html> 