<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsCreateRequest;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminProductsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        if ($user->isAdmin()) {

            return view('admin.products.create');
        }
        return ('you can\'t create because you are USER.');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsCreateRequest $request)
    {
        $input = $request->all();
        $user = Auth::user();
        $product = $user->Products()->create($input);

        if ($file = $request->file('photo_id')) {
            foreach ($request->photo_id as $key => $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move('images', $name);
                $photo = Photo::create([
                    'product_id' => $product->id,
                    'file' => $name
                ]);
            }
        }

        return redirect('/admin/products');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = Auth::user();
        if ($user->isAdmin()) {


            $product = Product::findOrFail($id);


            return view('admin.products.edit', compact('product'));
        }
        return ('you can\'t edit because you are USER.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $input = $request->all();

        $product = Product::find($id);

        if ($file = $request->file('photo_id')) {

            $product->photos()->delete();

            foreach ($request->photo_id as $key => $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move('images', $name);
                $photo = Photo::create([
                    'product_id' => $product->id,
                    'file' => $name
                ]);
            }

        }

        $product->update($input);

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);

        foreach ($product->photos as $key => $photo) {
            unlink(public_path() . $photo->file);
        }

        $product->delete();
        return redirect('/admin/products');
    }

    public function OnCash(Request $request)
    {

        $products = Product::all();
        $data = array();
        $data['user_id'] = Auth::id();

        foreach ($products as $row) {
            $data['title'] = $row->title;
        }
        $order_id = DB::table('orders')->insertGetId($data);

        return Redirect()->back();
    }


    public function ViewOrder(){

        $order = DB::table('orders')
            ->join('users','orders.user_id','users.id')
            ->select('orders.*','users.name','users.email')
            ->get();
//        dd($order);

        return view('admin.order.view_order',compact('order'));
    }

    public function UsersFrequented(){

        $users = User::whereHas("orders")->withCount(['orders'])->orderBy('orders_count', 'DESC')->get();



      return view('admin.order.users_frequented',compact('users'));
    }
}
