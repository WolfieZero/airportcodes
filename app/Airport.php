<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    /**
     * Returns a formatting link to the single airport.
     *
     * @return string
     */
    public function link()
    {
        $iata = strtolower($this->attributes['iata']);
        return route('airport', ['iata' => $iata]);
    }
    
    /**
     * Custom search method for finding an airport. Will do a 
     * logical matching first before trying wider options.
     *
     * @static
     * @param  string $term
     * @param  string $type
     * @return Collection
     */
    static public function find($term, $type = 'airport')
    {
        $results = null;
        $query = parent::where('type', $type);

        switch (strlen($term)) {
            case 3:
                $results = $query->where('iata', $term);
                break;
            case 4:
                $results = $query->where('icao', $term);
                break;
        }

        if ($results && $results->count() > 0)
            return $results;

        $results = $query->where(function($query) use ($term) {
            $query->where('name', 'LIKE', '%' . $term . '%')
                ->orWhere('city', 'LIKE', '%' . $term . '%')
                ->orWhere('country', 'LIKE', '%' . $term . '%');
        });

        return $results;
    }
}
