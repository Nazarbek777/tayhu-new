<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutBanner;
use App\Models\Blog;
use App\Models\CompanyAdvantage;
use App\Models\IntoFuture;
use App\Models\OurProject;
use App\Models\Partner;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProjectCategory;
use App\Models\Showroom;
use App\Models\Size;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class MainController extends Controller
{
    public function index()
    {
        $projects = OurProject::with('category')->get();
        $teams = Team::all();
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();
        $testimonials = Testimonial::all();
        $partners = Partner::all();
        $construction = OurProject::whereHas('category', function ($query) {
            $query->where('name', 'Construction');
        })->with('category')->get();

        $electrical = OurProject::whereHas('category', function ($query) {
            $query->where('name', 'Electrical');
        })->with('category')->get();

        $architect = OurProject::whereHas('category', function ($query) {
            $query->whereNotNull('name')->where('name', 'Architect');
        })->with('category')->get();

        $building = OurProject::whereHas('category', function ($query) {
            $query->whereNotNull('name')->where('name', 'Building');
        })->with('category')->get();

        $banners = AboutBanner::all();
        $intoFuture = IntoFuture::first();

        // Return the view with the data
        return view('frontend.index', compact('banners', 'teams', 'testimonials', 'blogs', 'intoFuture', 'projects', 'partners', 'construction', 'building', 'architect', 'electrical'));
    }
    public function about()
    {
        $partners = Partner::all();
        $about = IntoFuture::all();
        $company_advantages = CompanyAdvantage::all();
        return view('frontend.about', compact('about', 'company_advantages', 'partners'));
    }

    public function blog()
    {
        $blogs = Blog::paginate(9);
        return view('frontend.blog', compact('blogs'));
    }
    public function showroom()
    {
        $showroom = Showroom::all();
        return view('frontend.showroom', compact('showroom'));
    }

    public function blogSingle($id)
    {
        $blog = Blog::find($id);
        return view('frontend.blog_single', compact('blog'));
    }
    public function catalog()
    {

        $totalFaqs = ProductCategory::count();
        $halfCount = ceil($totalFaqs / 2);

        $category_first = ProductCategory::orderBy('id', 'desc')->take($halfCount)->withTranslations()->get();

        $category_second = ProductCategory::orderBy('id', 'asc')->take($totalFaqs - $halfCount)->withTranslations()->get();

        return view('frontend.catalog', compact("category_first", "category_second"));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function team()
    {
        $teams = Team::all();
        return view('frontend.team', compact('teams'));
    }
    public function service(Request $request, $id = null)
    {
        // Initialize the query builder for products
        $query = Product::query();

        // Apply category filter if $id is provided
        if ($id) {
            $query->where('category_id', $id);
        }

        // Apply size filter if 'size' is present in the request
        if ($request->has('size')) {
            $query->where('size_id', $request->get('size'));
        }
        $query->when($request->has('query'), function ($query) use ($request) {
            $searchTerm = $request->input('query');
            $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
        });
        if ($request->has('filter')) {
            switch ($request->input('filter')) {
                case 'recent':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'new_added':
                    $query->orderBy('updated_at', 'desc');
                    break;
                default:
                    break;
            }
        }

        // Get the paginated products
        $products = $query->paginate(10);

        // Fetch categories with product count
        $categories = ProductCategory::withCount('products')->get();

        // Fetch all sizes
        $sizes = Size::all();

        // Return the view with products, categories, and sizes
        return view('frontend.service', compact('products', 'categories', 'sizes'));
    }



    public function serviceSingle($id)
    {
        $singleProduct = Product::find($id);
        $category_id = $singleProduct->category_id;

        $categoryProduct = Product::where('category_id', $category_id)->get();

        return view('frontend.service_single', compact('singleProduct', 'categoryProduct'));
    }

    public function projects()
    {
        $projects = OurProject::with('category')->get();

        $construction = OurProject::whereHas('category', function ($query) {
            $query->where('name', 'Construction');
        })->with('category')->get();

        $electrical = OurProject::whereHas('category', function ($query) {
            $query->where('name', 'Electrical');
        })->with('category')->get();

        $architect = OurProject::whereHas('category', function ($query) {
            $query->whereNotNull('name')->where('name', 'Architect');
        })->with('category')->get();

        $building = OurProject::whereHas('category', function ($query) {
            $query->whereNotNull('name')->where('name', 'Building');
        })->with('category')->get();
        return view('frontend.projects', compact('projects', 'construction', 'building', 'architect', 'electrical'));
    }
    public function projectSingle($id)
    {
        $project = OurProject::find($id);
        return view('frontend.project_single', compact('project'));
    }
}
