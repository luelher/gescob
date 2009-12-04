<?php

class Vendedor extends BaseVendedor
{
    public function __toString()
    {
        return $this->ven_des;
    }
}
