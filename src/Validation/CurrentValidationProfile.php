<?php

declare(strict_types=1);

namespace Lsa\Xsl\Core\Validation;

use Lsa\Xml\Utils\Validation\TagValidator;
use Lsa\Xsd\Generator\Base\Profile;
use Lsa\Xsl\Core\Exceptions\InvalidProfileException;

/**
 * Represents the current profile used for validation
 */
class CurrentValidationProfile
{
    /**
     * The current profile
     */
    private static ?Profile $profile;

    /**
     * Sets the current profile
     *
     * @param  Profile  $profile  The needed profile
     * @param  bool  $locked  True if further edits are forbidden, false otherwise
     *
     * @throws InvalidProfileException
     */
    public static function setProfile(Profile $profile, bool $locked = true): void
    {
        if ($locked === true && self::hasProfile() === true) {
            throw new InvalidProfileException();
        }
        self::$profile = $profile;
        TagValidator::addDefinitionHook($profile->asDefinitionHook());
    }

    /**
     * Returns the current profile
     *
     * @return Profile The current profile
     *
     * @throws InvalidProfileException
     */
    public static function getProfile(): Profile
    {
        if (isset(self::$profile) === false) {
            throw new InvalidProfileException();
        }

        return self::$profile;
    }

    /**
     * Checks if current profile is set
     *
     * @return bool True is current profile is set, false otherwise.
     *
     * @throws InvalidProfileException
     */
    public static function hasProfile(): bool
    {
        return isset(self::$profile) === true;
    }

    public static function inProfile(Profile $profile, callable $fn): void
    {
        if (self::hasProfile() === true) {
            $oldProfile = self::getProfile();
            TagValidator::cleanDefinitionHooks();
            self::setProfile($profile, false);
            $fn($profile);
            self::setProfile($oldProfile, false);

            return;
        }

        self::setProfile($profile, false);
        $fn($profile);
        self::$profile = null;
    }
}
