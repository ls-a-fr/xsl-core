<?php

declare(strict_types=1);

use Lsa\Xsd\Generator\XsdGenerator;
use Lsa\Xsl\Core\Validation\CurrentValidationProfile;
use Lsa\Xsl\Core\Xsd\Fop\FopProfile;

require_once __DIR__.'/../vendor/autoload.php';

$profile = new FopProfile(FopProfile::SPECIFICATION_EXTENSION);
$generator = new XsdGenerator(
    $profile
);
CurrentValidationProfile::setProfile($profile);

// xhprof_enable();
// $xsdString = $generator->generate();
// $data = xhprof_disable();
// file_put_contents(
//     "./xhprof.json",
//     json_encode($data, JSON_PRETTY_PRINT)
// );
// exit();
$xsdString = $generator->generate();
file_put_contents(__DIR__.'/fop/xsd/generated-fop.xsd', $xsdString);
