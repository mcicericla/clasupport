<div class="navbar">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="#">CLA Support</a>
                  <div class="nav-collapse">
                    <ul class="nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tickets <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url_for("ticket/new") ?>">Nuevo</a></li>
                            <li><a href="<?php echo url_for("ticket/abiertos") ?>">Ver abiertos</a></li>
                            <li><a href="<?php echo url_for("ticket/todos") ?>">Ver todos</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="navbar-search pull-left" action="">
                      <input type="text" class="search-query span2" placeholder="Buscar">
                    </form>
                    <ul class="nav pull-right">
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuenta <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Configurar</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Cerrar sesión</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>