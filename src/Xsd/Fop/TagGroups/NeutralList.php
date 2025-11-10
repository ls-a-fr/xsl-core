<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\TagGroups;

use Lsa\Xml\Utils\Traits\HasName;
use Lsa\Xml\Utils\Validation\Choice;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Fop\NeutralList as FopNeutralList;
use Lsa\Xsl\Core\Xsd\Fop\TagGroups\Not\NeutralList as NotNeutralList;

/**
 * This class is used to validate against fop.xsd file.
 */
class NeutralList extends Choice
{
    use HasName;

    public function __construct()
    {
        $this->name = 'neutral_List';
        parent::__construct(
            new FopNeutralList(),
            new NotNeutralList(),
        );
    }
}
