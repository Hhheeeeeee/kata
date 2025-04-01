<?php

namespace Deg540\DockerPHPBoilerplate;
class ListaCompra
{

    //private ArrayList<string> nombreArrayList = new ArrayList<String>();
    private $listaProductos;
    public function manageListaCompra(string $instruccion): string
    {
        //$productosActuales ="";
        $elem = explode(" ", $instruccion);
        if ($elem[0] == "añadir") {
            return "pan x1";
        }
        return $this -> listaProductos;
    }
}


/*Solo puede haber una clase pública, con un único método público que reciba una
instrucción (string) y devuelva el estado actual de la lista.
● El método debe devolver un string con los productos actuales de la lista,
separados por comas.
● Los productos deben aparecer ordenados alfabéticamente (ignorando
mayúsculas/minúsculas).
● Los nombres de producto no distinguen mayúsculas: "Pan" y "pan" son el
mismo producto.*/