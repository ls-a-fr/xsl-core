<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Compatibility;

use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xml\Utils\Validation\Base\Type;

/**
 * A FakeType allows to create an ad-hoc type with its own validator
 */
class FakeType extends Type implements Validator
{
    /**
     * The supplied validator
     */
    private Validator $validator;

    /**
     * Creates a fake validator
     *
     * @param  Validator  $validator  Validator for this type
     */
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function getValidator(): Validator
    {
        return $this->validator;
    }
}
