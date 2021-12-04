<?php

namespace infodec;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable=['id','nombres','nota1','nota2','nota3','promedio'];
}
