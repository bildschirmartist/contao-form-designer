<?php

/**
 * Contao Form Designer.
 *
 * @package    contao-form-designer
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @license    LGPL 3.0
 * @filesource
 */

declare(strict_types=1);

namespace Netzmacht\Contao\FormDesigner\Factory;

use Netzmacht\Contao\FormDesigner\Exception\CreatingLayoutFailed;
use Netzmacht\Contao\FormDesigner\Layout\FormLayout;

/**
 * Interface LayoutTypeFactory.
 *
 * @package Netzmacht\Contao\FormDesigner\Factory
 */
interface FormLayoutFactory
{
    /**
     * Create the layout for a widget.
     *
     * @param string $type   Given type.
     * @param array  $config Form layout config.
     *
     * @return FormLayout
     * @throws CreatingLayoutFailed When layout could not be created.
     */
    public function create(string $type, array $config): FormLayout;

    /**
     * Get the list of supported types.
     *
     * @return array
     */
    public function supportedTypes(): array;
}
