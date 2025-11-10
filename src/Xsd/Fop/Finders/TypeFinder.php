<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Xsd\Fop\Finders;

use Lsa\Xml\Utils\Collections\NodeCollection;
use Lsa\Xml\Utils\Contracts\Validator;
use Lsa\Xsd\Generator\Base\Finder;
use Lsa\Xsd\Generator\Tags\Type;
use ReflectionClass;

/**
 * Find every \Lsa\Xsl\Core\Xsd\Fop\Types classes based on namespace
 */
class TypeFinder extends Finder
{
    public function getResults(): array|NodeCollection
    {
        $found = $this->lookup('Lsa\Xsl\Core\Xsd\Fop\Types');
        /**
         * Filter found classes to get only validators
         *
         * @var class-string[]
         */
        $found = array_filter($found, fn ($type) => ! str_contains($type, '\\Types\\Validators'));

        return \array_values(
            array_filter(
                array_map(
                    function ($typeName) {
                        $object = new $typeName();
                        if ($object instanceof Validator) {
                            return new Type($object);
                        }

                        return null;
                    },
                    array_filter(
                        $found,
                        // Check for abstract classes
                        fn ($typeName) => (new ReflectionClass($typeName))->isInstantiable()
                    )
                ),
                fn ($t) => $t !== null
            )
        );
    }
}
