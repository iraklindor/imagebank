<?php
/**
 * imagebank plugin for Craft CMS 3.x
 *
 * Easily classify images
 *
 * @link      https://github.com/iraklindor/
 * @copyright Copyright (c) 2018 Irakli Chalagashvili
 */

namespace iraklindor\imagebank\services;

use iraklindor\imagebank\Imagebank;

use Craft;
use craft\base\Component;

/**
 * ImagebankService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Irakli Chalagashvili
 * @package   Imagebank
 * @since     1
 */
class ImagebankService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Imagebank::$plugin->imagebankService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
