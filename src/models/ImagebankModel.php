<?php
/**
 * imagebank plugin for Craft CMS 3.x
 *
 * Easily classify images
 *
 * @link      https://github.com/iraklindor/
 * @copyright Copyright (c) 2018 Irakli Chalagashvili
 */

namespace iraklindor\imagebank\models;

use iraklindor\imagebank\Imagebank;

use Craft;
use craft\base\Model;

/**
 * ImagebankModel Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Irakli Chalagashvili
 * @package   Imagebank
 * @since     1
 */
class ImagebankModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
