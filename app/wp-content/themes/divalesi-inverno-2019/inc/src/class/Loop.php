<?php

namespace Divalesi;

class Loop{

    protected $template;

    public function __construct(string $path_template){
        $this->template = $path_template;
    }

}   