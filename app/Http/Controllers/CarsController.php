<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\Bodytype;
use App\Fuel;
use App\Http\Requests\CarRequest;
use Carbon\Carbon;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CarsController extends Controller
{
    public function index() {
        $cars = Car::with('brands')
            ->join('brands', 'brands.id', '=', 'cars.brand')
            ->join('bodytypes', 'bodytypes.id', '=', 'cars.bodytype')
            ->join('fuels', 'fuels.id', '=', 'cars.fuel')
            ->select('cars.*', 'brands.name AS carname', 'bodytypes.name AS bodyname', 'fuels.name AS fuelname')
            ->orderByRaw('created_at')
            ->get();
//        dd($cars);

//        $carDetails = Car::select('cars.*')->where('id', '=', '12')->get();
        $bodytypes  = Bodytype::select('id', 'name')->get();
        $fuels      = Fuel::select('id', 'name')->get();

        //return view('cars.index', compact('cars'));
        return View::make('cars.index', compact('cars', 'bodytypes', 'fuels')); //'carDetails'
    }

    public function ajaxShow($id) {
        return Car::findOrFail($id);
    }

    public function show($id) {
//        $car = Car::findOrFail($id);
        $car = Car::with('brands')
            ->join('brands', 'brands.id', '=', 'cars.brand')
            ->join('bodytypes', 'bodytypes.id', '=', 'cars.bodytype')
            ->join('fuels', 'fuels.id', '=', 'cars.fuel')
            ->select('cars.*', 'brands.name AS carname', 'bodytypes.name AS bodyname', 'fuels.name AS fuelname')
            ->find($id);
//        dd($car);

        return view('cars.show', compact('car'));
    }

    public function create()
    {
        $brands     = Brand::select('id', 'name')->get();
        $bodytypes  = Bodytype::select('id', 'name')->get();

//        return view('cars.create', compact('brands'))->withCar(new Car);
        return View::make('cars.create', compact('brands', 'bodytypes'))->withCar(new Car);
    }

    public function store(CarRequest $request)
    {
        Car::create($request->all());

        return redirect('/');
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);

        $brands     = Brand::select('id', 'name')->get();
        $bodytypes  = Bodytype::select('id', 'name')->get();
        $fuels      = Fuel::select('id', 'name')->get();

        return View::make('cars.edit', compact('car','brands', 'bodytypes', 'fuels'));

        //return view('cars.edit', compact('car'));
    }

    public function update($id, CarRequest $request)
    {

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect('cars/'.$id);
    }

    public function ajaxUpdate($id, Request $request)
    {
        $car = Car::findorFail($id);

        $car->update([
           'model'      => $request->model,
           'bodytype'   => $request->bodytype,
           'fuel'       => $request->fuel,
           'weight'     => $request->weight
        ]);

        $car->save();

        return $car;
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect('/');
    }
}
