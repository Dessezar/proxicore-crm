<?php

namespace App\Enums;

enum CustomerType: string
{
    case Prospect = 'prospect';
    case Active = 'active';
    case Inactive = 'inactive';
}
