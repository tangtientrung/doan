<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;
use App\Models\Category;
use App\Models\GroupProduct;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Cart;


class PageController extends Controller
{
	public function homePage()
	{
		return view('frontend.pages.homepage');
	}
	public function productPage($slug_category)
    {
    	$category=Category::where('slug_category',$slug_category)->first();
    	$category_id=$category->id;
    	
    	$product=GroupProduct::where('category_id',$category_id)->where('status',1)->paginate(9);
        $name_page=$category->category_name;
        $slider_active=Slider::where('status',2)->first();
        $slider=Slider::where('status',1)->get();
    	//var_dump($product);
    	return view('frontend.pages.product')->with(compact('product','name_page','slider_active','slider','category_id'));
    }
	public function productDetails($slug_product)
    {
    	$g_product=GroupProduct::where('group_product_slug',$slug_product)->first();
        //$product->product_view=$product->product_view+1;
        //$product->save();
    	//$id;$related_product;$related_product_active;
        //$comment=CommentModel::where('product_id',$product->id)->orderBy('updated_at','ASC')->paginate(5);
        //$thumbnail=ThumbnailModel::where('product_id',$product->id)->take(3)->get();
        // if(!$thumbnail)
        // {
        //     $thumbnail="";
        // }
    	// if($product->sub_category_id!=0)
    	// {
    	// 	$id=$product->sub_category_id;
    	// 	$related_product_active=ProductModel::where('sub_category_id',$id)->where('brand_id',$product->brand_id)->first();
    	// 	$related_product=ProductModel::where('sub_category_id',$id)->where('brand_id',$product->brand_id)->take(3)->get();
    		
    	// }
    	// else
    	// {
    	// 	$id=$product->category_id;
    	// 	$related_product=ProductModel::where('category_id',$id)->where('brand_id',$product->brand_id)->take(3)->get();
    	// 	$related_product_active=ProductModel::where('category_id',$id)->where('brand_id',$product->brand_id)->first();
    	// }
    	$gp_id=$g_product->id;
		//var_dump($product);
		$selected_product=Product::where('group_product_id',$gp_id)->first();
		$product=Product::where('group_product_id',$gp_id)->whereNotIn('id', [$selected_product->id])->get();	
    	return view('frontend.pages.detail_product')->with(compact('product','selected_product','gp_id'));
    		
    }

	public function allProduct(Request $request)
	{
		$gp_id=$request->gp_id;
		$ram=$request->ram;
		$color=$request->color;
		$view=$this->rendView($gp_id,$ram,$color);
		echo $view;
	}

	public function changeProduct(Request $request)
	{
		$gp_id=$request->gp_id;
		$ram=$request->ram;
		$color=$request->color;
		$view=$this->rendView($gp_id,$ram,$color);
		echo $view;
	}
	public function test()
	{
		// $gp_id=1;
		// $ram="64GB";
		// $color="red";
		// $color = DB::table('product')
		// ->join('configuration', 'configuration_id', '=', 'configuration.id')
		// ->where('product.group_product_id',$gp_id)
		// ->select('color')
		// ->distinct()
		// ->get();
		// var_dump($color);
		Cart::add([
            'id' => 1,
            'name' => "iphone",
            'qty' => 1,
            'price' => 1,
            'weight' => 0,
            'options' =>[
                            'image' => "1",
                        ]
                ]);
		echo Cart::content();
	}
	public function rendView($gp_id,$ram,$color)
	{
		$checkExitSelectedProduct=0;
		$selected_product = DB::table('product')
			->join('configuration', 'configuration_id', '=', 'configuration.id')
			->where('product.group_product_id',$gp_id)
			->where('ram',$ram)
			->where('color',$color)
			->select('product.id')
			->get();
		if(count($selected_product)>0)
			$checkExitSelectedProduct=1;
		foreach ($selected_product as $value) 
			$selected_product_id = $value->id;
		$selected_product=Product::find($selected_product_id);
		$product=Product::where('group_product_id',$gp_id)->get();
		$btn_add_cart="";
		$tinh_trang='';
		$mau_sac='';
		$ram='';
		if($selected_product->product_qty>0)
		$btn_add_cart='<button type="button" class="btn btn-default cart add-to-cart" name="add-to-cart"><i class="fa fa-shopping-cart"></i>
												Thêm giỏ hàng</button>';
		if($selected_product->product_qty==0)
			$tinh_trang='Hết hàng';
		else
			$tinh_trang='Còn hàng';
		$color = DB::table('product')
			->join('configuration', 'configuration_id', '=', 'configuration.id')
			->where('product.group_product_id',$gp_id)
			->select('color')
			->distinct()
			->get();
		foreach($color as $c)
		{
			$isCheck="";
			if($c->color==$selected_product->configuration->color)
			{
				$isCheck="checked";
			}
			$mau_sac.='<input type="radio" class="btn-check color" value="'.$c->color.'" name="color" autocomplete="off" '.$isCheck.'>
						<label class="btn btn-secondary" for="option2">'.$c->color.'</label>';
		}
		$ramDB = DB::table('product')
			->join('configuration', 'configuration_id', '=', 'configuration.id')
			->where('product.group_product_id',$gp_id)
			->select('ram')
			->distinct()
			->get();
		foreach($ramDB as $r)
		{
			$isCheck="";
			if($r->ram==$selected_product->configuration->ram)
			{
				$isCheck="checked";
			}
			$ram.='<input type="radio" class="btn-check ram" id="ram" name="ram" value="'.$r->ram.'" autocomplete="off" '.$isCheck.'>
						<label class="btn btn-secondary" for="option2">'.$r->ram.'</label>';
		}
			
		if($checkExitSelectedProduct==1)								
		$view= '<div class="product-details">
						<form>
							<input type="hidden" name="_token" value="'. csrf_token() .'" /> 
							<input type="hidden" name="gp_id" value="'.$gp_id.'"/>
							<input type="hidden" name="ram" value="'.$selected_product->configuration->ram.'"/>
							<input type="hidden" name="color" value="'.$selected_product->configuration->color.'"/>
								
						</form>

						<div class="col-sm-5">
							<div class="view-product">
								<img src="img/product/'.$selected_product->product_image.'" alt="" />
								
							</div>
							
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>'.$selected_product->product_name.'</h2>
								<p>Mã sản phẩm: '.$selected_product->id.'</p>
								<span>
									<form>
									<input type="hidden" name="_token" value="'. csrf_token() .'" />
									<input type="hidden" value="'.$selected_product->id.'" class="product_id">
									<input type="hidden" value="'.$selected_product->product_name.'" class="product_name">
									<input type="hidden" value="'.$selected_product->product_image.'" class="product_image">
									<input type="hidden" value="'.$selected_product->product_price.'" class="product_price">
									<span>'.number_format($selected_product->product_price).'đ'.'</span>
									<label>Số lượng:</label>
									<input name="quantity" class="product_qty" type="number" min="1"  value="1" />
											'.$btn_add_cart.'
									</form>
								</span>
								<p><b>Tình trạng:</b>
									'.$tinh_trang.'
								</p>
								<p><b>Trạng thái:</b> Mới</p>
								<form>
								<input type="hidden" name="_token" value="'. csrf_token() .'" /> 
								<input type="hidden" name="gp_id" value="'.$gp_id.'"/>
								<input type="hidden" name="ram" value="'.$selected_product->configuration->ram.'"/>
								<input type="hidden" name="color" value="'.$selected_product->configuration->color.'"/>
								<p><b>Màu sắc:</b>
									'.$mau_sac.'
								</p>
								<p><b>Bộ nhớ:</b>
									'.$ram.'
								</p>
								</form>
								
								<h3>Thông số kĩ thuật</h3>
								
								
							</div>
							
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->';
		else
			$view='<p>Sản phẩm không tồn tại</p>';
		return $view;
	}
}



