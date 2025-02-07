<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase 
{
    public function test_can_set_and_get_email()
    {
        $user = new User();
        $user->setEmail("test@example.com");

        $this->assertEquals("test@example.com", $user->getEmail());
    }
}
