<?php
namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use App\Models\shortorder;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelMultiplesExport;

class OrderExcelController extends Controller
{
    public function exportUsers(Request $request , $id )
    {
        $item = shortorder::select("*",
        'shortorders.id',
        DB::raw('(select name from users where shortorders.user_id  = users.id ) as user_name'),
        DB::raw('(select created_at from shortorders where shortorders.short_product  = shortorders.id ) as user_create_date'),
        )
        ->leftJoin("users","shortorders.user_id","users.id")
        ->leftJoin("products","shortorders.short_product","products.id")
        ->where('shortorders.id', $request->id)  
        ->get();
  
        $new_array = array();
        foreach($item as $this_array){

            $UserStat = UserStatus::where('user_id', $this_array['user_id'])->first();
            $order_role = Role::where('id', $UserStat->status)->first();

            $new_array[0][] = $this_array['short_country'];
            $new_array[1][] = $this_array['name'];
            $new_array[2][] = $this_array['short_post_code'];
            $new_array[4][] = $this_array['short_order_message'];
            $new_array[5][] = $this_array['short_delivery_date'];
            // $new_array[6][] = 'Created At :'.$this_array['user_create_date'];
            // $new_array[7][] = 'Email :'.$this_array['email'];
            $new_array[6][] = $this_array['user_name'];
        }
 $columns = [
    // 'ID', 'Order Number', 'Customer Id', 'User Id', 'Note', 'Price', 'Created At', 'Updated At', 'Product Id', 'Qty', 'Delivery Status', 'Delivery Date', 'Order Id', 'Select Country', 'Select Product', 'Mattress Size', 'Select Mattress', 'Ottoman Design', 'Ottoman Color', 'Ottoman Fabric', 'Gaslift Size', 'Gaslift Design', 'Headboard Size', 'Headboard Design', 'Headboard Color', 'Headboard Fabric', 'Without Diamond Size', 'Without Diamond Color', 'Without Diamond Fabric', 'Without Diamond Storage', 'Without Diamond Base', 'Without Diamond Mattress', 'With Diamond Size', 'With Diamond Design', 'With Diamond Color', 'With Diamond Fabric', 'With Diamond Button Diamond', 'With Diamond Storage', 'With Diamond Base', 'With Diamond Mattress', 'Ottoman Divan Size', 'Ottoman Divan Headboard', 'Ottoman Divan Color', 'Ottoman Divan Fabric', 'Ottoman Divan Mattress', 'Divan Size', 'Divan Headboard', 'Divan Color', 'Divan Fabric', 'Divan Storage', 'Divan Mattress', 'Monaco Divan Size', 'Monaco Divan Headboard', 'Monaco Divan Color', 'Monaco Divan Fabric', 'Monaco Divan Storage', 'Monaco Divan Mattress', 'First Name', 'Last Name', 'Email', 'Address', 'Phone Number', 'Social Account', 'Post Code',
];
        $array = $new_array;
    
        return Excel::download(new ExcelMultiplesExport($array , $columns), 'sample_file.xlsx');
    }
}





