<?php

namespace CodeHobby;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = ['githubid', 'name', 'fullname', 'htmlurl', 'description'];
}
