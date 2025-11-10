<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Tests\Common;

use Exception;
use Lsa\Xml\Utils\Contracts\DataAwareValidator;
use Lsa\Xml\Utils\Contracts\MultiValidator;
use Lsa\Xml\Utils\Validation\Base\Type;
use Lsa\Xml\Utils\Validation\Definition;
use Lsa\Xml\Utils\Validation\TypedAttribute;
use Lsa\Xml\Utils\Xml\Base\EmptyTag;
use Lsa\Xml\Utils\Xml\Base\Tag;
use PHPUnit\Framework\TestCase;
use TypeError;

abstract class CommonMethods extends TestCase
{
    protected function flattenAttributeNames(Definition $definition)
    {
        return \array_keys($definition->getAppliedAttributes());
    }

    protected function validValue(string|object $className, mixed $value)
    {
        $type = $this->getType($className);
        $validator = $type->getValidator();
        $this->assertTrue($validator->validate($value));
    }

    protected function validValueWithContext(string|object $className, ?Tag $root, ?EmptyTag $current, mixed $value)
    {
        $type = $this->getType($className);
        $validator = $type->getValidator();
        if (
            \in_array(DataAwareValidator::class, \class_implements($validator)) === false
            && \in_array(MultiValidator::class, \class_implements($validator)) === false
        ) {
            $this->expectException(TypeError::class);
        }
        /** @var DataAwareValidator|MultiValidator $validator */
        $this->assertTrue($validator->validateWithContext($value, $root, $current));
    }

    protected function invalidValue(string|object $className, mixed $value)
    {
        $type = $this->getType($className);
        $validator = $type->getValidator();

        if (\is_string($value) === false) {
            $this->expectException(TypeError::class);
        }
        $this->assertFalse($validator->validate($value));
    }

    protected function invalidValueWithContext(string|object $className, ?Tag $root, ?EmptyTag $current, mixed $value)
    {
        $type = $this->getType($className);
        $validator = $type->getValidator();

        if (\is_string($value) === false) {
            $this->expectException(TypeError::class);
        }
        if (
            \in_array(DataAwareValidator::class, \class_implements($validator)) === false
            && \in_array(MultiValidator::class, \class_implements($validator)) === false
        ) {
            $this->expectException(TypeError::class);
        }
        /** @var DataAwareValidator $validator */
        $this->assertFalse($validator->validateWithContext($value, $root, $current));
    }

    private function getType(string|object $className): Type
    {
        if (is_string($className) && is_subclass_of($className, Type::class)) {
            return new $className();
        }
        if (is_string($className) && is_subclass_of($className, TypedAttribute::class)) {
            $attribute = new $className();
            $typeClass = $attribute->type;

            return new $typeClass();
        }
        if (\is_object($className) && \is_subclass_of($className, TypedAttribute::class)) {
            $typeClass = $className->type;

            return new $typeClass();
        }
        if (\is_object($className) && \is_subclass_of($className, Type::class)) {
            return $className;
        }

        throw new Exception('Could not resolve type for: '.\is_string($className) ? $className : \get_class($className));
    }
}
