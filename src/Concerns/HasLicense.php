<?php

namespace Hanafalah\ModuleLicense\Concerns;

trait HasLicense
{
    public function license(){return $this->morphOneModel('License','reference');}
    public function licenses(){return $this->morphManyModel('License','reference');}
}
