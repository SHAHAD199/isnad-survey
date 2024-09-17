<?php

namespace App\Repositries\UserEarthLinkRepo;


interface EarthLinkInterface 
{
   public static function index();
   public static function create();
   public static function store($request);
   public static function done();
}
