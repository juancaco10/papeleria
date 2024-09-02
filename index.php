<?php include 'includes/encabezado.php'; ?>

<main>
    <!-- Menú superior -->
    <header class="fondo-oscuro texto-blanco">
        <nav class="contenedor-fluido d-flex justify-content-between align-items-center py-3">
            <!-- Logo -->
            <div class="logo">
                <img src="imagenes/logo1.png" alt="Logo" class="img-fluido">
            </div>
            <!-- Grupo de búsqueda y categorías -->
            <div class="d-flex flex-grow-1 justify-content-center">
                <div class="categoria-busqueda w-75">
                    <!-- Selector de categorías primero -->
                    <div class="input-group-prepend">
                        <select class="selector-categorias" id="categorias" name="categorias">
                            <option value="categoria0">Categorías..</option>
                            <option value="categoria1">Categoría 1</option>
                            <option value="categoria2">Categoría 2</option>
                            <option value="categoria3">Categoría 3</option>
                        </select>
                    </div>
                    <!-- Campo de búsqueda -->
                    <input type="text" id="buscador" class="campo-busqueda" placeholder="Buscar...">

                </div>
            </div>


            <!-- Navegación: Favoritos, Usuario y Carrito -->
            <ul class="nav">
                <!-- Favoritos -->
                <li class="nav-item">
                    <a id="favoritos" class="favoritos-icono" aria-label="Favoritos">
                        <i class="fas fa-heart"></i>
                        <span id="contador-favoritos">0</span>
                    </a>
                </li>

                <!-- Botón de usuario -->
                <li class="nav-item ml-3">
                    <button id="usuario" class="btn btn-dark texto-blanco" aria-label="Usuario">
                        <i class="fas fa-user"></i> Juan
                    </button>
                </li>
                <!-- Botón de carrito -->
                <li class="nav-item ml-3">
                    <button id="carrito" class="btn btn-dark texto-blanco" aria-label="Carrito">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="contador-items">0</span> <!-- Contador de ítems -->
                        <span id="total-carrito">$0.00</span>
                    </button>
                </li>

            </ul>
        </nav>
    </header>

    <!-- Sección de productos -->
    <section id="productos">
        <!-- Sección 1 -->
        <div class="seccion">
            <!-- Aquí irán los productos -->
        </div>
        <!-- Sección 2 -->
        <div class="seccion">
            <!-- Aquí irán los productos -->
        </div>
        <!-- Sección 3 -->
        <div class="seccion">
            <!-- Aquí irán los productos -->
        </div>
    </section>
</main>

<?php include 'includes/pie.php'; ?>