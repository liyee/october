<?php namespace Liyee\Weather\Components;

use Cache;
use Request;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Weather extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Local weather',
            'description' => 'Outputs the local weather information on a page.'
        ];
    }
    
    public function defineProperties()
    {
        return [
            'country' => [
                'title'             => 'Country',
                'type'              => 'dropdown',
                'default'           => 'us'
            ],
            'state' => [
                'title'             => 'State',
                'type'              => 'dropdown',
                'default'           => 'dc',
                'depends'           => ['country'],
                'placeholder'       => 'Select a state'
            ],
            'city' => [
                'title'             => 'City',
                'type'              => 'string',
                'default'           => 'Washington',
                'placeholder'       => 'Enter the city name',
                'validationPattern' => '^[0-9a-zA-Z\s]+$',
                'validationMessage' => 'The City field is required.'
            ],
            'units' => [
                'title'             => 'Units',
                'description'       => 'Units for the temperature and wind speed',
                'type'              => 'dropdown',
                'default'           => 'imperial',
                'placeholder'       => 'Select units',
                'options'           => ['metric'=>'Metric', 'imperial'=>'Imperial']
            ]
        ];
    }
    
    protected function loadCountryData()
    {
        return json_decode(file_get_contents(__DIR__.'/../data/countries-and-states.json'), true);
    }
    
    public function getCountryOptions()
    {
        $countries = $this->loadCountryData();
        $result = [];
        
        foreach ($countries as $code=>$data)
            $result[$code] = $data['n'];
            
            return $result;
    }
    
    public function getStateOptions()
    {
        $countries = $this->loadCountryData();
        $countryCode = Request::input('country');
        return isset($countries[$countryCode]) ? $countries[$countryCode]['s'] : [];
    } 
    
    public function info()
    {
        $json = file_get_contents(sprintf(
            "http://api.openweathermap.org/data/2.5/weather?q=%s,%s,%s&units=%s",
            $this->property('city'),
            $this->property('state'),
            $this->property('country'),
            $this->property('units')
            ));
        
        return json_decode($json);
    }
    
    public function onRun()
    {
        $this->addCss('/plugins/rainlab/weather/assets/css/weather.css');
        $this->page['weatherInfo'] = $this->info();
    }
}

?>