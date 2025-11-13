<?php

namespace Hanafalah\ModuleLicense\Concerns;

trait HasItemStuff
{
    public function itemStuff()
    {
        return $this->belongsToModel('ItemStuff');
    }
}
