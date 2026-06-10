<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * Test all K3 pages return successful response.
     */
    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get(route('home'));
        $response->assertOk();
    }

    public function test_regulasi_page_returns_successful_response(): void
    {
        $response = $this->get(route('regulasi'));
        $response->assertOk();
    }

    public function test_hirarc_page_returns_successful_response(): void
    {
        $response = $this->get(route('hirarc'));
        $response->assertOk();
    }

    public function test_denah_page_returns_successful_response(): void
    {
        $response = $this->get(route('denah'));
        $response->assertOk();
    }

    public function test_template_page_returns_successful_response(): void
    {
        $response = $this->get(route('template'));
        $response->assertOk();
    }
}
