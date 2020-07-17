<?php
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this->tampada == true) {
            echo "<h2>ERRO!</h2><br/><h3>Não posso rabiscar!!!</h3>";
        } else {
            echo "<h2>Estou rabiscando...HAHAHA!</h2>";
        }
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }
}
?>