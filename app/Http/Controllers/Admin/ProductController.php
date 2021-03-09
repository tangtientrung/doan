<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\GroupProduct;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return view('admin.pages.product.display')->with(compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        $first_category=Category::first();
        $first_category_id=$first_category->id;
        $group_product=GroupProduct::where('category_id',$first_category_id)->get();
        //var_dump($group_product);
        return view('admin.pages.product.add')->with(compact('category','group_product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image'=>'required|mimes:jpeg,jpg,png',
            'name'=>'required|unique:product,product_name',
            'desc'=>'required',
            'review'=>'required',
            'price'=>'required',
            'import'=>'required',
            'qty'=>'required',

        ],
        [
            'image.required'=>'Bạn chưa chọn hình ảnh',
            'image.mimes'=>'Hình ảnh chỉ được phép có đuôi jpeg|jpg|png',
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'name.unique'=>'Tên sản phẩm đã tồn tại',
            'desc.required'=>'Bạn chưa nhập mô tả sản phẩm',
            'review.required'=>'Bạn chưa nhập review sản phẩm',
            'price.required'=>'Bạn chưa nhập giá bán sản phẩm',
            'import.required'=>'Bạn chưa nhập giá nhập sản phẩm',
            'qty.required'=>'Bạn chưa nhập số lượng sản phẩm',
        ]);

            $file=$request->file('image');
            //luu anh
            $name=$file->getClientOriginalName();
            do
            {
                $hinh=Str::random(3)."_".$name;
            }
            while (file_exists("img/slider".$hinh));
            $file->move("img/product",$hinh);
        $product=new Product;
        $product->product_name=$request->name;
        $product->slug_product=slug($request->name);
        $product->product_price=$request->price;
        $product->product_import=$request->import;
        $product->product_qty=$request->qty;
        $product->product_review=$request->review;
        $product->product_desc=$request->desc;
        $product->group_product_id=$request->group_product;
        $product->product_image=$hinh;
        $product->product_status=$request->status;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $product->created_at = now();
        $product->updated_at = now();
        $product->save();
        return redirect('admin/san-pham/them')->with('thongbao','Thêm sản phẩm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $category=Category::all();
        //$group_product=GroupProduct::where('category_id',$id)->get();
        return view('admin.pages.product.edit')->with(compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hinh="";
        if($request->image)
        {
            $this->validate($request,['image'=>'required|mimes:jpeg,jpg,png',],
        [
            'image.required'=>'Bạn chưa chọn hình ảnh',
            'image.mimes'=>'Hình ảnh chỉ được phép có đuôi jpeg|jpg|png',
        ]);
        $file=$request->file('image');
            //luu anh
        $name=$file->getClientOriginalName();
        do
            {
                $hinh=Str::random(3)."_".$name;
            }
            while (file_exists("img/slider".$hinh));
            $file->move("img/product",$hinh);
        }
        $this->validate($request,[
            'name'=>'required',
            'desc'=>'required',
            'review'=>'required',
            'price'=>'required',
            'import'=>'required',
            'qty'=>'required',

        ],
        [
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'desc.required'=>'Bạn chưa nhập mô tả sản phẩm',
            'review.required'=>'Bạn chưa nhập review sản phẩm',
            'price.required'=>'Bạn chưa nhập giá bán sản phẩm',
            'import.required'=>'Bạn chưa nhập giá nhập sản phẩm',
            'qty.required'=>'Bạn chưa nhập số lượng sản phẩm',
        ]);

        $product=Product::find($id);
        if($request->name!=$product->product_name)
        {
            $this->validate($request,
                ['name'=>'unique:product,product_name',],
            [
                'name.unique'=>'Tên sản phẩm đã tồn tại',
            ]);
        }
        $product->product_name=$request->name;
        $product->slug_product=slug($request->name);
        $product->product_price=$request->price;
        $product->product_import=$request->import;
        $product->product_qty=$request->qty;
        $product->product_review=$request->review;
        $product->product_desc=$request->desc;
        $product->group_product_id=$request->group_product;
        if($request->image)
        {
            $product->product_image=$hinh;
        }
        
        $product->product_status=$request->status;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $product->updated_at = now();
        $product->save();
        return redirect('admin/san-pham/sua/'.$id)->with('thongbao','Cập nhật sản phẩm mới thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->product_status=0;
        $product->save();
        $thongbao="Ẩn sản phẩm ".$product->product_name." thành công";
        $product=Product::all();
        return view('admin.pages.product.display')->with(compact('product','thongbao'));
    }

    public function discount()
    {

        $product=Product::all();
        $category=Category::all();
        $sub_category=SubCategory::all();
        $brand=BrandModel::all();
        return view('admin.pages.product.discount')->with(compact('category','brand','sub_category','product'));
    }
    public function postDiscount(Request $request)
    {
        // $this->validate($request,[
        //     'money'=>'required|unique:product,product_name',
        //     'begin'=>'required',
        //     'end'=>'required',
        // ],
        // [
        //     'money.required'=>'Bạn chưa nhập số tiền|phần trăm giảm',
            
        //     'begin.required'=>'Bạn chưa chọn ngày bắt đầu khuyến mãi',
            
        //     'end.required'=>'Bạn chưa chọn ngày kết thúc khuyến mãi',
            
        // ]);
        //theo category
        if($request->category!="")
        {

            //co sub_category
            if($request->sub_category!="")
            {
                $sub_category=$request->sub_category;
                $product=Product::where('sub_category_id',$sub_category)->get();
                foreach ($product as $p) {
                    $product_price_km=0;

                    //check kieu phan tram|tien
                    if($request->type==0)
                    {
                        $product_price_km=$p->product_price-$request->money;
                    }
                    else
                    {
                        $product_price_km=$p->product_price-$request->money*$p->product_price/100;
                    }
                    $p->bdkm=$request->begin;
                    $p->ktkm=$request->end; 
                    $p->product_price_km=$product_price_km;
                    $p->save();
                    

                }
            }

            //k co sub_category
            else
            {
               $category=$request->category;
                $product=Product::where('category_id',$category)->get();
                foreach ($product as $p) {
                    $product_price_km=0;

                    //check kieu phan tram|tien
                    if($request->type==0)
                    {
                        $product_price_km=$p->product_price-$request->money;
                    }
                    else
                    {
                        $product_price_km=$p->product_price-$request->money*$p->product_price/100;
                    }
                    $p->bdkm=$request->begin;
                    $p->ktkm=$request->end; 
                    $p->product_price_km=$product_price_km;
                    $p->save();
                
                    
                }
            }
        }

        //theo brand
        else if($request->brand!="")
        {
            $brand=$request->brand;
                $product=Product::where('brand_id',$brand)->get();
                foreach ($product as $p) {
                    $product_price_km=0;

                    //check kieu phan tram|tien
                    if($request->type==0)
                    {
                        $product_price_km=$p->product_price-$request->money;
                    }
                    else
                    {
                        $product_price_km=$p->product_price-$request->money*$p->product_price/100;
                    }
                    $p->bdkm=$request->begin;
                    $p->ktkm=$request->end; 
                    $p->product_price_km=$product_price_km;
                    $p->save();
                
                    
                }
        }


        //theo product
        else if($request->product!="")
        {
            $product=$request->product;
                $product=Product::where('id',$product)->get();
                foreach ($product as $p) {
                    $product_price_km=0;

                    //check kieu phan tram|tien
                    if($request->type==0)
                    {
                        $product_price_km=$p->product_price-$request->money;
                    }
                    else
                    {
                        $product_price_km=$p->product_price-$request->money*$p->product_price/100;
                    }
                    $p->bdkm=$request->begin;
                    $p->ktkm=$request->end; 
                    $p->product_price_km=$product_price_km;
                    $p->save();
                
                    
                }
        }
        $thongbao="Áp dụng khuyến mãi thành công";
        return redirect('admin/san-pham/giam-gia')->with(compact('thongbao'));

    }
}
