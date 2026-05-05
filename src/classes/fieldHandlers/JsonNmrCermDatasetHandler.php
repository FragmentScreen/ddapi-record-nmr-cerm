<?php

namespace Fragmentscreen\NmrCerm\fieldHandlers;
use FAE\datadeposition\fieldInterfaces\Dataset;

/**
 * Field handler for CERM NMR dataset.
 */
class JsonNmrCermDatasetHandler extends JsonNmrCermHandler implements Dataset
{
  protected function validate($content): bool
  {
    // Do some v. basic validation
    return parent::validate($content);
  }

  public function type(): string
  {
    return parent::type().'_Dataset';
  }

  public function doOutput(): mixed
  {
    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "JSON field representing an NMR dataset from CERM";
  }
}
