<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4 class="m-0">Punto de Venta</h4>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item active">Ventas</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-9">
                <div class="row">
                    <!-- INPUT PARA INGRESO DEL CODIGO DE BARRAS O DESCRIPCION DEL PRODUCTO -->
                    <div class="col-md-12 mb-3">
                        <div class="form-group mb-2">
                            <label class="col-form-label" for="iptCodigoVenta">
                                <i class="fas fa-barcode fs-6"></i>
                                <span class="small">Productos</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="iptCodigoVenta"
                                placeholder="Ingrese el nombre del producto">
                        </div>
                    </div>
                    <!-- ETIQUETA QUE MUESTRA LA SUMA TOTAL DE LOS PRODUCTOS AGREGADOS AL LISTADO -->
                    <div class="col-md-6 mb-3">
                        <h3>Total Venta:<span id="totalVenta">0.00 mxn</span></h3>
                    </div>
                    <!-- BOTONES PARA VACIAR LISTADO Y COMPLETAR LA VENTA -->
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary" id="btnIniciarVenta">
                            <i class="fas fa-shopping-cart"></i> Realizar Venta
                        </button>
                        <button class="btn btn-danger" id="btnVaciarListado">
                            <i class="far fa-trash-alt"></i> Vaciar Listado
                        </button>
                    </div>
                    <!-- LISTADO QUE CONTIENE LOS PRODUCTOS QUE SE VAN AGREGANDO PARA LA COMPRA -->
                    <div class="col-md-12">
                        <table id="lstProductosVenta" class="display nowrap table-striped w-100 shadow ">
                            <thead class="bg-info text-left fs-6">
                                <tr>
                                    <th>Item</th>
                                    <th>Codigo</th>
                                    <th>Id Categoria</th>
                                    <th>Categoria</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                    <th class="text-center">Opciones</th>
                                    <th>Aplica Peso</th>
                                    <th>Precio Por Mayor</th>
                                    <th>Precio Oferta</th>
                                </tr>
                            </thead>
                            <tbody class="small text-left fs-6">
                            </tbody>
                        </table>
                        <!-- / table -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow">
                    <h5 class="card-header py-1 bg-primary text-white text-center">
                        Total Venta: <span id="totalVentaRegistrar">0.00 mxn</span>
                    </h5>
                    <div class="card-body p-2">
                        <!-- SELECCIONAR TIPO DE DOCUMENTO -->
                        <div class="form-group mb-2">
                            <label class="col-form-label" for="selCategoriaReg">
                                <i class="fas fa-file-alt fs-6"></i>
                                <span class="small">Documento</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="selDocumentoVenta" disabled>
                                <option value="0">Seleccione Documento</option>
                                <option value="1" selected="true">Boleta</option>
                                <option value="2">Factura</option>
                                <option value="3">Ticket</option>
                            </select>
                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                Debe Seleccione documento
                            </span>
                        </div>
                        <!-- SELECCIONAR TIPO DE PAGO -->
                        <div class="form-group mb-2">
                            <label class="col-form-label" for="selCategoriaReg">
                                <i class="fas fa-money-bill-alt fs-6"></i>
                                <span class="small">Tipo Pago</span><span class="text-danger">*</span>
                            </label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                id="selTipoPago" disabled>
                                <option value="0">Seleccione Tipo Pago</option>
                                <option value="1" selected="true">Efectivo</option>
                                <option value="2">Tarjeta</option>
                                <option value="3">Yape</option>
                                <option value="4">plin</option>
                            </select>
                            <span id="validate_categoria" class="text-danger small fst-italic" style="display:none">
                                Debe Ingresar tipo de pago
                            </span>
                        </div>
                        <!-- SERIE Y NRO DE BOLETA -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="iptNroSerie">Serie</label>
                                    <input type="text" min="0" name="iptEfectivo" id="iptNroSerie"
                                        class="form-control form-control-sm" placeholder="nro Serie" disabled>
                                </div>
                                <div class="col-md-8">
                                    <label for="iptNroVenta">Nro Venta</label>
                                    <input type="text" min="0" name="iptEfectivo" id="iptNroVenta"
                                        class="form-control form-control-sm" placeholder="Nro Venta" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- INPUT DE EFECTIVO ENTREGADO -->
                        <div class="form-group">
                            <label for="iptEfectivoRecibido">Efectivo recibido</label>
                            <input type="number" min="0" name="iptEfectivo" id="iptEfectivoRecibido"
                                class="form-control form-control-sm" placeholder="Cantidad de efectivo recibida">
                        </div>
                        <!-- INPUT CHECK DE EFECTIVO EXACTO -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="chkEfectivoExacto">
                            <label class="form-check-label" for="chkEfectivoExacto">
                                Efectivo Exacto
                            </label>
                        </div>
                        <!-- MOSTRAR MONTO EFECTIVO ENTREGADO Y EL VUELTO -->
                        <div class="row mt-2">
                            <div class="col-12">
                                <h6 class="text-start fw-bold">Monto Efectivo: <span
                                        id="EfectivoEntregado">0.00 mxn</span></h6>
                            </div>
                            <div class="col-12">
                                <h6 class="text-start text-danger fw-bold">Vuelto: <span id="Vuelto">0.00 mxn</span>
                                </h6>
                            </div>
                        </div>
                        <!-- MOSTRAR EL SUBTOTAL, IGV Y TOTAL DE LA VENTA -->
                        <div class="row">
                            <div class="col-md-7">
                                <span>SUBTOTAL</span>
                            </div>
                            <div class="col-md-5 text-right">
                                <span class="" id="boleta_subtotal">0.00 mxn</span>
                            </div>
                            <div class="col-md-7">
                                <span>TOTAL</span>
                            </div>
                            <div class="col-md-5 text-right">
                                <span class="" id="boleta_total">0.00 mxn</span>
                            </div>
                        </div>
                    </div><!-- ./ CARD BODY -->
                </div><!-- ./ CARD -->
            </div>
        </div>
    </div>
</div>
<script>
    var table;
    var items = []; // SE USA PARA EL INPUT DE AUTOCOMPLETE
    var itemProducto = 1;
    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });
    $(document).ready(function(){
        /* ======================================================================================
        TRAER EL NRO DE BOLETA
        ======================================================================================*/
        CargarNroBoleta();
        /* ======================================================================================
        EVENTO PARA VACIAR EL CARRITO DE COMPRAS
        =========================================================================================*/
        $("#btnVaciarListado").on('click', function() {
            vaciarListado();
        })
        /* ======================================================================================
        INICIALIZAR LA TABLA DE VENTAS
        ======================================================================================*/        
        table = $('#lstProductosVenta').DataTable({
            "columns": [
                { "data": "id" },
                { "data": "codigo_producto" },
                { "data": "id_categoria" },
                { "data": "nombre_categoria" },
                { "data": "descripcion_producto" },
                { "data": "cantidad" },
                { "data": "precio_venta_producto" },
                { "data": "total" },
                { "data": "acciones" },
                { "data": "aplica_peso" },
                { "data": "precio_mayor_producto" },
                { "data": "precio_oferta_producto" }
            ],
            columnDefs: [{
                    targets: 0,
                    visible: false
                },
                {
                    targets: 3,
                    visible: false
                },
                {
                    targets: 2,
                    visible: false
                },
                {
                    targets: 6,
                    orderable: false
                },
                {
                    targets: 9,
                    visible: false
                },
                {
                    targets: 10,
                    visible: false
                },
                {
                    targets: 11,
                    visible: false
                }
            ],
            "order": [
                [0, 'desc']
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });
        /* ======================================================================================
		TRAER LISTADO DE PRODUCTOS PARA INPUT DE AUTOCOMPLETADO
		======================================================================================*/
		$.ajax({
			async: false,
			url: "ajax/productos.ajax.php",
			method: "POST",
			data: {
				'accion': 6
			},
			dataType: 'json',
			success: function(respuesta) {
				for (let i = 0; i < respuesta.length; i++) {
					items.push(respuesta[i]['descripcion_producto'])
				}
				$("#iptCodigoVenta").autocomplete({
					source: items,
					select: function(event, ui) {
						CargarProductos(ui.item.value);                                                            
						$("#iptCodigoVenta").val("");
						$("#iptCodigoVenta").focus();
						return false;
					}
				})
			}
		});
        
        /* ======================================================================================
        EVENTO QUE REGISTRA EL PRODUCTO EN EL LISTADO CUANDO SE INGRESA EL CODIGO DE BARRAS
        ======================================================================================*/
        $("#iptCodigoVenta").change(function() {
            CargarProductos();        
        });
        /* ======================================================================================
        EVENTO PARA ELIMINAR UN PRODUCTO DEL LISTADO
        ======================================================================================*/
        $('#lstProductosVenta tbody').on('click', '.btnEliminarproducto', function() {
            table.row($(this).parents('tr')).remove().draw();
            recalcularTotales();
        });
        /* ======================================================================================
        EVENTO PARA AUMENTAR LA CANTIDAD DE UN PRODUCTO DEL LISTADO
        ====================================================================================== */
        $('#lstProductosVenta tbody').on('click', '.btnAumentarCantidad', function() {
            var data = table.row($(this).parents('tr')).data(); //Recuperar los datos de la fila
            var idx = table.row($(this).parents('tr')).index();  // Recuperar el Indice de la Fila
            var codigo_producto = data['codigo_producto'];
            var cantidad = data['cantidad'];
            $.ajax({
                async: false,
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: {
                    'accion': 8,
                    'codigo_producto': codigo_producto,
                    'cantidad_a_comprar': cantidad
                },
                dataType: 'json',
                success: function(respuesta) {
                    if (parseInt(respuesta['existe']) == 0) {
                        Toast.fire({
                            icon: 'error',
                            title: ' El producto ' + data['descripcion_producto'] + ' ya no tiene stock'
                        })
                        $("#iptCodigoVenta").val("");
                        $("#iptCodigoVenta").focus();
                    } else {
                        cantidad = parseInt(data['cantidad']) + 1;
                        table.cell(idx, 5).data(cantidad + ' Und(s)').draw();
                        NuevoPrecio = (parseInt(data['cantidad']) * data['precio_venta_producto'].replace("mxn  ", "")).toFixed(2);
                        NuevoPrecio = "mxn  " + NuevoPrecio;
                        table.cell(idx, 7).data(NuevoPrecio).draw();
                        recalcularTotales();
                    }
                }
            });
        });
        /* ======================================================================================
        EVENTO PARA DESMINUIR LA CANTIDAD DE UN PRODUCTO DEL LISTADO
        ======================================================================================*/
        $('#lstProductosVenta tbody').on('click', '.btnDisminuirCantidad', function() {
            var data = table.row($(this).parents('tr')).data();
            if (data['cantidad'].replace('Und(s)', '') >= 2) {
                cantidad = parseInt(data['cantidad'].replace('Und(s)', '')) - 1;
                var idx = table.row($(this).parents('tr')).index();
                table.cell(idx, 5).data(cantidad + ' Und(s)').draw();
                NuevoPrecio = (parseInt(data['cantidad']) * data['precio_venta_producto'].replace("mxn ", "")).toFixed(2);
                NuevoPrecio = "mxn  " + NuevoPrecio;
                table.cell(idx, 7).data(NuevoPrecio).draw();
            }
            recalcularTotales();
        });
        /* ======================================================================================
        EVENTO PARA INGRESAR EL PESO DEL PRODUCTO
        ====================================================================================== */
        $('#lstProductosVenta tbody').on('click', '.btnIngresarPeso', function() {
            var data = table.row($(this).parents('tr')).data();
            Swal.fire({
                title: "",
                text: "Peso del Producto (Grms):",
                input: 'text',
                width: 300,
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
            }).then((result) => {
                if (result.value) {
                    cantidad = result.value;
                    var idx = table.row($(this).parents('tr')).index();
                    table.cell(idx, 5).data(cantidad + ' Kg(s)').draw();
                    NuevoPrecio = ((parseFloat(data['cantidad']) * data['precio_venta_producto'].replace("mxn  ", "")).toFixed(2));
                    NuevoPrecio = "mxn  " + NuevoPrecio;
                    table.cell(idx, 7).data(NuevoPrecio).draw();
                    recalcularTotales();
                }
            });
        });
        /* ======================================================================================
        EVENTO PARA MODIFICAR EL PRECIO DE VENTA DEL PRODUCTO
        ======================================================================================*/
        $('#lstProductosVenta tbody').on('click', '.dropdown-item', function() { 
            codigo_producto = $(this).attr("codigo");
            precio_venta = parseFloat($(this).attr("precio").replaceAll("mxn  ","")).toFixed(2);
            recalcularMontos(codigo_producto,precio_venta);
        });
        /* =======================================================================================
        EVENTO QUE PERMITE CHECKEAR EL EFECTIVO CUANDO ES EXACTO
        =========================================================================================*/
        $("#chkEfectivoExacto").change(function() {
            if ($("#chkEfectivoExacto").is(':checked')) {
                var vuelto = 0;
                var totalVenta = $("#totalVenta").html();
                $("#iptEfectivoRecibido").val(totalVenta);
                $("#EfectivoEntregado").html(totalVenta);
                var EfectivoRecibido = parseFloat($("#EfectivoEntregado").html().replace("mxn  ", ""));
                vuelto = parseFloat(totalVenta) - parseFloat(EfectivoRecibido);
                $("#Vuelto").html(vuelto.toFixed(2));
            } else {
                
                $("#iptEfectivoRecibido").val("")
                $("#EfectivoEntregado").html("0.00");
                $("#Vuelto").html("0.00");
            }
        })
        /* ======================================================================================
        EVENTO QUE SE DISPARA AL DIGITAR EL MONTO EN EFECTIVO ENTREGADO POR EL CLIENTE
        =========================================================================================*/
        $("#iptEfectivoRecibido").keyup(function() {
            actualizarVuelto();
        });
        /* ======================================================================================
        EVENTO PARA INICIAR EL REGISTRO DE LA VENTA
        ====================================================================================== */
        $("#btnIniciarVenta").on('click', function() {
            realizarVenta();
        })
    })//FIN DOCUMENT READY
    /*===================================================================*/
    //FUNCION PARA CARGAR EL NRO DE BOLETA
    /*===================================================================*/
    function CargarNroBoleta() {
        $.ajax({
            async: false,
            url: "ajax/ventas.ajax.php",
            method: "POST",
            data: {
                'accion': 1
            },
            dataType: 'json',
            success: function(respuesta) {
                serie_boleta = respuesta["serie_boleta"];
                nro_boleta = respuesta["nro_venta"];
                $("#iptNroSerie").val(serie_boleta);
                $("#iptNroVenta").val(nro_boleta);
            }
        });
    }
    /*===================================================================*/
    //FUNCION PARA LIMPIAR TOTALMENTE EL CARRITO DE VENTAS
    /*===================================================================*/
    function vaciarListado() {
        table.clear().draw();
        LimpiarInputs();
    }
    /*===================================================================*/
    //FUNCION PARA LIMPIAR LOS INPUTS DE LA BOLETA Y LABELS QUE TIENEN DATOS
    /*===================================================================*/
    function LimpiarInputs() {
        $("#totalVenta").html("0.00");
        $("#totalVentaRegistrar").html("0.00");
        $("#boleta_total").html("0.00");
        $("#iptEfectivoRecibido").val("");
        $("#EfectivoEntregado").html("0.00");
        $("#Vuelto").html("0.00");
        $("#chkEfectivoExacto").prop('checked', false);
        $("#boleta_subtotal").html("0.00");
        $("#boleta_igv").html("0.00")
    }/* FIN LimpiarInputs */
    /*===================================================================*/
    //FUNCION PARA ACTUALIZAR EL VUELTO
    /*===================================================================*/
    function actualizarVuelto(){
        var totalVenta = $("#totalVenta").html();        
        $("#chkEfectivoExacto").prop('checked', false);
        var efectivoRecibido = $("#iptEfectivoRecibido").val();
        if (efectivoRecibido > 0) {
            $("#EfectivoEntregado").html(parseFloat(efectivoRecibido).toFixed(2));
            vuelto = parseFloat(efectivoRecibido) - parseFloat(totalVenta);
            $("#Vuelto").html(vuelto.toFixed(2));
        } else {
            $("#EfectivoEntregado").html("0.00");
            $("#Vuelto").html("0.00");
        }
    }
    function recalcularMontos(codigo_producto, precio_venta){
        table.rows().eq(0).each(function(index) {
            var row = table.row(index);
            var data = row.data();
            if (data['codigo_producto'] == codigo_producto) {
                // AUMENTAR EN 1 EL VALOR DE LA CANTIDAD
                table.cell(index, 6).data("mxn  " + parseFloat(precio_venta).toFixed(2)).draw();
                // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                NuevoPrecio = (parseFloat(data['cantidad']) * data['precio_venta_producto'].replaceAll("mxn  ", "")).toFixed(2);
                NuevoPrecio = "mxn  " + NuevoPrecio;
                table.cell(index, 7).data(NuevoPrecio).draw();
            }
        });
        // RECALCULAMOS TOTALES
        recalcularTotales();
    }
    /*===================================================================*/
    //FUNCION PARA RECALCULAR LOS TOTALES DE VENTA
    /*===================================================================*/
    function recalcularTotales(){
        var TotalVenta = 0.00;
        table.rows().eq(0).each(function(index) {
            var row = table.row(index);
            var data = row.data();
            TotalVenta = parseFloat(TotalVenta) + parseFloat(data['total'].replace("mxn  ", ""));
        });
        $("#totalVenta").html("");
        $("#totalVenta").html(TotalVenta.toFixed(2));
        var totalVenta = $("#totalVenta").html();
        var igv = parseFloat(totalVenta) * 0.18
        var subtotal = parseFloat(totalVenta) - parseFloat(igv);
        $("#totalVentaRegistrar").html(totalVenta);
        $("#boleta_subtotal").html(parseFloat(subtotal).toFixed(2));
        $("#boleta_igv").html(parseFloat(igv).toFixed(2));
        $("#boleta_total").html(parseFloat(totalVenta).toFixed(2));
        //limpiamos el input de efectivo exacto; desmarcamos el check de efectivo exacto
        //borramos los datos de efectivo entregado y vuelto
        $("#iptEfectivoRecibido").val("");
        $("#chkEfectivoExacto").prop('checked', false);
        $("#EfectivoEntregado").html("0.00");
        $("#Vuelto").html("0.00");
        $("#iptCodigoVenta").val("");
        $("#iptCodigoVenta").focus();
    }
    /*===================================================================*/
    //FUNCION PARA CARGAR PRODUCTOS EN EL DATATABLE
    /*===================================================================*/
    function CargarProductos(producto = "") {
        if (producto != "") {
            var codigo_producto = producto;
        } else {
            var codigo_producto = $("#iptCodigoVenta").val();
        }
        var producto_repetido = 0;
        /*===================================================================*/
        // AUMENTAMOS LA CANTIDAD SI EL PRODUCTO YA EXISTE EN EL LISTADO
        /*===================================================================*/
        table.rows().eq(0).each(function(index) {
            var row = table.row(index);
            var data = row.data();
            if (parseInt(codigo_producto) == data['codigo_producto']) {
                producto_repetido = 1;
                $.ajax({
                    async: false,
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: {
                        'accion': 8,
                        'codigo_producto': data['codigo_producto'],
                        'cantidad_a_comprar': data['cantidad']
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        if (parseInt(respuesta['existe']) == 0) {
                            Toast.fire({
                                icon: 'error',
                                title: ' El producto ' + data['descripcion_producto'] + ' ya no tiene stock'
                            })
                            $("#iptCodigoVenta").val("");
                            $("#iptCodigoVenta").focus();
                            
                        } else {
                            // AUMENTAR EN 1 EL VALOR DE LA CANTIDAD
                            table.cell(index, 5).data(parseFloat(data['cantidad']) + 1 + ' Und(s)').draw();
                            // ACTUALIZAR EL NUEVO PRECIO DEL ITEM DEL LISTADO DE VENTA
                            NuevoPrecio = (parseInt(data['cantidad']) * data['precio_venta_producto'].replace("mxn  ", "")).toFixed(2);
                            NuevoPrecio = "mxn  " + NuevoPrecio;
                            table.cell(index, 7).data(NuevoPrecio).draw();
                            // RECALCULAMOS TOTALES
                            recalcularTotales();
                        }
                    }
                });
            }
        });
        if(producto_repetido == 1){
            return;   
        }  
        $.ajax({
            url: "ajax/productos.ajax.php",
            method: "POST",
            data: {
                'accion': 7, //BUSCAR PRODUCTOS POR SU CODIGO DE BARRAS
                'codigo_producto': codigo_producto
            },
            dataType: 'json',
            success: function(respuesta) {
                
                /*===================================================================*/
                //SI LA RESPUESTA ES VERDADERO, TRAE ALGUN DATO
                /*===================================================================*/
                if (respuesta) {
                    var TotalVenta = 0.00;
                    if (respuesta['aplica_peso'] == 1) {
                    
                        table.row.add({
                            'id': itemProducto,
                            'codigo_producto': respuesta['codigo_producto'],
                            'id_categoria': respuesta['id_categoria'],
                            'nombre_categoria': respuesta['nombre_categoria'],
                            'descripcion_producto': respuesta['descripcion_producto'],
                            'cantidad': respuesta['cantidad'] + ' Kg(s)',
                            'precio_venta_producto': respuesta['precio_venta_producto'],
                            'total' : respuesta['total'],
                            'acciones': "<center>" +
                                            "<span class='btnIngresarPeso text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                                            "<i class='fas fa-balance-scale fs-5'></i> " +
                                            "</span> " +
                                            "<span class='btnEliminarproducto text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                            "<i class='fas fa-trash fs-5'> </i> " +
                                            "</span>" +
                                            "<div class='btn-group'>" +
                                                "<button type='button' class=' p-0 btn btn-primary transparentbar dropdown-toggle btn-sm' data-bs-toggle='dropdown' aria-expanded='false'>" +
                                                "<i class='fas fa-cog text-primary fs-5'></i> <i class='fas fa-chevron-down text-primary'></i>" +
                                                "</button>" +
                                                "<ul class='dropdown-menu'>" +
                                                    "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + respuesta['precio_venta_producto'] + "' style='cursor:pointer; font-size:14px;'>Normal (" + respuesta['precio_venta_producto'] + ")</a></li>" +
                                                    "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + respuesta['precio_mayor_producto'] + "' style='cursor:pointer; font-size:14px;'>Por Mayor (mxn  " + parseFloat(respuesta['precio_mayor_producto']).toFixed(2) + ")</a></li>" +
                                                    "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + respuesta['precio_oferta_producto'] + "' style='cursor:pointer; font-size:14px;'>Oferta (mxn  " + parseFloat(respuesta['precio_oferta_producto']).toFixed(2) + ")</a></li>" +
                                                "</ul>" +
                                            "</div>" +
                                        "</center>",
                            'aplica_peso': respuesta['aplica_peso'],
                            'precio_mayor_producto': respuesta['precio_mayor_producto'],
		                    'precio_oferta_producto': respuesta['precio_oferta_producto']
                        }).draw();
                        itemProducto = itemProducto + 1;
                    } else {
                        table.row.add({
                            'id': itemProducto,
                            'codigo_producto': respuesta['codigo_producto'],
                            'id_categoria': respuesta['id_categoria'],
                            'nombre_categoria': respuesta['nombre_categoria'],
                            'descripcion_producto': respuesta['descripcion_producto'],
                            'cantidad': respuesta['cantidad'] + ' Und(s)',
                            'precio_venta_producto': respuesta['precio_venta_producto'],
                            'total' : respuesta['total'],
                            'acciones': "<center>" +
                                            "<span class='btnAumentarCantidad text-success px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Aumentar Stock'> " +
                                            "<i class='fas fa-cart-plus fs-5'></i> " +
                                            "</span> " +
                                            "<span class='btnDisminuirCantidad text-warning px-1' style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Disminuir Stock'> " +
                                            "<i class='fas fa-cart-arrow-down fs-5'></i> " +
                                            "</span> " +
                                            "<span class='btnEliminarproducto text-danger px-1'style='cursor:pointer;' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar producto'> " +
                                            "<i class='fas fa-trash fs-5'> </i> " +
                                            "</span>"+
                                            "<div class='btn-group'>" +
                                                "<button type='button' class=' p-0 btn btn-primary transparentbar dropdown-toggle btn-sm' data-bs-toggle='dropdown' aria-expanded='false'>" +
                                                "<i class='fas fa-cog text-primary fs-5'></i> <i class='fas fa-chevron-down text-primary'></i>" +
                                                "</button>" +
                                                "<ul class='dropdown-menu'>" +
                                                    "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + respuesta['precio_venta_producto'] + "' style='cursor:pointer; font-size:14px;'>Normal (" + respuesta['precio_venta_producto'] + ")</a></li>" +
                                                    "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + respuesta['precio_mayor_producto'] + "' style='cursor:pointer; font-size:14px;'>Por Mayor (mxn  " + parseFloat(respuesta['precio_mayor_producto']).toFixed(2) + ")</a></li>" +
                                                    "<li><a class='dropdown-item' codigo = '" + respuesta['codigo_producto'] + "' precio=' " + respuesta['precio_oferta_producto'] + "' style='cursor:pointer; font-size:14px;'>Oferta (mxn  " + parseFloat(respuesta['precio_oferta_producto']).toFixed(2) + ")</a></li>" +
                                                "</ul>" +
                                            "</div>" +
                                        "</center>",
                            'aplica_peso': respuesta['aplica_peso'],
                            'precio_mayor_producto': respuesta['precio_mayor_producto'],
		                    'precio_oferta_producto': respuesta['precio_oferta_producto']
                        }).draw();
                        itemProducto = itemProducto + 1;
                    }
                    //  Recalculamos el total de la venta
                    recalcularTotales();
                /*===================================================================*/
                //SI LA RESPUESTA ES FALSO, NO TRAE ALGUN DATO
                /*===================================================================*/
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: ' El producto no existe o no tiene stock'
                    });
                    $("#iptCodigoVenta").val("");
                    $("#iptCodigoVenta").focus();
                }
            }
        });     
    }/* FIN CargarProductos */
    /*===================================================================*/
    //REALIZAR LA VENTA
    /*===================================================================*/
    function realizarVenta(){
        var count = 0;
        var totalVenta = $("#totalVenta").html();
        var nro_boleta = $("#iptNroVenta").val();
        table.rows().eq(0).each(function(index) {
            count = count + 1;
        });
        if (count > 0) {
            if ($("#iptEfectivoRecibido").val() > 0 && $("#iptEfectivoRecibido").val() != "") {
                if ($("#iptEfectivoRecibido").val() < parseFloat(totalVenta)) {
                    Toast.fire({
                        icon: 'warning',
                        title: 'El efectivo es menor al costo total de la venta'
                    });
                    return false;
                }
                var formData = new FormData();
			    var arr = [];
                table.rows().eq(0).each(function(index) {
                    var row = table.row(index);
                    var data = row.data();
                    arr[index] = data['codigo_producto'] + "," + parseFloat(data['cantidad']) + "," + data['total'].replace("mxn  ", "");
                    formData.append('arr[]', arr[index]);
                });
                formData.append('nro_boleta', nro_boleta);
                formData.append('descripcion_venta', 'Venta realizada con Nro Boleta: ' + nro_boleta);
                formData.append('total_venta', parseFloat(totalVenta));
                $.ajax({
                    url: "ajax/ventas.ajax.php",
                    method: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(respuesta) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: respuesta,
                            showConfirmButton: false,
                            timer: 1500
                        })
                        table.clear().draw();
                        LimpiarInputs();
                        CargarNroBoleta();
                    }
                });
            }else {
                Toast.fire({
                    icon: 'warning',
                    title: 'Ingrese el monto en efectivo'
                });
            }
        } else {
            Toast.fire({
                icon: 'warning',
                title: 'No hay productos en el listado.'
            });
        }
        $("#iptCodigoVenta").focus();
    }/* FIN realizarVenta */
</script>