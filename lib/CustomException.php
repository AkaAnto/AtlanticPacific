<?php

class Generic_Exception extends Exception{
    
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

abstract class CustomException {

    static function build_exception($explanation, $line, $function, $code = 0){
        $message =  "Exception in : ".$function." line: ".$line." Info: ".$explanation;
        return new Generic_Exception($message,$code);
    }
}

?>
