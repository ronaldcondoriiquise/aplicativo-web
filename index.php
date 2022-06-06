<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Floreria Nataly</title>
    <!-- icono de favoritos-->
    <!--<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />-->
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
    <link href="assets/css/admin.css" rel="stylesheet" />
    <!-- codigo del chatbot-->
    
    <script src="//code.tidio.co/spgyr1p7ysxy90crb6pwzurwtfdx72kl.js" async></script>
</head>

<body>
    <a href="#" class="btn-flotante " id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>

    
    <!-- Navegación -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">FLORERIA NATALY AZUCENA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link text-info" category="all">Inicio
                            
                        </a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul>
                </div>
                <a href="javascript:session()">Iniciar</a>
                </li>
            </div>
            <a href="javascript:abrir()">Registrarse</a>
            </li>
        </nav>
    </div>
    <!-- Encabezamiento-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-blak">
                <h1 class="display-4 fw-bolder">FLORERIA NATALY AZUCENA</h1>
                <p class="lead fw-normal text-blak mb-0">Un Detalle en Flores Siempre Brinda Alegria</p>
            </div>
        </div>
    </header>
    
    <section class="py-5">
        <div class="container px- px-lg-6">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-4 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-2 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Insignia de venta-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? '' : ''; ?></div>
                                <!-- Imagen del producto-->
                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Detalles de producto-->
                                <div class="card-body">
                                    <div class="text-center">
                                        <!-- Nombre del producto-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Reseñas de productos-->
                                        <div class="d-flex justify-content-center small text-warning ">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- aqui va el precio del producto-->
                                        <span class="text-muted text-decoration-line-through"><?php echo $data['precio_normal']  ?></span>
                                        <?php echo $data['precio_rebajado'] ?>S/.
                            
                                    </div>
                                </div>
                                <!-- compraar o agregar producto-->
                                <div class="card-footer p-1 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto btn-success  " data-id="<?php echo $data['id']; ?>" href="#">comprar</a></div>
                                </div>
                                <div class="card-footer p-1 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>
    <?php require_once "loguin.php"; ?>
    <!-- Pie de página-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-blak"> &copy; floreria nataly 2022</p>
        </div>
    </footer>
    <!-- Núcleo de Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tema central JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>