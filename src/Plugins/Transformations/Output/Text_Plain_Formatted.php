<?php
/**
 * Text Plain Formatted Transformations plugin for phpMyAdmin
 */

declare(strict_types=1);

namespace PhpMyAdmin\Plugins\Transformations\Output;

use PhpMyAdmin\Plugins\Transformations\Abs\FormattedTransformationsPlugin;

/**
 * Handles the formatted transformation for text plain
 */
class Text_Plain_Formatted extends FormattedTransformationsPlugin
{
    /**
     * Gets the plugin`s MIME type
     */
    public static function getMIMEType(): string
    {
        return 'Text';
    }

    /**
     * Gets the plugin`s MIME subtype
     */
    public static function getMIMESubtype(): string
    {
        return 'Plain';
    }
}
