<?php

namespace Hanafalah\ModuleLicense\Concerns;

trait HasModelHasLicense
{
    public function modelHasLicense(){return $this->morphOneModel('ModelHasLicense','model');}
}
