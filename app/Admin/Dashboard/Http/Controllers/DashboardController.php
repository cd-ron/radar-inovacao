<?php
namespace App\Admin\Dashboard\Http\Controllers;

use App\Admin\Project\Models\ProductProject;
use App\Admin\Project\Models\Project;
use App\Auth\Models\User;
use App\Core\Http\Controllers\CoreController as CoreController;
use DB;
use Carbon\Carbon;

class DashboardController extends CoreController
{
    function index(){

        return view('admin.master');

        // $this->authorize('admin-index');

        // for ($i = 1; $i <= 31; $i++)
        // {
        //     $chart_moth[$i] = Project::where(DB::raw('MONTH(date)'), '=', date('n') )
        //                          ->where(DB::raw('DAY(date)'), '=', $i )
        //                          ->count();
        // }

        // $chart_products = ProductProject::selectRaw('product.name as product_name, product_id, count(*) as total')
        //     ->join('product', 'product_project.product_id', '=', 'product.id')
        //     ->groupBy('product_id')
        //     ->limit(5)
        //     ->get();

        // function random_color_part() {
        //     return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
        // }

        // function random_color() {
        //     return random_color_part() . random_color_part() . random_color_part();
        // }

        // $chart_product_item = '';

        // foreach($chart_products as $chart_product)
        // {
        //     $chart_product_item .= "{";
        //     $chart_product_item .= "value: ".$chart_product->total.",";
        //     $chart_product_item .= "color: '#".random_color()."',";
        //     $chart_product_item .= "highlight: '#".random_color()."',";
        //     $chart_product_item .= "label: '".$chart_product->product_name."'";
        //     $chart_product_item .= "},";
        // }

        // $chart_type_users = User::selectRaw('user_type.name as type_name, count(*) as total')
        //     ->join('user_type', 'users.user_type_id', '=', 'user_type.id')
        //     ->groupBy('user_type_id')
        //     ->limit(5)
        //     ->get();

        // $chart_type_user_item = '';

        // foreach($chart_type_users as $chart_type_user)
        // {
        //     $chart_type_user_item .= "{";
        //     $chart_type_user_item .= "value: ".$chart_type_user->total.",";
        //     $chart_type_user_item .= "color: '#".random_color()."',";
        //     $chart_type_user_item .= "highlight: '#".random_color()."',";
        //     $chart_type_user_item .= "label: '".$chart_type_user->type_name."'";
        //     $chart_type_user_item .= "},";
        // }

        // $chart_regions = User::selectRaw('state.name as state_name, count(*) as total')
        //     ->join('state', 'users.state_id', '=', 'state.id')
        //     ->groupBy('state_id')
        //     ->limit(5)
        //     ->get();

        // $chart_region_item = '';

        // foreach($chart_regions as $chart_region)
        // {
        //     $chart_region_item .= "{";
        //     $chart_region_item .= "value: ".$chart_region->total.",";
        //     $chart_region_item .= "color: '#".random_color()."',";
        //     $chart_region_item .= "highlight: '#".random_color()."',";
        //     $chart_region_item .= "label: '".$chart_region->state_name."'";
        //     $chart_region_item .= "},";
        // }


        // return view('admin::dashboard.index')
        //     ->with('chart_moth', $chart_moth)
        //     ->with('chart_type_user_item', $chart_type_user_item)
        //     ->with('chart_region_item', $chart_region_item)
        //     ->with('chart_product_item', $chart_product_item);
    }

}
