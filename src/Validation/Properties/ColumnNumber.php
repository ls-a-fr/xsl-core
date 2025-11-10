<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Properties;

use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use Lsa\Xsl\Core\Contracts\CanFormatValue;
use Lsa\Xsl\Core\Contracts\HasDefaultValueWithContext;
use Lsa\Xsl\Core\Exceptions\ValidationException;
use Lsa\Xsl\Core\Validation\Types\Xsl\NumberType;

/**
 * XSL Definition:
 * - Value:  `<number>`
 * - Initial:  see prose
 * - Inherited:  no
 * - Percentages:  N/A
 * - Media:  visual
 *
 * `<number>`:
 *   A positive integer. If a non-positive or non-integer value is provided, the value will be rounded to the
 *   nearest integer value greater than or equal to 1.
 *
 * For an fo:table-column formatting object, it specifies the column-number of the table cells that may use
 * properties from this fo:table-column formatting object by using the from-table-column() function. The
 * initial value is 1 plus the column-number of the previous table-column, if there is a previous
 * table-column, and otherwise 1.
 *
 * For an fo:table-cell it specifies the number of the first column to be spanned by the table-cell. The
 * initial value is the current column-number. For the first table-cell in a table-row, the current column
 * number is 1. For other table-cells, the current column-number is the column-number of the previous
 * table-cell in the row plus the number of columns spanned by that previous cell.
 *
 * Note:
 * There is no requirement for column-numbers to be monotonically increasing from formatting object to
 * formatting object.
 */
class ColumnNumber extends TypedAttribute implements CanFormatValue, HasDefaultValueWithContext
{
    public function __construct()
    {
        parent::__construct('column-number', NumberType::class);
    }

    /**
     * If a non-positive or non-integer value is provided, the value will be rounded
     * to the nearest integer value greater than or equal to 1.
     *
     * @throws ValidationException
     */
    public static function formatValue(string $value): string
    {
        $type = new NumberType();
        if ($type->validate($value) === false) {
            throw new ValidationException('Value: '.$value.' is invalid, cannot format');
        }
        $value = intval($value);
        if ($value <= 1) {
            return '1';
        }

        return \strval(round($value));
    }

    /**
     * Returns this property default value. This value is computed and needs a context.
     *
     * @param  Tag  $root  Root tag
     * @param  EmptyTag  $node  Current node
     * @return string The default value
     *
     * @throws ValidationException
     *
     * phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundInExtendedClassBeforeLastUsed
     */
    public function getDefaultValueWithContext(Tag $root, EmptyTag $node): string
    {
        $tagName = $node->getTagName();
        if (in_array($tagName, ['table-cell', 'table-column']) !== true) {
            throw new ValidationException(
                'column-number must be on table-cell or table-column, found:'.$tagName
            );
        }

        /**
         * For an fo:table-column formatting object, it specifies the column-number of the table cells that
         * may use properties from this fo:table-column formatting object by using the from-table-column()
         * function.
         * The initial value is 1 plus the column-number of the previous table-column, if there is a previous
         * table-column, and otherwise 1.
         *
         * For an fo:table-cell it specifies the number of the first column to be spanned by the table-cell.
         * The initial value is the current column-number. For the first table-cell in a table-row, the
         * current column number is 1. For other table-cells, the current column-number is the column-number
         * of the previous table-cell in the row plus the number of columns spanned by that previous cell.
         */
        $it = $node->previousSibling();
        if ($it === null) {
            return '1';
        }

        $computedValue = 0;
        while ($it !== null) {
            $value = $it->attributes->get('column-number');
            if ($value !== null) {
                return strval(intval($value) + $computedValue);
            }
            $span = $it->attributes->get('number-columns-spanned');
            if ($span !== null) {
                $computedValue += \intval($span);
            } else {
                $computedValue++;
            }
            $it = $it->previousSibling();
        }

        return strval($computedValue + 1);
    }
}
