<?php

namespace Classes\App;

class Type {
    public function create($class, $args=[]) {
        
        $className = "Classes\\App\\".$class;

        return new $className(...array_values($args));
    }
}
