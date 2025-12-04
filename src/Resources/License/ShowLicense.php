<?php

namespace Hanafalah\ModuleLicense\Resources\License;

class ShowLicense extends ViewLicense
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
      'reference' => $this->relationValidation('reference',function(){
        return $this->reference->toViewApi()->resolve();
      },$this->prop_reference),
    ];
    $arr = $this->mergeArray(parent::toArray($request),$arr);
    return $arr;
  }
}
