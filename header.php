<?php
    // variáveis
    $arrayMenu = [
        ['nome' => 'Perfil', 'link' => '#perfil'],
        ['nome' => 'Meus Endereços', 'link' => '#enderecos'],
        ['nome' => 'Minhas Compras', 'link' => '#compras'],
        ['nome' => 'Sair', 'link' => '#sair'] 
    ];

    function criarMenu($array){
        foreach($array as $obj){
                echo '<li><a href="#" class="nav-link">' . $obj['nome'] . '</a></li>';
        }
    }
?>

<div class="site-navbar-wrap">
      
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-lg-3">
              <h1 class="my-0 site-logo"><a href="index.html">Booke</a></h1>
            </div>
            <div class="col-6 col-lg-9">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">

                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3 "><a href="#" class="site-menu-toggle js-menu-toggle text-black">
                    <span class="icon-menu h3"></span>

                  </a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li><a href="#" class="nav-link">
                        <?php
                          criarMenu($arrayMenu);
                        ?>
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
                    
