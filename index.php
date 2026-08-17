<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pagina Principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            html, body {
                height: 100%; /* usamos en 100% de la pantalla */
                margin: 0; /* eliminamos márgenes predeterminados */
            }

            .columna-izquierda {
                background-color: #212529; /* color de fondo oscuro */
                color: #f8f9fa; /* color de texto claro */
                padding: 40px 30px; /* espacio desde arriba y lados */
                display: flex; /* para poder empujar el pie de página abajo */
                flex-direction: column;
                justify-content: space-between;
            }
            
            .columna-izquierda a {
                color: #f8f9fa; /* color de texto claro */
                text-decoration: none; /* sin subrayado de enlace  */
            }

            .columna-derecha {
                padding: 0;
                position: relative; /* necesario para ubicar el botón escondido */
                background-image: url('https://static.vecteezy.com/system/resources/previews/024/666/240/non_2x/portfolio-concept-preview-folder-presentation-artist-designer-or-photographer-briefcase-with-work-gallery-and-file-collection-modern-flat-cartoon-style-illustration-on-white-background-vector.jpg');
                background-size: cover;
                background-position: center;
            }

            /* Título Menú más grande */
            .menu-titulo {
                font-size: 2.2rem;
            }

           /* Estilo personalizado para la lista de navegación del sidebar */
            .sidebar-nav {
                padding-left: 0;
                list-style: none;
            }

            .sidebar-nav li {
                margin-bottom: 1rem;
                margin-left: 20px; /* mueve cada enlace un poco a la derecha */
            }

            /* Caja para cada enlace */
            .sidebar-nav li a {
                display: block;
                background-color: #343a40;
                padding: 10px 18px;
                border-radius: 8px;
                transition: background-color 0.2s ease;
            }

            .sidebar-nav li a:hover {
                background-color: #495057;
            }

            /* Pie de página */
            .footer-menu {
                font-size: 0.85rem;
                color: #adb5bd;
                text-align: center;
                margin-top: 20px;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid p-0"> 
            <div class="row g-0 vh-100"> 
                <!-- Columna de la izquierda (Sidebar) -->
                <aside class="col-12 col-md-4 columna-izquierda">
                    <div>
                        <h2 class="menu-titulo mb-4 fw-bold">Menú</h2>
                        <ul class="sidebar-nav">
                            <li><a href="perfil.php" class="fs-5">Mi perfil</a></li>
                            <li><a href="servicios.php" class="fs-5">Servicios</a></li>
                            <li><a href="contacto.php" class="fs-5">Contacto</a></li>
                        </ul>
                    </div>

                    <footer class="footer-menu">
                        Hecho por Jaime Ariza 2026
                    </footer>
                </aside>
            <!-- Columna de la derecha: imagen -->
            <div class="col-12 col-md-8 columna-derecha">
                <button type="button" class="btn btn-outline position-absolute top-0 end-0 m-4 shadow" data-bs-toggle="modal" data-bs-target="#myModal">Acceder</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Autenticacion</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="empresa.php">
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>