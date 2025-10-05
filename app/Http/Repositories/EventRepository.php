<?php

namespace App\Http\Repositories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

class EventRepository {
    public function findAll(?string $filter=null):Collection{
        if (!is_null($filter)) {

            return event::where("nome", 'like', "%$filter%")->orWhere('description', 'like', '%$filter%')->get();
        }
        return Event::all(); 
    }

    public function register($data):Event{
        return event::create($data);


    }



}