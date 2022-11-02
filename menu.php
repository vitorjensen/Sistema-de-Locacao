 <!-- Menu -->
<style>

  .btn-lg{

    width: 224px;
    height: 46px;
    padding-left: 2px;
    margin: 15px;
  }
 
  </style>
<script>
    
    function logout() {
        if( !confirm('Deseja sair?')
    ){
        if( window.event)
            window.event.returnValue=false;
        else
            e.preventDefault();
     }
    }

</script>
 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="">
            <a href="index.html" class="app-brand-link">  
           
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

      

          <ul class="menu-inner py-1 bg-dark">
             


            <li class="menu-header small text-uppercase">
              <span class="menu-header-text text-white">Cadastro:</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle text-white">
                <i class="menu-icon tf-icons bx bx-dock-top text-white"></i>
                <div data-i18n="Account Settings text-white">Cliente:</div>
              </a>
              <ul class="menu-sub text-white">
                <li class="menu-item  text-white">
                  <a href="../cliente/consulta_cliente.php" class="menu-link  text-white">
                    <div data-i18n="Notifications  text-white">Consulta:</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item  text-white">
              <a href="javascript:void(0);" class="menu-link menu-toggle  text-white">
                <i class="menu-icon tf-icons bx bx-dock-top  text-white"></i>
                <div data-i18n="Authentications  text-white">Aluguel:</div>
              </a>
              <ul class="menu-sub  text-white">
                <li class="menu-item  text-white">
                  <a href="../aluguel/consulta_aluguel.php" class="menu-link  text-white">
                    <div data-i18n="Basic  text-white">Consulta:</div>
                  </a>
                </li>
                <li class="menu-item  text-white">
                  <a href="../aluguel/checar_aluguel.php" class="menu-link  text-white">
                    <div data-i18n="Basic  text-white">Check:</div>
                  </a>
                </li>  
              </ul>
            </li>
            <li class="menu-item  text-white">
              <a href="javascript:void(0);" class="menu-link menu-toggle  text-white">
                <i class="menu-icon tf-icons bx bx-cube-alt  text-white"></i>
                <div data-i18n="Misc  text-white">Produto:</div>
              </a>
              <ul class="menu-sub  text-white">
              
                <li class="menu-item  text-white">
                  <a href="../produto/consulta_produto.php" class="menu-link  text-white">
                    <div data-i18n="Under Maintenance  text-white">Consulta:</div>
                  </a>
                </li>
              </ul>
            </li>
          

            <!-- Forms & Tables -->
            <!-- Forms -->
            
         
            <!-- Misc -->
           
            <li class="menu-header small text-uppercase  text-white">
              <span class="menu-header-text  text-white">Movimento:</span>
            </li>
            <li class="menu-item  text-white">
              <a href="javascript:void(0);" class="menu-link menu-toggle  text-white">
                <i class="menu-icon tf-icons bx bx-dock-top  text-white"></i>
                <div data-i18n="Account Settings  text-white">Vendas:</div>
              </a>
              <ul class="menu-sub  text-white">
                <li class="menu-item  text-white">
                  <a href="../venda/form_venda.php" class="menu-link  text-white">
                    <div data-i18n="Account  text-white">Nova venda:</div>
                  </a>
                </li>
                <li class="menu-item  text-white">
                  <a href="../venda/consulta_venda.php" class="menu-link  text-white">
                    <div data-i18n="Notifications  text-white">Consulta:</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item  text-white">
              <a href="javascript:void(0);" class="menu-link menu-toggle  text-white">
                <i class="menu-icon tf-icons bx bx-dock-top  text-white"></i>
                <div data-i18n="Authentications  text-white">Fornecedor:</div>
              </a>
              <ul class="menu-sub  text-white">
              
                <li class="menu-item  text-white">
                  <a href="../fornecedor/consulta_fornecedor.php" class="menu-link  text-white">
                    <div data-i18n="Basic  text-white">Consulta:</div>
                  </a>
                </li> 
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle  text-white">
                <i class="menu-icon tf-icons bx bx-user  text-white"></i>
                <div data-i18n="Misc  text-white">Vendedor:</div>
              </a>
              <ul class="menu-sub  text-white">
               
                <li class="menu-item  text-white">
                  <a href="../vendedor/consulta_vendedor.php" class="menu-link  text-white">
                    <div data-i18n="Under Maintenance  text-white">Consulta:</div>
                  </a>
                </li>
              </ul>
            </li>
     
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle  text-white">
                <i class="menu-icon tf-icons bx bx-user  text-white"></i>
                <div data-i18n="Misc  text-white">Login:</div>
              </a>
              <ul class="menu-sub  text-white">
                <li class="menu-item  text-white">
                  <a href="../login/consulta_login.php" class="menu-link  text-white">
                    <div data-i18n="Under Maintenance  text-white">Consulta:</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase  text-white">
              <span class="menu-header-text  text-white">Relatórios:</span>
            </li>
            <li class="menu-item  text-white">
                <li class="menu-item  text-white">
                  <a href="https://www.google.com/intl/pt-BR/calendar/about/" class="menu-link  text-white">
                    <div data-i18n="Account">Agendamento:</div>
                  </a>
                </li>
                <li class="menu-item  text-white">
                  <a href="../relatorio/consulta_relatorio.php" class="menu-link  text-white">
                    <div data-i18n="Account">Relatórios:</div>
                  </a>
                </li>
                <div class="btn-box w-100 mt-4 mb-1">
            <a href="../index.php" class="btn mb-2 btn-primary btn-lg btn-block" onclick="logout(event)">
              <i class="fe fe-arrow-left fe-12 mx-2"></i><span class="small-1">Logout</span>
            </a>
          </div>
              </ul>
              
            </li>
            
</ul>
          </ul>
        </aside>
        <!-- / Menu -->