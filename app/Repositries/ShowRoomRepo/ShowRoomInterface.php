<?php 

namespace App\Repositries\ShowRoomRepo;

interface ShowRoomInterface 
{
  public static function index($data);
  public static function show($item);
}