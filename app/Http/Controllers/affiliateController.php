<?php
use Illuminate\Support\Facades\Route;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as IlluminateRequest;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class affiliateController extends Controller
{
    public function index()
    {
        $category_data=array(
            [
                'id'=>'1',
                'name'=>'MEN'
            ],
            [
                'id'=>'2',
                'name'=>'WOMEN'
            ],
            [
                'id'=>'3',
                'name'=>'KIDS'
            ],
            [
                'id'=>'4',
                'name'=>'UNISEX'
            ],
            [
                'id'=>'5',
                'name'=>'ATTAR'
            ],
            [
                'id'=>'6',
                'name'=>'OUD'
            ],
            [
                'id'=>'7',
                'name'=>'BRANDS'
            ],
            [
                'id'=>'8',
                'name'=>'GIFTS'
            ],
            [
                'id'=>'9',
                'name'=>'PERFUME OILS'
            ]    
        );
        $category_data = json_decode(json_encode($category_data));

        return view('index')->with('category_data', $category_data);
        // return view('index',compact('category_data'));
    }

    public function product()
    {
        $product_data=array(
            [
                'id'=>'1',
                'name'=>'Product',
                'description'=>'product description',
            ],
            [
                'id'=>'2',
                'name'=>'Product',
                'description'=>'product description',
            ],
            [
                'id'=>'3',
                'name'=>'Product',
                'description'=>'product description',
            ],
            [
                'id'=>'4',
                'name'=>'Product',
                'description'=>'product description',
            ],
            [
                'id'=>'5',
                'name'=>'Product',
                'description'=>'product description',
            ],
            [
                'id'=>'6',
                'name'=>'Product',
                'description'=>'product description',
            ],
            [
                'id'=>'7',
                'name'=>'Product',
                'description'=>'product description',
            ],
            [
                'id'=>'8',
                'name'=>'Product',
                'description'=>'product description',
            ],
            [
                'id'=>'9',
                'name'=>'Product',
                'description'=>'product description',
            ]    
        );
        $product_data = json_decode(json_encode($product_data));
        $category_data=array(
            [
                'id'=>'1',
                'name'=>'MEN'
            ],
            [
                'id'=>'2',
                'name'=>'WOMEN'
            ],
            [
                'id'=>'3',
                'name'=>'KIDS'
            ],
            [
                'id'=>'4',
                'name'=>'UNISEX'
            ],
            [
                'id'=>'5',
                'name'=>'ATTAR'
            ],
            [
                'id'=>'6',
                'name'=>'OUD'
            ],
            [
                'id'=>'7',
                'name'=>'BRANDS'
            ],
            [
                'id'=>'8',
                'name'=>'GIFTS'
            ],
            [
                'id'=>'9',
                'name'=>'PERFUME OILS'
            ]    
        );
        $category_data = json_decode(json_encode($category_data));

        return view('product')->with('category_data', $category_data)->with('product_data',$product_data);
    }

    public function product_view()
    {
        return view('product_view');
    }

    public function shop()
    {
        return view('shop');
    }
    
    public function category($id)
    {
        if($id==1)
        {
            $data=array(
                [
                    'id'=>'1',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'2',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'3',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'4',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'5',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'6',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'7',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'8',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'9',
                    'name'=>'MEN '
                ]    
            );
            $data = json_decode(json_encode($data));
            $category_data=array(
                [
                    'id'=>'1',
                    'name'=>'MEN'
                ],
                [
                    'id'=>'2',
                    'name'=>'WOMEN'
                ],
                [
                    'id'=>'3',
                    'name'=>'KIDS'
                ],
                [
                    'id'=>'4',
                    'name'=>'UNISEX'
                ],
                [
                    'id'=>'5',
                    'name'=>'ATTAR'
                ],
                [
                    'id'=>'6',
                    'name'=>'OUD'
                ],
                [
                    'id'=>'7',
                    'name'=>'BRANDS'
                ],
                [
                    'id'=>'8',
                    'name'=>'GIFTS'
                ],
                [
                    'id'=>'9',
                    'name'=>'PERFUME OILS'
                ]    
            );
            $category_data = json_decode(json_encode($category_data));
    
            return view('category')->with('data', $data)->with('category_data', $category_data);;
        }
       
    }

    public function product_detail($id)
    {
        if($id==1)
        {
            return view('product_detail');
        }
        
    }

    public function about_us()
    {
        $category_data=array(
            [
                'id'=>'1',
                'name'=>'MEN'
            ],
            [
                'id'=>'2',
                'name'=>'WOMEN'
            ],
            [
                'id'=>'3',
                'name'=>'KIDS'
            ],
            [
                'id'=>'4',
                'name'=>'UNISEX'
            ],
            [
                'id'=>'5',
                'name'=>'ATTAR'
            ],
            [
                'id'=>'6',
                'name'=>'OUD'
            ],
            [
                'id'=>'7',
                'name'=>'BRANDS'
            ],
            [
                'id'=>'8',
                'name'=>'GIFTS'
            ],
            [
                'id'=>'9',
                'name'=>'PERFUME OILS'
            ]    
        );
        $category_data = json_decode(json_encode($category_data));

        return view('about_us')->with('category_data', $category_data);
        
    }

    public function blog()
    {

        $data=array(
                [
                    'id'=>'1',
                    'name'=>'blog',
                    'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
                ],
                [
                    'id'=>'2',
                    'name'=>'blog',
                    'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
                ],
                [
                    'id'=>'3',
                    'name'=>'blog',
                    'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
                ],
                [
                    'id'=>'4',
                    'name'=>'blog',
                    'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
                ],
                [
                    'id'=>'5',
                    'name'=>'blog',
                    'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
                ],
                [
                    'id'=>'6',
                    'name'=>'blog',
                    'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
                ],
                [
                    'id'=>'7',
                    'name'=>'blog',
                    'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
                ],
                  
            );
            $data = json_decode(json_encode($data));
    
            return view('blog')->with('data', $data);
    }

    public function blog_view($id)
    {
        if($id==1)
        {
            return view('blog_view');
        }
        
    }

    public function event()
    {
        $data=array(
            [
                'id'=>'1',
                'name'=>'event',
                'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
            ],
            [
                'id'=>'2',
                'name'=>'event',
                'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
            ],
            [
                'id'=>'3',
                'name'=>'event',
                'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
            ],
        );
        $data = json_decode(json_encode($data));
    
            return view('event')->with('data', $data);
    }

    public function event_view($id)
    {
        if($id==1)
        {
        return view('event_view');
        }
    }

    public function news_lettre()
    {
        $data=array(
            [
                'id'=>'1',
                'name'=>'News Lettre',
                'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
            ],
            [
                'id'=>'2',
                'name'=>'News Lettre',
                'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
            ],
            [
                'id'=>'3',
                'name'=>'News Lettre',
                'description'=>'How To Write Product Descriptions To Grow Sales [Samples Below + Updated in 2019]',
            ],
        );
        $data = json_decode(json_encode($data));
    
            return view('news_lettre')->with('data', $data);
    }

    public function news_lettre_view($id)
    {
        if($id==1)
        {
            return view('news_lettre_view');
        }
        
    }
}
