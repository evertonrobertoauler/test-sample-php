<?php

namespace App\Models;

class User
{
  public function calculateTopics()
  {
    $topic = new Topic();
    return $topic->getTopicNumber() * 10;
  }
}