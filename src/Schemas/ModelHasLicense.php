<?php

namespace Hanafalah\ModuleLicense\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Hanafalah\ModuleLicense\{
    Supports\BaseModuleLicense
};
use Hanafalah\ModuleLicense\Contracts\Schemas\ModelHasLicense as ContractsModelHasLicense;
use Hanafalah\ModuleLicense\Contracts\Data\ModelHasLicenseData;

class ModelHasLicense extends BaseModuleLicense implements ContractsModelHasLicense
{
    protected string $__entity = 'ModelHasLicense';
    public $model_has_license_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'model_has_license',
            'tags'     => ['model_has_license', 'model_has_license-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreModelHasLicense(ModelHasLicenseData $model_has_license_dto): Model{
        $add = [
            'model_type' => $model_has_license_dto->model_type,
            'model_id' => $model_has_license_dto->model_id,
        ];
        if (isset($model_has_license_dto->id)){
            $guard  = ['id' => $model_has_license_dto->id];
        }else{
            $guard = ['license_id' => $model_has_license_dto->license_id];
        }
        $create = [$guard, $add];

        $model_has_license = $this->usingEntity()->updateOrCreate(...$create);

        $model = $model_has_license_dto->model_model ?? $model_has_license->model;
        $model_has_license_dto->props['prop_model'] = $model->toViewApi()->resolve();
        $license = $model_has_license_dto->license_model ?? $model_has_license->license;
        $model_has_license_dto->props['prop_license'] = $license->toViewApi()->resolve();

        $this->fillingProps($model_has_license,$model_has_license_dto->props);
        $model_has_license->save();
        return $this->model_has_license_model = $model_has_license;
    }
}