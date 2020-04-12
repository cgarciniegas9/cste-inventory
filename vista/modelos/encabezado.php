 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

     <!-- BOTON BUSCAR ENCABEZADO -->
     <form class="form-inline ml-3">
         <div class="input-group input-group-sm">
             <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
             <div class="input-group-append">
                 <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                 </button>
             </div>
         </div>
     </form>

     <!-- NOTIFICACIONES DE MENSAJES -->
     <ul class="navbar-nav ml-auto">
         <!-- Mensajes Dropdown Menu -->
         <li class="nav-item dropdown">
             <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="far fa-comments"></i>
                 <span class="badge badge-danger navbar-badge">3</span>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <a href="#" class="dropdown-item">
                     <!-- Inicio mensaje -->
                     <div class="media">
                         <img src="vista/dist/img/user1-128x128.jpg" alt="User Avatar"
                             class="img-size-50 mr-3 img-circle">
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 Brad Diesel
                                 <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                             </h3>
                             <p class="text-sm">Call me whenever you can...</p>
                             <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                         </div>
                     </div>
                     <!-- Fin de mensaje -->
                 </a>
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                 <i class="fas fa-th-large"></i>
             </a>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->