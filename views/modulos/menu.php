<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <input type="hidden" id="usu_id" value="<?php echo $_SESSION["idusuarios"] ?>">
          <a href="#" class="d-block"> <?php echo $_SESSION["usu_nom"]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="inicio.php" class="nav-link">
              <i class='bx bx-home'></i>
              <p>
                Inicio
                
              </p>
            </a>
          </li>
            <a href="inicio.php" class="nav-link">
          <li class="nav-item">
            
              <i class='bx bxs-food-menu'></i>
              <p>
                Menú
              </p>
              </a>
         
          </li>

          <a href="perfil.php" class="nav-link">
          <li class="nav-item">
            
          <i class='bx bxs-user'></i>
              <p>
                Perfil
                
              </p>
            
          </li>
          </a>
          <a href="info_personal.php" class="nav-link">
          <li class="nav-item">
            <i class='bx bxs-id-card'></i>
              <p>
                Información Básica
                
              </p>
          </li>
          </a>
          <a href="estudios.php" class="nav-link">
          <li class="nav-item">
          
            <i class='bx bxs-graduation'></i>
              <p>
                Estudios 
              </p>
          </li>
          </a>
          <li class="nav-item">
            <a href="experiencia.php" class="nav-link">
             <i class='bx bxs-briefcase-alt-2'></i>
              <p>
                Portafolio Laboral
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class='bx bxs-contact' ></i>
              <p>
                Contactame
              </p>
            </a>
          </li>

          <a href="<?php BASE_URL;?>"/views/logout.php" class="nav-link">
          <li class="nav-item">
               <i class='bx bx-log-out'></i>
              <p>
                Salir
                
              </p>
          </li>
          </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>