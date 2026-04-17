<?php

namespace Fragmentscreen\NmrCerm\fieldHandlers;

/**
 * Field handler for CERM NMR dataset.
 */
class JsonNmrCermExperimentHandler extends JsonNmrCermHandler
{
  protected function validate($content): bool
  {
    // Do some v. basic validation
    return parent::validate($content);
  }

  public function type(): string
  {
    return parent::type().'_Experiment';
  }

  public function doOutput(): mixed
  {
    return $this->getField()['content'];
  }

  public function description(): string 
  {
    return "JSON field representing an NMR experiment from CERM";
  }
}
