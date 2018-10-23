<?php

namespace App\Http\Resources;

abstract class ResourceAbstract
{
  private $aData = array();

  final private function __construct() {}

  final public static function factory(): self
  {
    return (new static());
  }

  final public function addData(string $key, $data): self
  {
    $this->aData[$key] = $data;

    return $this;
  }

  final public function addDatas(array $aDatas): self
  {
    foreach ($aDatas as $key => $data) {
      $this->addData($key, $data);
    }

    return $this;
  }

  final public function toArray(): array
  {
    return array(
      'aData' => $this->aData,
    );
  }
}
