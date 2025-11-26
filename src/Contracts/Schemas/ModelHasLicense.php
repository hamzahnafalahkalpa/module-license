<?php

namespace Hanafalah\ModuleLicense\Contracts\Schemas;

use Hanafalah\ModuleLicense\Contracts\Data\ModelHasLicenseData;
//use Hanafalah\ModuleLicense\Contracts\Data\ModelHasLicenseUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleLicense\Schemas\ModelHasLicense
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateModelHasLicense(?ModelHasLicenseData $model_has_license_dto = null)
 * @method Model prepareUpdateModelHasLicense(ModelHasLicenseData $model_has_license_dto)
 * @method bool deleteModelHasLicense()
 * @method bool prepareDeleteModelHasLicense(? array $attributes = null)
 * @method mixed getModelHasLicense()
 * @method ?Model prepareShowModelHasLicense(?Model $model = null, ?array $attributes = null)
 * @method array showModelHasLicense(?Model $model = null)
 * @method Collection prepareViewModelHasLicenseList()
 * @method array viewModelHasLicenseList()
 * @method LengthAwarePaginator prepareViewModelHasLicensePaginate(PaginateData $paginate_dto)
 * @method array viewModelHasLicensePaginate(?PaginateData $paginate_dto = null)
 * @method array storeModelHasLicense(?ModelHasLicenseData $model_has_license_dto = null)
 * @method Collection prepareStoreMultipleModelHasLicense(array $datas)
 * @method array storeMultipleModelHasLicense(array $datas)
 */

interface ModelHasLicense extends DataManagement
{
    public function prepareStoreModelHasLicense(ModelHasLicenseData $model_has_license_dto): Model;
}