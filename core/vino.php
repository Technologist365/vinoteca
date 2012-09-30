<?php
class Vino {
    private $id;
    private $nombre;
    private $precio;
    private $grados;
    private $color;
    private $comentario;    

    //SET
    function setId($id)
    {
        $this->id = $id;
    }
    function setNombre($nombre)
    {
    	$this->nombre = $nombre;
    }
    function setPrecio($precio)
    {
        $this->precio = $precio;        
    }
    function setGrados($grados)
    {
        $this->grados = $grados;
    }
    function setColor($color)
    {
    	$this->color = $color;
    }
    function setComentario($comentario)
    {
    	$this->comentario = $comentario;
    }

    //GET
    function getId()
    {
        return $this->id;
    }
	function getNombre()
    {
    	return $this->nombre;
    }
    function getPrecio()
    {
        return $this->precio;        
    }
    function getGrados()
    {
        return $this->grados;
    }
    function getColor()
    {
    	return $this->color;
    }
    function getComentario()
    {
    	return $this->comentario;
    }     
}
?>
