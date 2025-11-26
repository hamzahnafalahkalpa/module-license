<?php

namespace Hanafalah\ModuleLicense\Resources\ModelHasLicense;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewModelHasLicense extends ApiResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [
      'id' => $this->id,
      'license_id' => $this->license_id,
      'license' => $this->relationValidation('license', function(){
          return $this->license->toViewApi()->resolve();
      },$this->prop_license),
      'model_type' => $this->model_type,
      'model_id' => $this->model_id,
      'model' => $this->relationValidation('model', function(){
          return $this->model->toViewApi()->resolve();
      },$this->prop_model),
      'created_at' => $this->created_at,
      'updated_at' => $this->updated_at,
    ];
    return $arr;
  }
}
