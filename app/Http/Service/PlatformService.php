<?php

namespace App\Http\Service;

class PlatformService
{
    public function getCompanyData(){
        // This method should return company data.
        // For now, we will return a static array as an example.
        return [
            'name' => 'Example Company',
            'address' => '123 Example Street',
            'email' => ''
        ];
    }
}
