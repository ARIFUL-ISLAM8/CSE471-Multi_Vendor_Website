<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductVariantItemDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Response; 
use App\Models\ProductVariantItem;

class ProductVariantItemController extends Controller
{
    public function index(ProductVariantItemDataTable $dataTable, $productId , $variantId)
    { 
        $variant = ProductVariant::findOrFail($variantId);
        $product = Product::findOrFail($productId);
        return $dataTable->render('admin.product.product-variant-item.index' , compact('variant','product'));
    }

    public function create(string $productId ,string $variantId)
    {
        $variant = ProductVariant::findOrFail($variantId);
        $product = Product::findOrFail($productId);
        return view('admin.product.product-variant-item.create',compact('variant','product'));
    }

    /**Store Data */
    public function store(Request $request)
    {
        $request->validate([
            'variant_id' => ['integer','required'],
            'name' => ['required','max:200'],
            'price' => ['integer','required'],
            'is_default' => ['required'],
            'status' => ['required']
        ]);

          $variantItem = new ProductVariantItem();
          $variantItem-> product_variant_id = $request->variant_id;
          $variantItem-> name= $request->name;
          $variantItem-> price= $request->price;
          $variantItem-> is_default= $request->is_default;
          $variantItem-> status= $request->status;
          $variantItem-> save();
         
          toastr('Created Successfully!' , 'success' , 'success');

          return redirect()->route('admin.products-variant-item.index', ['productId'=> $request->product_id, 'variantId' => $request->variant_id]);

    }

    public function edit(string $variantItemId)
    {
        $variantItem = ProductVariantItem::findOrFail($variantItemId);
        return view('admin.product.product-variant-item.edit',compact('variantItem'));
    }

    public function update(Request $request, string $variantItemId)
    {
        $request->validate([            
            'name' => ['required','max:200'],
            'price' => ['integer','required'],
            'is_default' => ['required'],
            'status' => ['required']
        ]);

          $variantItem = ProductVariantItem::findOrFail($variantItemId);
          $variantItem-> name= $request->name;
          $variantItem-> price= $request->price;
          $variantItem-> is_default= $request->is_default;
          $variantItem-> status= $request->status;
          $variantItem-> save();
         
          toastr('Updated Successfully!' , 'success' , 'success');

          return redirect()->route('admin.products-variant-item.index', ['productId'=> $variantItem->productVariant->product_id, 'variantId' => $variantItem->product_variant_id]);

    }

    public function destroy(string $variantItemId) 
    {
        $variantItem = ProductVariantItem::findOrFail($variantItemId);
        $variantItem->delete();

        return response(['status' => 'success', 'message'=>'Deleted Successfully!']);

    }

    public function changeStatus(Request $request)
    {
        $variantItem = ProductVariantItem::findOrFail($request->id);
        $variantItem-> status = $request->status == 'true' ? 1 : 0;
        $variantItem->save();

        return response(['message' => 'Status has been updated!']);
    }
}
