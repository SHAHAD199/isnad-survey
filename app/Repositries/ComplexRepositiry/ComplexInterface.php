<?php 

namespace App\Repositries\ComplexRepositiry;


interface ComplexInterface 
{
  public static function index($data);
  public static function create();
  public static function store($data);
  public static function edit($item);
  public static function update($item,$data);
  public static function destroy($item);
}