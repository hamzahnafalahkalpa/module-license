<?php

namespace Hanafalah\ModuleLicense\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Hanafalah\ModuleLicense\{
    Supports\BaseModuleLicense
};
use Hanafalah\ModuleLicense\Contracts\Schemas\License as ContractsLicense;
use Hanafalah\ModuleLicense\Contracts\Data\LicenseData;

class License extends BaseModuleLicense implements ContractsLicense
{
    protected string $__entity = 'License';
    public $license_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'license',
            'tags'     => ['license', 'license-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreLicense(LicenseData $license_dto): Model{
        $add = [
            'name' => $license_dto->name
        ];
        $guard  = ['id' => $license_dto->id];
        $create = [$guard, $add];
        // if (isset($license_dto->id)){
        //     $guard  = ['id' => $license_dto->id];
        //     $create = [$guard, $add];
        // }else{
        //     $create = [$add];
        // }

        $license = $this->usingEntity()->updateOrCreate(...$create);
        $this->fillingProps($license,$license_dto->props);
        $license->save();
        return $this->license_model = $license;
    }
}