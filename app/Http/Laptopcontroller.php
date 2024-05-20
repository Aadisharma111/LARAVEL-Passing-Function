<?php
namespace app\Http\Controllers;
use app\Models\Laptop;
use Illuminate\Http\Request;


class Laptopcontroller extends Controller
{
    public function index()
    {
       
        $laptops = Laptop::all();
        return view('laptop.laptop',compact('laptops'));  
    }
    public function create()
    {
        return view('laptop.createlaptop');
    }
        public function store(Request $request)
    {

    }
       public function show(Laptop $laptop)
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
