<?php


class ProductosControlador{

    static public function ctrCargaMasivaProductos($fileProductos){
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        return $respuesta;
    }

    static public function ctrListarProductos(){
        $productos = ProductosModelo::mdlListarProductos();
        return $productos;
    }

    static public function ctrRegistrarProducto($codigo_producto, $id_categoria_producto,$descripcion_producto,$precio_compra_producto,
                                                $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock_producto,$ventas_producto){
        $registroProducto = ProductosModelo::mdlRegistrarProducto($codigo_producto, $id_categoria_producto,$descripcion_producto,$precio_compra_producto,
                                        $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock_producto,$ventas_producto);
        return $registroProducto;
    }

    static public function ctrActualizarStock($table, $data, $id, $nameId){
        $respuesta = ProductosModelo::mdlActualizarInformacion($table, $data, $id, $nameId);
        return $respuesta;
    }

    static public function ctrActualizarProducto($table, $data, $id, $nameId){
        $respuesta = ProductosModelo::mdlActualizarInformacion($table, $data, $id, $nameId);
        return $respuesta;
    }

    static public function ctrEliminarProducto($table, $id, $nameId){
        $respuesta = ProductosModelo::mdlEliminarInformacion($table, $id, $nameId);
        return $respuesta;
    }

    /*===================================================================
    LISTAR NOMBRE DE PRODUCTOS PARA INPUT DE AUTO COMPLETADO
    ====================================================================*/
    static public function ctrListarNombreProductos(){
        $producto = ProductosModelo::mdlListarNombreProductos();
        return $producto;
    }

    /*===================================================================
                COMO NO LO OCUPAMOS LO COMENTAMOS
    BUSCAR PRODUCTO POR SU CODIGO DE BARRAS
    static public function ctrGetDatosProducto($codigo_producto){
        $producto = ProductosModelo::mdlGetDatosProducto($codigo_producto);
        return $producto;
    }
    ====================================================================*/


    static public function ctrVerificaStockProducto($codigo_producto,$cantidad_a_comprar){
        $respuesta = ProductosModelo::mdlVerificaStockProducto($codigo_producto, $cantidad_a_comprar);
        return $respuesta;
    }
}