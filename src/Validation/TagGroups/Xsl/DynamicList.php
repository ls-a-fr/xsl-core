<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\TagGroups\Xsl;

use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xml\Utils\Validation\Element;
use Lsa\Xsl\Core\Tags\Link\BasicLink;
use Lsa\Xsl\Core\Tags\Multi\MultiCase;
use Lsa\Xsl\Core\Tags\Multi\MultiProperties;
use Lsa\Xsl\Core\Tags\Multi\MultiPropertySet;
use Lsa\Xsl\Core\Tags\Multi\MultiSwitch;
use Lsa\Xsl\Core\Tags\Multi\MultiToggle;

/**
 * List of dynamic effects: link and multi formatting objects
 *
 * @see https://www.w3.org/TR/xsl11/#d0e12855
 */
class DynamicList extends Choice
{
    public function __construct()
    {
        parent::__construct(
            new Element(BasicLink::class),
            new Element(MultiSwitch::class),
            new Element(MultiCase::class),
            new Element(MultiToggle::class),
            new Element(MultiProperties::class),
            new Element(MultiPropertySet::class)
        );
    }
}
