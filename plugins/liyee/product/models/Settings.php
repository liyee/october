<?php namespace Liyee\Product\Models;

use October\Rain\Database\Model;

class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'liyee_product_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'show_all_posts' => ['boolean'],
    ];
}
