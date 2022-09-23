<?php
//lab 71
class MiClase{
    const constante = 'valor constante';
    function mostrarconstante(){
        echo self::constante . "\n";
    }

}
?>
<?php
//lab 72
abstract class ClaseAbstracta{
    //se fuerza la herencia de la clase para definir estos metodos
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);
    //metodo comun
    public function printOut(){
        print $this->tomarValor() . "<br>";
    }
}
class ClaseConcretal extends ClaseAbstracta {
    protected function tomarValor(){
        return "ClaseConcretal";
    }
    public function prefixValor($prefix){
        return "{$prefix}ClaseConcretal";
    }
}
class ClaseConcretal2 extends ClaseAbstracta {
    protected function tomarValor(){
        return "ClaseConcretal2";
    }
    public function prefixValor($prefix){
        return "{$prefix}ClaseConcretal2";
    }
}
?>
<?php
//lab 73

interface iTemplate {
    public function ponerVariable($nombre, $var);
    public function verHtml($template);
}
class Template implements iTemplate {
    private $vars = array();
    public function ponerVariable($nombre, $var) {
        $this->vars[$nombre] = $var;
     }
    public function verHtml($template) {
        foreach($this->vars as $nombre => $value) {
            $template = str_replace('{' . $nombre .'}', $value, $template);
            //          str_replace(palabra remplazar, palabra que lo remplazara, oracion en la que se busca la palabra)
        }
        return $template;
    }
}
?>
<?php
//lab 75
class SubObject{
    static $instances = 0;
    public $instance;
    public function __construct() {
        $this->instance = ++self::$instances;
    }
    public function __clone() {
        $this->instance = ++self::$instances;
    }
}
class MyCloneable{
    public $object1;
    public $object2;
    function __clone(){
    // Forzar una copia de this->object
        $this->object1 = clone $this->object1;
    }
}
?>
<?php
//lab 76
    class Cilindro{
        protected $pi;
        protected $diametro;
        protected $altura;
        protected $radio;
        function __construct($d, $a){
            $this->diametro = $d;
            $this->altura = $a;
            $this->pi = 3.141593;
            $this->radio=$d/2;
        }
        function obtener_radio(){
            return $this->radio;
        }
        function calc_volumen(){
            return $this->pi*$this->radio*$this->radio*$this->altura;
        }
        function calc_area(){
            return 2*$this->pi*$this->radio*($this->radio+$this->altura);
        }
    }


?>