<?php
//crea una pila en php que reciba dato de pila.html
class pila{
    private $pila=array();
    private $tope=0;
    public function insertar($valor){
        $this->pila[$this->tope]=$valor;
        $this->tope++;
    }
    public function mostrar(){
        for($i=($this->tope-1);$i>=0;$i--){
            echo $this->pila[$i]."<br>";
        }
    }
    public function eliminar(){
        $this->tope--;
        unset($this->pila[$this->tope]);
    }
}

?>
