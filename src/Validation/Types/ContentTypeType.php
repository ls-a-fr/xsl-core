<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation\Types;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Validators\EnumValidator;
use Lsa\Xml\Utils\Validation\Validators\RegexValidator;
use Lsa\Xml\Utils\Validation\Validators\UnionValidator;
use Lsa\Xml\Utils\Validation\Xml\NameCharacterType;

/**
 * Validates ContentType property.
 * `<string>`:
 * - A specification of the content-type in terms of either a mime-type or a namespace.
 * - A mime-type specification has the form "content-type:" followed by a mime content-type, e.g.,
 *   content-type="content-type:xml/svg".
 * - A namespace specification has the form "namespace-prefix:" followed by a declared namespace
 *   prefix, e.g., content-type="namespace-prefix:svg". If the namespace prefix is null, the content-type
 *   refers to the default namespace.
 */
class ContentTypeType extends Type implements Validator
{
    /**
     * No identification of the content-type. The User Agent may determine it by "sniffing" or by
     * other means.
     */
    public const AUTO = 'auto';

    // phpcs:disable Generic.Files.LineLength
    public const REGULAR_EXPRESSION = '(content-type: *([a-z0-9\-_.+]+)\/([a-z0-9\-_.+;= ]+)|namespace\-prefix\: *('.NameCharacterType::UNPREFIXABLE_NAME_CHAR.')+)';

    public function getValidator(): Validator
    {
        return $this->cache(new UnionValidator(
            new EnumValidator([
                self::AUTO,
            ]),
            new RegexValidator(self::REGULAR_EXPRESSION, 'u'),
        ));
    }
}
