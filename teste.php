<?php

namespace Home\Desktop;

class SortSecretFriend
{
    public function __construct(private array $ids) 
    {}
    
    public function sort() {
        $alreadySorted = [];
        $result = [];
        echo "Iniciando sorteio do amigo secreto. \n";
        foreach ($this->ids as $id => $name) {
            do {
                $sort = rand(1, count($this->ids));
            } while ($sort === $id || in_array($sort, $alreadySorted));
            $alreadySorted[] = $sort;
            $result[$name]   = $this->ids[$sort];
            $return[]        = $name . ' tirou o(a) ' .  $this->ids[$sort];
        }
        return implode("\n",$return);
    }
}

