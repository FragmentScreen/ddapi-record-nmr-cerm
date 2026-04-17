<?php

namespace Fragmentscreen\NmrCerm\recordHandlers;
use FAE\datadeposition\recordHandlers\GenericNmrRecordSchemaHandler;

/**
 * Generic record for storing arbitrary NMR data.
 * You should generally use more specific record types where possible, this is really just for testing or edge-cases.
 */
class GenericNmrCermRecordSchemaHandler extends GenericNmrRecordSchemaHandler
{

  public function type(): string
  {
    return parent::type().'_CERM';
  }

  public function description(): string 
  {
    return "Generic record containing multiple fields, use for storing un-differentiated NMR data from CERM, where semantic context is carried by the fields used";
  }
}
