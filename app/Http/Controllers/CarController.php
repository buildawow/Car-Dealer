<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Requests\CarRequest;
use App\Services\Search\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('car.index', ['cars' => Car::paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create', ['car' => new Car]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
        $car = (new Car)->create($request->all());
        if ($this->imageIsUpload($request)) {
            $picture = $request->picture->store('uploads', 'public');
            $this->resizeImage($picture);
            $car->update(['picture' => $picture]);
        }
        return redirect()->route('car.index')->with('success', 'Vehiculo Creado');
    }

    /**
     * It rezise the image
     * 
     * 
     */
    public function resizeImage($picture)
    {
        $image = Image::make( storage_path( "app/public/" . $picture) )->resize(600, null, function ($constraint){
            $constraint->aspectRatio();
        });
        $image->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(CarRequest $request, Car $car)
    {
        $picture = $car->picture;
        if ($this->imageIsUpload($request)) {
            Storage::delete('public/' . $car->picture);
            $picture = $request->picture->store('uploads', 'public');
            $this->resizeImage($picture);
        }
        $car->update([
            'brand'         => $request->brand,
            'model'         => $request->model,
            'year'          => $request->year,
            'price'         => $request->price,
            'availability'  => $request->availability,
            'mileage'       => $request->mileage,
            'picture'       => $picture,
        ]);
        return redirect()->route('car.index')->with('success', 'Vehiculo Actualizado');
    }

    public function imageIsUpload($request)
    {
        return $request->picture !== null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('car.index')->with('success', 'Vehiculo Eliminado');
    }

    /**
     * It filter a basic search of cars
     * 
     * @return collection
     */
    public function search()
    {
        $cars = (new Search)->query(new Car, ['brand', 'carModel']);
        return view('welcome.car.index')->with('cars', $cars);
    }

    /**
     * It filter a basic search of cars
     * 
     * @return collection
     */
    public function advanceSearch()
    {
        $brand = request('brand');
        $minPrice = request('min-price');
        $maxPrice = request('max-price');
        $cars = Car::where('brand', $brand)->orwhere(function($query) use($minPrice, $maxPrice){
            $query->orwhere('price', 'LIKE', $minPrice)
                ->orwhere('price', 'LIKE', $maxPrice);
        })->get();
        return view('welcome.car.index')->with('cars', $cars);
    }
}
