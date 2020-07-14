<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visitor;
use App\Drink;
use App\Food;

class DataController extends Controller
{
    //
    public function drinks()
    {
        $drinks = (Drink::orderBy('nama', 'ASC'));
        // return datatables()->of(Drink::query())->toJson();
        return datatables()->of($drinks)

            // ->addColumn('action', function (Drink $drink) {
            //     return '<a href="' . route(
            //         'admin.drink.edit',
            //         $drink
            //     ) . '" class="btn btn-warning">Edit</a>';
            // })
            // ->editColumn('cover', function (Drink $model) {
            //     return '<img src="' . $model->Cover() . '>'; // untuk merubah cover menjadi format img
            // })
            ->editColumn('cover', function (Drink $model) {
                return '<img src="' . $model->cover . '" height="125px">';
            })
            ->addColumn('action', 'admin.drink.action')
            ->addIndexColumn()
            ->rawColumns(['cover', 'action'])
            ->toJson();
    }


    public function foods()
    {

        $foods = (Food::orderBy('nama', 'ASC'));

        // return datatables()->of(Food::query())->toJson();
        return datatables()->of($foods)
            // ->editColumn('cover', function (Food $model) {
            //     return '<img src="' . $model->getCover() . '"height="150px">'; // untuk merubah cover menjadi format img
            // })

            // ->addColumn('action', function (Food $food) {
            //     return '<a href="' . route(
            //         'admin.food.edit',
            //         $food
            //     ) . '" class="btn btn-warning">Edit</a>';
            // })

            ->editColumn('cover', function (Food $model) {
                return '<img src="' . $model->cover . '" height="125px">';
            })

            ->addColumn('action', 'admin.food.action')
            // ->addColumn('action', 'admin.food.action');
            // }) // add column edit
            ->addIndexColumn()
            ->rawColumns(['cover', 'action'])
            ->toJson();
    }


    public function visitors()
    {
        return datatables()->of(Visitor::query())->toJson();
    }
}