<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    protected $sale;
    protected $brand;
    protected $car;

    public function __construct(Sale $sale, Brand $brand, Car $car)
    {
        $this->sale = $sale;
        $this->brand = $brand;
        $this->car = $car;
    }
    public function index()
    {
        $brands = Brand::all();

        return view('dashboard.index', compact('brands'));
    }

    public function getDataTreeMap(Request $request)
    {
        $filters = [];
        $treeMapData = [];

        foreach ($request->data[0] as $argument) {
            $filters[$argument['id']] = $argument['value'];
        }

        $salesByCarGrouped = $this->sale
            ->selectRaw('car_id, COUNT(*) as total_sales, SUM(cars.value) as amount')
            ->join('cars', 'sales.car_id', '=', 'cars.id')
            ->whereBetween('sales.created_at', [$filters['start_date'], $filters['end_date']])
            ->where('cars.brand_id', intval($filters['brand_id']))
            ->groupBy('car_id')
            // ->orderBy('amount', 'desc')
            ->limit(10)
            ->get();

        $amountTotal = $salesByCarGrouped->sum('amount');
        $totalSales = $salesByCarGrouped->sum('total_sales');

        foreach ($salesByCarGrouped as $sale) {
            $percentage = ($sale->amount / $amountTotal) * 100;

            $treeMapData[] = [
                'car_name' => $sale->car->name,
                'percentage' => $percentage,
                'amount' => $sale->amount,
                'total_sales' => $sale->total_sales,
            ];
        }

        //dd($treeMapData);
        $view = view('template.components.tree-map', compact('treeMapData', 'amountTotal', 'totalSales'))
            ->render();

        return response()->json(['view' => $view]);
    }

}
