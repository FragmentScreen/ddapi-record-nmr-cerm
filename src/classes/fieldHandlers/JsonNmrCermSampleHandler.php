<?php

namespace Fragmentscreen\NmrCerm\fieldHandlers;

/**
 * Field handler for CERM NMR sample.
 */
class JsonNmrCermSampleHandler extends JsonNmrCermHandler
{
  protected function validate($content): bool
  {
    // Do some v. basic validation
    return parent::validate($content);
  }

  public function type(): string
  {
    return parent::type().'_Sample';
  }

  public function doOutput(): mixed
  {
    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "JSON field representing an NMR sample from CERM";
  }
}
