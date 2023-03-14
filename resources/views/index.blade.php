<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <title>Laravel</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      
        <!-- Bootstrap core JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        

        
    </head>
	<body class="sb-nav-fixed">
        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">        
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Indicadores</h1>                        
                    
                        <div class="row">
                            <div class="col-12">
                                <canvas id="indicadoresGrafico"></canvas>
                            </div>                            
                            <div class="col-12">
                                <br>
                                <div id='agregarEroresFiltro'class="alert alert-warning" role="alert" hidden="true">
                                </div>
                                <br>
                                <label>Filtrar grafico</label>
                                <br>
                                <label>Desde :</label>
                                <input id='FechaInicio'type='date'></input>
                                <label> - Hasta : </label>
                                <input id='FechaTermino'type='date'></input>
                                <button id='btnFiltrarGrafico' onclick='filtrarGrafico()' >Filtrar</button>
                            </div>    
                        </div>              
                        
                        <br>  
                        <br>            
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAgregarIndicador">Agregar indicador </button>                       
                        <p></p>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Indicadores
                            </div>
                            <div class="container mt-5">
                                <table id=¨tablaIndicadores¨ class="table table-bordered mb-5">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Codigo</th>
                                            <th>Unidad Medida</th>
                                            <th>Valor</th>    
                                            <th>Fecha</th> 
                                            <th>Origen</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>                                    
                                    @isset($indicadores)                                        
                                        <tbody>
                                            @if($indicadores->count() > 0 )
                                                @foreach ($indicadores as $indicador)
                                                    <tr>
                                                        <td>{{$indicador->id}}</td>
                                                        <td>{{$indicador->nombreIndicador}}</td>
                                                        <td>{{$indicador->codigoIndicador}}</td>
                                                        <td>{{$indicador->unidadMedidaIndicador}}</td>
                                                        <td>{{$indicador->valorIndicador}}</td>
                                                        <td>{{$indicador->fechaIndicador}}</td>
                                                        <td>{{$indicador->origenIndicador}}</td>
                                                        <td>                                      
                                                             <button type="button " class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalVerIndicador"  onclick="verIndicador({{$indicador->id}})")>Ver </button>
                                                            <button type="button" class="btn btn-danger btn-sm mt-1" onclick="deleteIndicator({{$indicador->id}} )">Borrar</button>
                                                            <button type="button" class="btn btn-primary btn-sm mt-1" data-bs-toggle="modal" data-bs-target="#modalEditarIndicador" onclick="openEditarIndicador({{$indicador->id}})">Editar </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif                                                
                                        </tbody>            
                                            
                                    @endisset                              
                                </table>
                                @isset($indicadores) 
                                    <div class="d-flex justify-content-center">
                                        {{$indicadores->links('pagination::bootstrap-4')}}

                                    </div>
                                @endisset
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
     
     <
        <!-- scripts -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script >

      
            function deleteIndicator($id) {
              let text = "Estas seguro que deseas borrar el indicador";
              if (confirm(text) == true) {
                $.ajax({
                   type:'post',
                   url:'/deleteAjax',
                   data: {  "_token": "{{ csrf_token() }}",
                            id: $id },
                   success:function(data) {
                      alert('el indicador fue borrado con exito.');                 
                      location.reload();
                    
                   },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert('a ocurrido un error intentelo nuevamente mas tarde o pongase en contacto con el administrador.')
                    }
                });
              } else {
                text = "You canceled!";
              }
              console.log(text);
            }    

            function verIndicador($id) {
                $.ajax({
                   type:'post',
                   url:'/verAjax',
                   data: {  "_token": "{{ csrf_token() }}",
                            id: $id },
                   success:function(data) {
                        $('#modalVerNombreIndicador').text(data.indicador.nombreIndicador);
                        $('#modalVerCodigoIndicador').text(data.indicador.codigoIndicador);
                        $('#modalVerUnidadMedidaIndicador').text(data.indicador.unidadMedidaIndicador);
                        $('#modalVerValorIndicador').text(data.indicador.valorIndicador);
                        $('#modalVerFechaIndicador').text(data.indicador.fechaIndicador);
                        $('#modalVerOrigenIndicador').text(data.indicador.origenIndicador);                        
                   },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert('a ocurrido un error intentelo nuevamente mas tarde o pongase en contacto con el administrador.')
                    }
                });
            }
            

            function guardarIndicador(){                
                
                let $nombre = $('#modalAgregarNombreIndicador').val();
                let $codigo = $('#modalAgregarCodigoIndicador').val();
                let $unidadMedida = $('#modalAgregarUnidadMedidaIndicador').val();
                let $valor = $('#modalAgregarValorIndicador').val();
                let $fecha = $('#modalAgregarFechaIndicador').val();
                let $origen = $('#modalAgregarOrigenIndicador').val();

                $.ajax({
                   type:'post',
                   url:'/guardarAjax',
                   data: {  "_token": "{{ csrf_token() }}",
                            nombre: $nombre , codigo: $codigo , unidadMedida: $unidadMedida , valor: $valor , fecha: $fecha , origen: $origen  },
                   success:function(data) {
                        alert('Indicador agregado con exito');
                            location.reload();
                   },
                    error: function (data ,xhr, ajaxOptions, thrownError) {
                        var parsedJson = $.parseJSON(data.responseJSON.errores);
                        $('#modalAgregarErores').html('');
                        $.each(parsedJson, function(i, item) {                            
                            $('#modalAgregarErores').removeAttr('hidden')
                            $('#modalAgregarErores').append('<p>'+item+'</p>')
                            console.log(item , i);
                        });
                    }
                });
            }
            function openEditarIndicador($id){                
                $.ajax({
                   type:'post',
                   url:'/openEditarAjax',
                   data: {  "_token": "{{ csrf_token() }}",
                            id: $id },
                   success:function(data) {
                    console.log(data.indicador.id);
                        $('#modalEditarId').val(data.indicador.id);
                        $('#modalEditarNombreIndicador').val(data.indicador.nombreIndicador);
                        $('#modalEditarCodigoIndicador').val(data.indicador.codigoIndicador);
                        $('#modalEditarUnidadMedidaIndicador').val(data.indicador.unidadMedidaIndicador);
                        $('#modalEditarValorIndicador').val(data.indicador.valorIndicador);
                        $('#modalEditarFechaIndicador').val(data.indicador.fechaIndicador);
                        $('#modalEditarOrigenIndicador').val(data.indicador.origenIndicador);                        
                   },
                    error: function (xhr, ajaxOptions, thrownError) {s                        
                        alert('a ocurrido un error intentelo nuevamente mas tarde o pongase en contacto con el administrador.')
                    }
                });
            }
            function modificarIndicador(){       

                let text = "Estas seguro que deseas modificar el indicador";
                if (confirm(text) == true) {
                    let $id = $('#modalEditarId').val();
                    let $nombre = $('#modalEditarNombreIndicador').val();
                    let $codigo = $('#modalEditarCodigoIndicador').val();
                    let $unidadMedida = $('#modalEditarUnidadMedidaIndicador').val();
                    let $valor = $('#modalEditarValorIndicador').val();
                    let $fecha = $('#modalEditarFechaIndicador').val();
                    let $origen = $('#modalEditarOrigenIndicador').val();

                    $.ajax({
                       type:'post',
                       url:'/editarAjax',
                       data: {  "_token": "{{ csrf_token() }}",
                                id: $id , nombre : $nombre , codigo : $codigo , unidadMedida : $unidadMedida , valor : $valor,fecha : $fecha , origen : $origen },
                       success:function(data) {
                            console.log(data);
                            alert('el indicador fue modificado con exito.');      
                            location.reload();                  
                       },
                        error: function (data,xhr, ajaxOptions, thrownError) {
                            console.log('error');
                            var parsedJson = $.parseJSON(data.responseJSON.errores);
                            $('#modalEditarErores').html('');
                            $.each(parsedJson, function(i, item) {                            
                                $('#modalEditarErores').removeAttr('hidden')
                                $('#modalEditarErores').append('<p>'+item+'</p>')
                                console.log(item , i);
                            });
                        }
                    });
                }else {
                text = "You canceled!";
              }
              console.log(text);
            }
            
            
        </script>

        <script>  
            //Cuando carga la pagina
            //Fechas para el axial Y del grafico      
            var $fechasIndicadores = {!! json_encode($fechaIndicadores->toArray()) !!};
            var $labelsFechas = [ ];
            $.each($fechasIndicadores, function(i, item) {
                $labelsFechas.push(item.fechaindicador);
            });


            //crea el grafico
            var mychart = new Chart(document.getElementById("indicadoresGrafico"), {            
                type : 'line',
                data : {
                    labels : $labelsFechas,
                    datasets : []
                },
            });
            //arreglo de colores para los label
            var $colors = ['#E63009' , '#E5720C' ,'#225392' , '#229273' , '#212635' , '#ADBA12' , '#744A24' ,'#AB0938' , '#741F6F' , '#2EB66A' , '#C19F14' , '#386159' , '#386159' , '#2A623B' , '#A98F0B' , '#9E9772' , '#53470A' ,'#364431' , '#7089BF'];

            //Crear datasets
            let $indicadores = {!! json_encode($indicadoresValorFecha->toArray()) !!};

            let $label;
            let $data = [];
            let $xy = {};
            let $colorNumber = 0;
            
            $.each($indicadores, function(i, item) {    
                 $.each(item, function(i2, item2) {
                    if(i2 == 0)
                    {
                        //Obtener codigo indicador
                        $label = item2.codigoIndicador; 
                                               
                    }                       
                    // posiciones x(valor) , y(fecha) por codigo 
                    $xy={x:item2.fechaIndicador , y: item2.valorIndicador}                     
                    $data.push($xy)                      
                });

                //armando el nuevo dataset
                let $dataset2=  { data: $data,
                                label : $label,
                                borderColor : $colors[$colorNumber],
                                fill : false };
                //variando el color                        
                $colorNumber = $colorNumber + 1 ;
                //si los colores se agotan parte desde 0 
                if($colorNumber == 18)
                {
                    $colorNumber = 0;   
                }      
                //Agrega un dataset
                mychart.data.datasets.push($dataset2);
                //actualiza el grafico
                mychart.update();
                $label= '';
                $data = [];
                
            });
             
            //actualiza el grafico
            mychart.update();  
            
            function filtrarGrafico(){
                var $fechaInicio= $('#FechaInicio').val();
                var $fechaTermino= $('#FechaTermino').val();
                if($fechaInicio == '' || $fechaTermino == '')
                {
                    $('#agregarEroresFiltro').html('');
                    $('#agregarEroresFiltro').removeAttr('hidden');
                    $('#agregarEroresFiltro').append('<p>'+'Debe seleccionar fecha de inicio y de termino para filtrar'+'</p>')
                }else
                {
                    $('#agregarEroresFiltro').html('');
                    $fechaInicio2 = new Date($fechaInicio);
                    $fechaTermino2 = new Date($fechaTermino);                    
                    if($fechaInicio2 >= $fechaTermino2)
                    {                        
                        console.log('entro');
                        $('#agregarEroresFiltro').removeAttr('hidden');
                        $('#agregarEroresFiltro').append('<p>'+'Fecha de inicio debe ser menor a la fecha de termino'+'</p>')
                    }else
                    {
                        $('#agregarEroresFiltro').html('');
                        $('#agregarEroresFiltro').attr('hidden' , true);

                        $.ajax({
                               type:'post',
                               url:'/filtrarGraficoAjax',
                               data: {  "_token": "{{ csrf_token() }}",
                                        fechaInicio: $fechaInicio,
                                        fechaTermino: $fechaTermino },
                               success:function(data) {
                                    //Fechas para el axial Y del grafico
                                    let $fechaIndicadores2 = data.fechaIndicadores;
                                    let $labelsFechas = [];                                  
                                     console.log('fechas' ,$fechaIndicadores2 )

                                    //nuevas fechas filtradas                           
                                    $.each($fechaIndicadores2, function(i, item) {
                                        $labelsFechas.push(item.fechaindicador)                                     
                                    });

                                    //destruye el antiguo grafico
                                    mychart.destroy(); 
                                    //crea un nuevo grafico
                                    mychart = new Chart(document.getElementById("indicadoresGrafico"), {            
                                        type : 'line',
                                        data : {
                                            labels : $labelsFechas,
                                            datasets : []
                                        },
                                    });
                                    //constuye la data del nuevo grafico
                                    let $indicadores2 = data.indicadores;
                                    let $label;
                                    let $data = [];
                                    let $xy = {};
                                    let $colorNumber = 0;

                                    //recorre la nueva informacion
                                    $.each($indicadores2, function(i, item) {    
                                     $.each(item, function(i2, item2) {
                                        if(i2 == 0)
                                        {
                                            //Obtener codigo indicador
                                            $label = item2.codigoIndicador; 
                                                                   
                                        }                       
                                        // posiciones x(valor) , y(fecha) por codigo 
                                        $xy={x:item2.fechaIndicador , y: item2.valorIndicador}                     
                                        $data.push($xy)                      
                                    });

                                    //armando el nuevo dataset
                                    let $dataset2=  { data: $data,
                                                    label : $label,
                                                    borderColor : $colors[$colorNumber],
                                                    fill : false };
                                    //variando el color                        
                                    $colorNumber = $colorNumber + 1 ;
                                    //si los colores se agotan parte desde 0 
                                    if($colorNumber == 18)
                                    {
                                        $colorNumber = 0;   
                                    }      
                                    //Agrega un dataset
                                    mychart.data.datasets.push($dataset2);
                                    //actualiza el grafico
                                    mychart.update();
                                    $label= '';
                                    $data = [];
                                    
                                });

                                    mychart.update();
                               },
                                error: function (xhr, ajaxOptions, thrownError) {s                        
                                    alert('a ocurrido un error intentelo nuevamente mas tarde o pongase en contacto con el administrador.')
                                }                          
                        });
                    
                    }                
                }
            }                
        </script>
        
        
    </body>
     
</html>
   <!-- modal -->
   <!-- Modal -->
<div class="modal fade" id="modalVerIndicador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ver Indicador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <table class="table table-striped">
                <tr>
                    <td>Nombre </td>
                    <td><label id='modalVerNombreIndicador' ></label></td>
                </tr>
                <tr>
                    <td>Codigo </td>
                    <td><label id='modalVerCodigoIndicador' ></label></td>
                </tr>
                <tr>
                    <td>Unidad medida</td>
                    <td><label id='modalVerUnidadMedidaIndicador' ></label></td>
                </tr>
                <tr>
                    <td>Valor</td>
                    <td><label id='modalVerValorIndicador' ></label></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><label id='modalVerFechaIndicador'></label></td>
                </tr>
                <tr>
                    <td>Origen</td>
                    <td><label id='modalVerOrigenIndicador' ></label></td>
                </tr>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Editar -->
<div class="modal fade" id="modalEditarIndicador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar indicador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input id='modalEditarId' hidden="true" type='text'></input>
         <div id='modalEditarErores'class="alert alert-warning" role="alert" hidden="true">
         </div>
        <table class="table table-striped">
                <tr>
                    <td>Nombre </td>
                    <td><input id='modalEditarNombreIndicador' type='text'></input></td>
                </tr>
                <tr>
                    <td>Codigo </td>
                    <td><input id='modalEditarCodigoIndicador' type='text'></input></td>
                </tr>
                <tr>
                    <td>Unidad medida</td>
                    <td><input id='modalEditarUnidadMedidaIndicador' type='text'></input></td>
                </tr>
                <tr>
                    <td>Valor</td>
                    <td><input id='modalEditarValorIndicador' type='number'></input></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><input id='modalEditarFechaIndicador'type='date'></input></td>
                </tr>
                <tr>
                    <td>Origen</td>
                    <td><input id='modalEditarOrigenIndicador' type='text'></input></td>
                </tr>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick='modificarIndicador()'>Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalAgregarIndicador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar indicador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div id='modalAgregarErores'class="alert alert-warning" role="alert" hidden="true">
            </div>
            <table class="table table-striped">
                <tr>
                    <td>Nombre </td>
                    <td><input id='modalAgregarNombreIndicador' type='text'></input></td>
                </tr>
                <tr>
                    <td>Codigo </td>
                    <td><input id='modalAgregarCodigoIndicador' type='text'></input></td>
                </tr>
                <tr>
                    <td>Unidad medida</td>
                    <td><input id='modalAgregarUnidadMedidaIndicador' type='text'></input></td>
                </tr>
                <tr>
                    <td>Valor</td>
                    <td><input id='modalAgregarValorIndicador' type='number'></input></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><input id='modalAgregarFechaIndicador'type='date'></input></td>
                </tr>
                <tr>
                    <td>Origen</td>
                    <td><input id='modalAgregarOrigenIndicador' type='text'></input></td>
                </tr>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="guardarIndicador()">Guardar</button>
      </div>
    </div>
  </div>
</div>
