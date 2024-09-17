<?php

namespace App\Repositries\UserShowRoomRepo;


interface UserShowRoomInterface 
{
   public static function index();
   public static function create();
   public static function store($request);
   public static function success();
}
