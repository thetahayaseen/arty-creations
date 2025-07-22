<?php

namespace App\Enums;

enum UserRole : string 
{
    case USER = "user";
    case ARTIST = "artist";
    case ADMIN = "admin";
}
