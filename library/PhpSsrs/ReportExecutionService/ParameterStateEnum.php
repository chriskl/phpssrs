<?php

namespace PhpSsrs\ReportExecutionService;

class ParameterStateEnum
{
  const __default = 'HasValidValue';
  const HasValidValue = 'HasValidValue';
  const MissingValidValue = 'MissingValidValue';
  const HasOutstandingDependencies = 'HasOutstandingDependencies';
  const DynamicValuesUnavailable = 'DynamicValuesUnavailable';


}
