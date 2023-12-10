<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use App\Models\Map as MapTable;
use Illuminate\Support\Facades\Auth;

class Map extends Component
{
    use WithPagination;
    #[Rule('required|min:2|max:50')]
    public $map_name;
    #[Rule('required')]
    public $category;
    #[Rule('required|date_format:d/m/Y')]
    public $start_date;
    #[Rule('required|date_format:d/m/Y')]
    public $end_date;
    public $user_id;
    #[Rule('required')]
    public $geojson;
    public $center_lat;
    public $center_lng;
    public $map_zoom;
    public $insert = true;
    public $isInsert = true;
    public $buttonUpsert = 'Save your Location'; 
    public $map_id = null;

    public function createMap($id = null)
    {
        //dd($this->map_zoom, $this->center_lat, $this->center_lng);
        $this->validate();
        $geojson = json_decode($this->geojson, true);
        $data = [
            'map_name' => $this->map_name,
            'category' => $this->category,
            'start_date' => Carbon::createFromFormat('d/m/Y',$this->start_date)->format('Y/m/d'),
            'end_date' => Carbon::createFromFormat('d/m/Y',$this->end_date)->format('Y/m/d'),
        ];
        if($this->isInsert) {
            $geojson['properties'] = [
                'name' => $this->map_name,
                'category' => $this->category,
            ];
            $data['geojson'] = $geojson;
            $data['user_id'] = Auth::user()->id;
            MapTable::create($data);
        } else {
            $data['geojson'] = $geojson;
            MapTable::where('id',$id)->update($data);
        }
        $user_id = Auth::user()->id;
        User::where('id',$user_id)->update([
            'zoom' => $this->map_zoom ?? 16,
            'center_lat' => $this->center_lat ?? 51.07162703160339,
            'center_lng' => $this->center_lng ?? -1.7959746500433091,

        ]);
        $this->dto_create();
        request()->session()->flash('success','Location is '.($this->isInsert?'created':'updated').' successfully!');
    }

    public function update($geojson)
    {
        $map = MapTable::find($geojson['properties']['id']);
        if(!$this->isInsert) {
            $this->geojson = json_encode($geojson);
           // dd($this->geojson);
            $this->createMap($map->id);
        } else {
            $map->geojson = $geojson;
            $map->update();
            request()->session()->flash('success','Location is updated successfully!');
        }
        
    }

    public function dto_edit($id)
    {
        $map = MapTable::find($id);
        $this->map_name = $map->map_name;
        $this->category = $map->category;
        $this->start_date = Carbon::createFromFormat('Y-m-d',$map->start_date)->format('d/m/Y');
        $this->end_date = Carbon::createFromFormat('Y-m-d',$map->end_date)->format('d/m/Y');
        $this->geojson = json_encode($map->geojson);
        $this->isInsert = false;
        $this->buttonUpsert = 'Update your Location';
        $this->map_id = $map->id;
    }

    public function dto_create()
    {
        $this->reset(['map_name','category','start_date','end_date','geojson']);
        $this->buttonUpsert = 'Save your Location';
        $this->isInsert = true;
        $this->map_id = null;
    }

    public function render()
    {
        $user = Auth::user();
        $this->map_zoom = $this->map_zoom ?? $user->zoom ?? 16;
        $this->center_lat = $this->center_lat ?? $user->center_lat ?? 51.07162703160339;
        $this->center_lng = $this->center_lng ?? $user->center_lng ?? -1.7959746500433091;
        $maps = Auth::user()->maps()->paginate(5);
        return view('livewire.map',[
            'maps' => $maps,
        ]);
    }
}
