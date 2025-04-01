<?php

namespace Deg540\DockerPHPBoilerplate;
class ListaCompra
{

    //private ArrayList<string> nombreArrayList = new ArrayList<String>();
    private $listaProductos;
    public function manageListaCompra(string $instruccion): string
    {
        //añadir Pan 2

        $elements = explode(" ", $instruccion);
        $item = strtolower($elements[1]);
        if (!empty($this->listaProductos)){
            echo "Listaa: ".$this->listaProductos[$item]."\n";}

        if ($elements[0] == "añadir") {

            if (isset($elements[2])){
                $quantity = (int) $elements[2];

                if (!empty($this->listaProductos) && str_contains($item,$this->listaProductos)){
                    $aux = explode("x",$this -> listaProductos[$item]);
                    //echo "aux[1] -> ".$aux[1];
                    $initialQuantity = (int) $aux[1];
                    $this -> listaProductos[$item] ="$item"." "."x"."$quantity+$initialQuantity";
                }
                elseif (!str_contains($item,$this->listaProductos)){
                    $listaProductos[$item] = "$item"." "."x"."$quantity";
                }
            }

            $this -> listaProductos[$item] ="$item"." "."x1";
        }

        foreach ($this -> listaProductos as $key => $value) {
            return $value;
        }
        return "";
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