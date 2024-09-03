<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\ProductImageGalleryDatatable;
use App\Traits\ImageUploadTrait;
use App\Models\Product;
use App\Models\ProductImageGallery;


class ProductImageGalleryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,ProductImageGalleryDatatable $datatable)
    {
        $product = Product::findOrFail($request->product);
        return $datatable->render('admin.product.image-gallery.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image.*' => ['required', 'image', 'max:2048']

        ]);

         /** Handle image upload */
        $imagePaths = $this -> uploadMultiImage($request,'image', 'uploads');

        foreach($imagePaths as $path){
            $productImageGallery = new ProductImageGallery();
            $productImageGallery->image = $path;
            $productImageGallery->product_id = $request->product;
            $productImageGallery->save();
        }

        toastr('Uploaded successfully!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productImage = ProductImageGallery:: findOrFail($id);
        $this->deleteImage($productImage->image);
        $productImage->delete();

        return response(['status' => 'success', 'message'=>'Deleted Successfully!']);
    }
}
