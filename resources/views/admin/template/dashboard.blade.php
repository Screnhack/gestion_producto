<div class="sidebar-inner slimscrollleft">
    <!-- Search form -->
    <!--  <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form> -->
    <div class="clearfix"></div>
    <!--- Profile -->
    <div class="profile-info">
        <div class="col-xs-4">
            <a href="profile.html" class="rounded-image profile-image"><img src="{{asset('images/users/user-100.jpg')}}"></a>
        </div>
        <div class="col-xs-8">
            <div class="profile-text">Welcome <b>Jane</b></div>
            <div class="profile-buttons">
                <a href="javascript:;" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
            </div>
        </div>
    </div>
    <!--- Divider -->
    <div class="clearfix"></div>
    <hr class="divider" />
    <div class="clearfix"></div>
    <div id="sidebar-menu">
        <ul>
            <li class='has_sub'><a href='javascript:void(0);'><i class='icon-home-3'></i><span>Proyectos</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                <ul>
                    <li><a href="{{route('proyecto.index')}}"><span>Listar Proyecto</span></a></li>
                    <li><a href="{{route('proyecto.create')}}"><span>Registrar Proyecto</span></a></li>
                </ul>
            </li>

            <li class='has_sub'><a href='javascript:void(0);'><i class='icon-home-3'></i><span>Investigador</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                <ul>
                    <li><a href="{{route('investigador.index')}}"><span>Listar Investigador</span></a></li>
                    <li><a href="{{route('investigador.create')}}"><span>Registrar Investigador</span></a></li>
                </ul>
            </li>

            <li class='has_sub'><a href='javascript:void(0);'><i class='icon-megaphone'></i><span>Productos</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                <ul>
                    <li class='has_sub'><a href='javascript:void(0);'><span>Articulos</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('articulos.index')}}"><i class='fa fa-camera'></i><span>Listar Articulo</span></a></li>
                            <li><a href="{{route('articulos.create')}}"><i class='fa fa-camera'></i><span>Registrar Articulo</span></a></li>
                        </ul>
                    </li>

                    <li class='has_sub'><a href='javascript:void(0);'><span>Software</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('software.index')}}"><i class='fa fa-camera'></i><span>Listar Software</span></a></li>
                            <li><a href="{{route('software.create')}}"><i class='fa fa-camera'></i><span>Registrar Software</span></a></li>
                        </ul>
                    </li>

                    <li class='has_sub'><a href='javascript:void(0);'><span>Informe Tecnico</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('informe.index')}}"><i class='fa fa-camera'></i><span>Listar Informe Tecnico</span></a></li>
                            <li><a href="{{route('informe.index')}}"><i class='fa fa-camera'></i><span>Registrar Informe Tecnico</span></a></li>
                        </ul>
                    </li>

                    <li class='has_sub'><a href='javascript:void(0);'><span>Consultoria</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('consultoria.index')}}"><i class='fa fa-camera'></i><span>Listar Consultoria</span></a></li>
                            <li><a href="{{route('consultoria.create')}}"><i class='fa fa-camera'></i><span>Registrar Consultoria</span></a></li>
                        </ul>
                    </li>
                    
                </ul>
            </li>

            <li class='has_sub'><a href='javascript:void(0);'><i class='icon-megaphone'></i><span>Configuración</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                <ul>
                    <li class='has_sub'><a href='javascript:void(0);'><span>Calidad Revista</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('calidad_revista.index')}}"><i class='fa fa-camera'></i><span>Listar Calidad Revista</span></a></li>
                            <li><a href="{{route('calidad_revista.create')}}"><i class='fa fa-camera'></i><span>Registrar Calidad Revista</span></a></li>
                        </ul>
                    </li>
                
                
                    <li class='has_sub'><a href='javascript:void(0);'><span>Carga Horaria</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('carga_horaria.index')}}"><i class='fa fa-camera'></i><span>Listar Carga Horaria</span></a></li>
                            <li><a href="{{route('carga_horaria.create')}}"><i class='fa fa-camera'></i><span>Registrar Carga Horaria</span></a></li>
                        </ul>
                    </li>
                
                    <li class='has_sub'><a href='javascript:void(0);'><span>Categorias Colciencias </span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('categoria_colciencias.index')}}"><i class='fa fa-camera'></i><span>Listar Categorias Colciencias</span></a></li>
                            <li><a href="{{route('categoria_colciencias.create')}}"><i class='fa fa-camera'></i><span>Registrar Categorias Colciencias</span></a></li>
                        </ul>
                    </li>
                
                    <li class='has_sub'><a href='javascript:void(0);'><span>Categorias Profesor </span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('categoria_profesor.index')}}"><i class='fa fa-camera'></i><span>Listar Categorias Profesor</span></a></li>
                            <li><a href="{{route('categoria_profesor.create')}}"><i class='fa fa-camera'></i><span>Registrar Categorias Profesor</span></a></li>
                        </ul>
                    </li>
               
                    <li class='has_sub'><a href='javascript:void(0);'><span>Cuartil </span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('cuartil.index')}}"><i class='fa fa-camera'></i><span>Listar Cuartil</span></a></li>
                            <li><a href="{{route('cuartil.create')}}"><i class='fa fa-camera'></i><span>Registrar Cuartil</span></a></li>
                        </ul>
                    </li>
               
                    <li class='has_sub'><a href='javascript:void(0);'><span>Dependencias </span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('dependencias.index')}}"><i class='fa fa-camera'></i><span>Listar Dependencias</span></a></li>
                            <li><a href="{{route('dependencias.create')}}"><i class='fa fa-camera'></i><span>Registrar Dependencias</span></a></li>
                        </ul>
                    </li>
               
                    <li class='has_sub'><a href='javascript:void(0);'><span>Programas </span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('programas.index')}}"><i class='fa fa-camera'></i><span>Listar Programas</span></a></li>
                            <li><a href="{{route('programas.create')}}"><i class='fa fa-camera'></i><span>Registrar Programas</span></a></li>
                        </ul>
                    </li>
               
                    <li class='has_sub'><a href='javascript:void(0);'><span>Revistas </span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('revistas.index')}}"><i class='fa fa-camera'></i><span>Listar Revistas</span></a></li>
                            <li><a href="{{route('revistas.create')}}"><i class='fa fa-camera'></i><span>Registrar Revistas</span></a></li>
                        </ul>
                    </li>
               
                    <li class='has_sub'><a href='javascript:void(0);'><span>Tipologia Productos </span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                        <ul>
                            <li><a href="{{route('tipologia_producto.index')}}"><i class='fa fa-camera'></i><span>Listar Tipologia Productos</span></a></li>
                            <li><a href="{{route('tipologia_producto.create')}}"><i class='fa fa-camera'></i><span>Registrar Tipologia Productos</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>



        </ul>

        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
   
    <div class="clearfix"></div><br><br><br>
</div>
<div class="left-footer">
    <div class="progress progress-xs">
        <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            <span class="progress-precentage">80%</span>
        </div>

        <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
    </div>
</div>