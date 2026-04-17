<?php

use FAE\datadeposition\recordHandlers\recordSchemaHandler;
use Fragmentscreen\NmrCerm\recordHandlers\GenericNmrCermRecordSchemaHandler;

use FAE\datadeposition\fieldHandlers\fieldHandler;
use Fragmentscreen\NmrCerm\fieldHandlers\JsonNmrCermDatasetHandler;
use Fragmentscreen\NmrCerm\fieldHandlers\JsonNmrCermExperimentHandler;
use Fragmentscreen\NmrCerm\fieldHandlers\JsonNmrCermHandler;
use Fragmentscreen\NmrCerm\fieldHandlers\JsonNmrCermSampleHandler;

recordSchemaHandler::registerHandler(GenericNmrCermRecordSchemaHandler::class);
fieldHandler::registerHandler(JsonNmrCermHandler::class);
fieldHandler::registerHandler(JsonNmrCermDatasetHandler::class);
fieldHandler::registerHandler(JsonNmrCermSampleHandler::class);
fieldHandler::registerHandler(JsonNmrCermExperimentHandler::class);
