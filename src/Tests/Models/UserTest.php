<?php

use PHPUnit\Framework\TestCase;
use AspectMock\Test;

class UserTest extends TestCase
{
  public function testCalculateTopics()
  {
    Test::double("App\\Models\\Topic", array("getTopicNumber" => 5));

    $user = new App\Models\User();
    $this->assertEquals($user->calculateTopics(), 50);
  }
}