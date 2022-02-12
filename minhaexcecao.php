<?php
class  MinhaExcecao extends DomainException {
public function  exibeAle(){
    echo 'Ale';
}

}
try{
throw new MinhaExcecao();
}catch (MinhaExcecao $e){
    $e->exibeAle();
}