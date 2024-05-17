<?php
namespace App\Http\Controllers;
use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        //Every method return somenint
        $laptops = Laptop::all();//2. Eleqouent
        return view('Laptop.Laptop',compact('Laptops'));  // laptop.blade.php
    }
    public function create()
    {
        //return 'crete method';
        return view('Laptop.createLaptop');
    }
        public function store(Request $request)
    {

    }
       public function show(Laptop $Laptop)
    {
        
    }

    public function edit(Laptop $laptop)
    {
        //
    }

    
    public function update(Request $request, Laptop $laptop)
    {
        //
    }

    public function destroy(Laptop $laptop)
    {
        //
    }
}
