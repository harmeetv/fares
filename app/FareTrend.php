<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FareTrend extends Model
{
    protected $fillable = [
    	'org', 'dest', 'date', 'search_response', 'min_fare', 'min_duration', 'min_duration_flight_iata', 'mode_flight_duration', 'cheap_airline_iatas', 'cheap_airline_names', 'cheap_airline_times', 'cheap_airline_flight_num', 'flight_counts', 'morning_flights', 'night_flights', 'airline_list', 'total_flights', 'created_at', 'updated_at'
    ];
}
