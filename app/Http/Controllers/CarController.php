<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Support\Str;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::where(function ($query) {
            if (request()->has('type')) {
                $query->where('type', request('type'));
            }

            if (request()->has('body_type')) {
                $query->where('body_type', request('body_type'));
            }

            if (request()->has('min_price')) {
                $query->where('price', '>=', request('min_price'));
            }

            if (request()->has('max_price')) {
                $query->where('price', '<=', request('max_price'));
            }

            if (request()->has('seats')) {
                if (Str::startsWith(request('seats'), '+')) {
                    $minSeats = intval(substr(request('seats'), 1));
                    $query->where('seats', '>', $minSeats);
                } else {
                    $query->where('seats', request('seats'));
                }
            }

            if (request()->has('engine_capacity')) {
                [$minCapacity, $maxCapacity] = explode(' - ', request('engine_capacity'));
                $query->whereBetween('engine_capacity', [$minCapacity, $maxCapacity]);
            }
        })->get();

        return CarResource::collection($cars);
    }
}
