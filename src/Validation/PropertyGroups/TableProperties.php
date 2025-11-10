<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\PropertyGroups;

use Lsa\Xml\Utils\Validation\AttributeGroup;
use Lsa\Xsl\Core\Validation\Properties\BorderAfterPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderBeforePrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderCollapse;
use Lsa\Xsl\Core\Validation\Properties\BorderEndPrecedence;
use Lsa\Xsl\Core\Validation\Properties\BorderSeparation;
use Lsa\Xsl\Core\Validation\Properties\BorderStartPrecedence;
use Lsa\Xsl\Core\Validation\Properties\CaptionSide;
use Lsa\Xsl\Core\Validation\Properties\ColumnNumber;
use Lsa\Xsl\Core\Validation\Properties\EmptyCells;
use Lsa\Xsl\Core\Validation\Properties\EndsRow;
use Lsa\Xsl\Core\Validation\Properties\NumberColumnsRepeated;
use Lsa\Xsl\Core\Validation\Properties\NumberColumnsSpanned;
use Lsa\Xsl\Core\Validation\Properties\NumberRowsSpanned;
use Lsa\Xsl\Core\Validation\Properties\StartsRow;
use Lsa\Xsl\Core\Validation\Properties\TableLayout;
use Lsa\Xsl\Core\Validation\Properties\TableOmitFooterAtBreak;
use Lsa\Xsl\Core\Validation\Properties\TableOmitHeaderAtBreak;

/**
 * Table properties
 *
 * @see https://www.w3.org/TR/xsl11/#d0e30798
 */
class TableProperties extends AttributeGroup
{
    public function __construct()
    {
        parent::__construct([
            BorderAfterPrecedence::class,
            BorderBeforePrecedence::class,
            BorderCollapse::class,
            BorderEndPrecedence::class,
            BorderSeparation::class,
            BorderStartPrecedence::class,
            CaptionSide::class,
            ColumnNumber::class,
            EmptyCells::class,
            EndsRow::class,
            NumberColumnsSpanned::class,
            NumberColumnsRepeated::class,
            NumberRowsSpanned::class,
            StartsRow::class,
            TableLayout::class,
            TableOmitFooterAtBreak::class,
            TableOmitHeaderAtBreak::class,
        ]);
    }
}
