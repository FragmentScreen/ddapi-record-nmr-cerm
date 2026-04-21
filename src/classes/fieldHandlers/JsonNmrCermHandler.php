<?php

namespace Fragmentscreen\NmrCerm\fieldHandlers;
use FAE\datadeposition\fieldHandlers\JSONHandler;

/**
 * Field handler for CERM NMR dataset.
 */
class JsonNmrCermHandler extends JSONHandler
{
  protected function validate($content): bool
  {
    // Do some v. basic validation
    return parent::validate($content);
  }

  public function type(): string
  {
    return parent::type().'_NMR_CERM';
  }

  public function doOutput(): mixed
  {
    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "JSON field representing generic NMR data from CERM";
  }
}
