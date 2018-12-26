<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    //
	
	Protected $guarded = []; 

	public function complate($complated = true){

		$this->update(compact('complated'));
	}

	public function incomplate(){

		$this->complate(false);
	}

    public function project(){

    	return $this->belongsTo(Project::class);
    
    }

    
}
