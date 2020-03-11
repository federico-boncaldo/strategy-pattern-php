<?php
/**
 * The interface encapsulate a family of algorithms and make them interchangeable
 */

namespace App;

interface Logger
{
    public function log($data);
}