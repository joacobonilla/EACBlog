<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostApiTest extends TestCase
{
    
    public function test_create_post()
    {
        $response = $this->postJson('/backoffice/posts', [
            'author' => 'Gabriel García',
            'title' => 'Mi primer post',
            'date' => '2024-12-10',
            'content' => 'Este es el contenido de mi primer post.',
        ]);
    
        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'Post creado con éxito',
                 ]);
    }
    
    public function test_list_posts()
    {
        $response = $this->getJson('/backoffice/posts');
    
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => ['id', 'author', 'title', 'date', 'content'],
                 ]);
    }
}  