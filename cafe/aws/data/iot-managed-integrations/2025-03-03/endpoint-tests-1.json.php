<?php
// This file was auto-generated from sdk-root/src/data/iot-managed-integrations/2025-03-03/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For custom endpoint with region not set and fips disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'Endpoint' => 'https://example.com', 'UseFIPS' => false, ], ], [ 'documentation' => 'For custom endpoint with fips enabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'Endpoint' => 'https://example.com', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations-fips.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations-fips.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations-fips.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-isoe-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations-fips.eu-isoe-west-1.cloud.adc-e.uk', ], ], 'params' => [ 'Region' => 'eu-isoe-west-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-isoe-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations.eu-isoe-west-1.cloud.adc-e.uk', ], ], 'params' => [ 'Region' => 'eu-isoe-west-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isof-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations-fips.us-isof-south-1.csp.hci.ic.gov', ], ], 'params' => [ 'Region' => 'us-isof-south-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isof-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.iotmanagedintegrations.us-isof-south-1.csp.hci.ic.gov', ], ], 'params' => [ 'Region' => 'us-isof-south-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'Missing region', 'expect' => [ 'error' => 'Invalid Configuration: Missing Region', ], ], ], 'version' => '1.0',];
