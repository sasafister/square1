<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ImportTest extends TestCase
{
     /** @test */
     public function is_url_returning_some_value()
     {
         $url = 'https://sq1-api-test.herokuapp.com/posts';
 
         $response = Http::get($url);

         $this->assertTrue($response->successful());
     }

}
