@extends('layouts.main')
@section('yield', 'Orders')
@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />



<style>




@media (max-width: 1024px) {
    .table-data__tool .table-data__tool-right > button {
  margin-right: -4px;
}

/* .add_button_complete {
  position: inherit;
  margin-top: 0px;
} */

.date_from_max {
 
  margin-left: 94px;
}
.data_from{
    display: none;
}
.data_to{
    display: none;
}

#orderTable_filter{
    margin-right: 20px!important;
}





/* .date_from_min {
  padding-left: 10px;
  height: 37px;
  width: 220px;
  border: 1px solid #aaa;
  margin-right: 83px;
  margin-left: -32px;
}

.dt-buttons{
    margin-right: 62px!important;
} */

}

@media (max-width: 360px) {
    .header-desktop {
  height: 88px;
}


.header-button {
  margin-top: 0;

}

.title-5 {
    margin-bottom: 0;         
}

.table-data__tool {
    display: inherit;
}
.checkbox_hidden_btn{
    margin-top: 27px;
}

.table-data__tool-right{
    position: relative;
margin-left: 165px;
margin-bottom: 49px;
margin-top: -44px;
}

.responsive_buttom_done{
    margin-bottom: 9px;
}

.add_button_complete{
    margin-top: -47px;
}

.data_from{
    margin-left: -22px;
}
.date_from_col_4{
    margin-bottom: 10px;
}
.paginate_button {
    padding: 0px
}

}

@media (max-width: 990px) {
.table-data__tool-right{
    text-align: end;
    max-width: 100%;
}


}
@media (max-width: 820px) {
.dataTables_filter{
    margin-right: 133px;
}
}







@media (max-width: 834px) {
#orderTable_filter{
    margin-right: 103px;
}
.dt-buttons{
    margin-right: 67px!important;
}

.header-desktop {
  position: relative;
  top: 0;
  left: 0;
  height: 83px;
}
.header-button {
  margin-top: 0px;
  width: 100%;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.add_button_complete{
    position: inherit;
margin-top: -49px;
}
}

@media (max-width: 340px) {
    .table-data__tool .table-data__tool-right > button {
  margin-right: -4px;
}


.add_button_complete {
  position: inherit;
  margin-top: 0px;
}

.date_from_max {
 
  margin-left: 94px;
}
.data_from{
    display: none;
}
.data_to{
    display: none;
}
#orderTable_filter{
    margin-right: 20px!important;
}




.date_from_min {
  padding-left: 10px;
  height: 37px;
  width: 220px;
  border: 1px solid #aaa;
  margin-right: 83px;
  margin-left: -32px;
}
}




@media (max-width: 736px) {
    .table-data__tool .table-data__tool-right > button {
  margin-right: -4px;
}
.table-data__tool-right {
  position: relative;
  margin-left: 0;

}

.add_button_complete {
  position: inherit;
  margin-top: -41px;
}

.date_from_min {

  margin-right: 32px;
  margin-left: -13px;
}
.date_from_max {
  margin-left: -12px;
}
.dt-buttons{
    margin-left: -14px;
}
}


@media (max-width: 320px) {
    .table-data__tool .table-data__tool-right > button {
  margin-right: -4px;
}
.table-data__tool-right {
  position: relative;
  margin-left: 0;

}

.add_button_complete {
  position: inherit;
  margin-top: -41px;
}

.date_from_min {

  margin-right: 32px;
  margin-left: -13px;
}
.date_from_max {
  margin-left: -12px;
}
.dt-buttons{
    margin-left: -14px;
}

}

@media (max-width: 991px){
    .table-data__tool .table-data__tool-right {
  margin-top: 61px!important;
}


#products_checkedbox_get_id{
    font-size: 11px;
padding: 7px;
}

#multiples_generate_pdf{
    font-size: 11px;
padding: 5px;
}

#multiple_generate_excels{
    font-size: 12px;
}


#responsive_work{
    font-size: 10px;
margin-right: 9px;
}


#Advance__Search{
    font-size: 12px;
padding: 9px;
margin-top: 9px;
}


}




</style>
<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination li a {
        color: #555;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .pagination li.active a {
        color: #fff;
        background-color: #007bff;
    }

    .pagination li.disabled a {
        color: #999;
        pointer-events: none;
        cursor: default;
    }

    .dt-buttons{
        margin-right: 38px;
    }
  #orderTable_filter{
    position: inherit;
margin-top: -54px;
  }
  .dataTables_wrapper .dataTables_filter input{
    border: 1px solid #aaa;
border-radius: 3px;
padding: 5px;
background-color: white!important;
margin-left: 3px;
width:276px;

  }




  .dataTables_length{
    padding: 7px;
  }
</style>
<style>
   
    div.dt-buttons {
      float: right;
   
    }
    .pagination{
        display: none;
    }
    #customerTabel_length{
        padding: 7px;
    }


    .date_from_min{
        padding-left:10px;height: 37px; width: 220px;border: 1px solid #aaa;
    }

    .date_from_max{
        padding-left:10px;height: 37px; width: 220px;border: 1px solid #aaa;
    }
    </style>

   
<style>
/* Styles for the loader container */
.loader-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

/* Styles for the blurred background */
.blur-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8); /* Adjust the alpha value to control the blur intensity */
  backdrop-filter: blur(8px); /* Adjust the blur radius as needed */
}

/* Styles for the loading spinner */
.loader {
  border: 4px solid #f3f3f3; /* Light gray border for the spinner */
  border-top: 4px solid #3498db; /* Blue border for the spinner (you can change the color) */
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 2s linear infinite; /* Add a spinning animation to the spinner */
}

/* Keyframes for the spinning animation */
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Hide the loader and blur background initially */
.loader-container.hidden {
  display: none;
}




</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Loader container -->
<div class="loader-container" id="loaderContainer" style="display: none">
    <!-- Blurred background -->
    <div  id="blurBackground"></div>
    <!-- Loading spinner -->
    <div class="loader" ></div>
  </div>
  
  <!-- Content -->
  <div class="content">
    <!-- Your page content goes here -->
  </div>
  
<div class="row">
    <div class="col-md-12">
        <h3 class="title-5 m-b-35">order</h3>
        @if(session()->get('success'))
        <div id="success-alert" style="left:25%;width:35%" class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ session()->get('success') }}
        </div>
        @endif

       
        <div class="table-data__tool "> 
          
                <div class="col-md-8 responsive_buttom_done ">

                    <div class="btn-group" role="group" aria-label="Basic example" >
                        <button type="button" class="btn btn-info mr-2 checkbox_hidden_btn" style="display: none" id="products_checkedbox_get_id">Delete</button>
                        <button type="button" class="btn btn-danger mr-2 checkbox_hidden_btn" style="display: none" id="multiples_generate_pdf">Generate Pdf</button>
                        <button type="button" class="btn btn-secondary checkbox_hidden_btn" style="display: none" id="multiple_generate_excels">Generate EXCEL</button>
                    </div>
                    
                   
                </div> 


                <?php
                $user = Auth::user(); // Get the currently logged in user
                $users_id = Auth::id(); // Get the currently logged in user
                $UserStat = App\Models\UserStatus::where('user_id', $users_id)->first();
                
                $order_role = App\Models\Role::where('id', $UserStat->status)->first();
    
                ?>

              
        <div class="col-lg-5 col-md-12 add_button_complete">
        
            @php
            $allowedRoles = ['Super Admin', 'Vender'];
        @endphp

        @if (in_array($order_role->name, $allowedRoles))

            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="responsive_work">
                    <a href="{{route('orders_create')}}" style="color:white"> 
                        <i style="color:white;" class="zmdi zmdi-plus"></i>add order</a></button>
                    <button type="button" class="btn btn-primary advance_searching_btn" data-bs-toggle="modal" data-bs-target="#rightModal2" id="Advance__Search">
                        Advance Search</button>
            </div>

            @else
            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="responsive_work">
                    <a href="{{route('orders_create')}}" style="color:white"> 
                        <i style="color:white;" class="zmdi zmdi-plus"></i>add order</a></button>
                    <button type="button" class="btn btn-primary advance_searching_btn" data-bs-toggle="modal" data-bs-target="#rightModal2" id="Advance__Search">
                        Advance Search</button>
            </div>


            @endif

           


            
        </div>
    </div>
 
        <div class="table-responsive table-responsive-data2" style="overflow-x: auto;">
            <div class="container m-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-5 date_from_col_4"  >
                        <label class="data_from"> From</label>&nbsp;&nbsp;
                          <input type="text" id="min" class="date_from_min" name="min" placeholder="From" style="">
                      </div>
                    <div class="col-lg-4 col-md-6 col-sm-5" >
                        <label class="data_to"> To</label>&nbsp;&nbsp;
                        <input type="text" id="max" name="max" class="date_from_max"  placeholder="To"  style="">
                    </div> 
                </div>
            </div>


            <table class="table table-data2 load_datatable orderTable" id="orderTable" style=" margin-bottom: 20px;">
                <thead>
                    <tr>

                        @php
                        $allowedRoles = ['Super Admin', 'Vender'];
                    @endphp
            
                    @if (in_array($order_role->name, $allowedRoles))
                       
                    <th ><input type="checkbox" name="check[]"   style="width: 17px;height:17px;" id="master" class="sub_chk_1"></th>

                    @endif

                        <th>#</th>
                        <th>Country</th>
                        <th>Product</th>
                        <th>Order Messages</th>
                        <th>Post Code</th>
                        <th>Created By</th>
                        
                      
                        @if (in_array($order_role->name, $allowedRoles))
                        <th>Download PDF</th>
                        <th>Download Excel</th>
                        @endif
                        <th>Created At</th>
                        <th>Delivery Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <div class="append_order_datas" ></div>
                <tbody class="append_order_data">
                    @isset($items)
                    <?php

                    // dd($items);
                        $i = 1;
                        ?>
                    @foreach($items as $item)
                    <?php
                    //  dd($items);
                    ?>
                

                    <tr class="tr-shadow select_{{$item->id}}" style="text-align: center">

                        @php
                        $allowedRoles = ['Super Admin', 'Vender'];
                    @endphp
            
                    @if (in_array($order_role->name, $allowedRoles))
                       
                    <td><input type="checkbox" style="margin-top: 15px;" value="{{$item->id}}" name="check[]" class="sub_chk" data-id="{{$item->id}}" ></td>

                    @endif
                    <td class="desc"> {{ $i }} </td>
                    <td class="desc">{{$item->short_country ?? 'empty' }}</td>
                    <td class="desc">{{$item->name ?? 'empty' }}</td>
                    <td class="desc"> {{ \Illuminate\Support\Str::limit($item->short_order_message ?? 'Empty', 10, $end='...') }}   </td>
                    <td class="desc">{{$item->short_post_code ?? 'empty' }}</td>
                    <td class="desc">{{$item->user_name ?? 'empty' }}</td>
                  
                   
                   

                    @if (in_array($order_role->name, $allowedRoles))
                       
                    <td>
                        <a  href="{{ url('orders/'.$item->id.'/pdf' ) }}"   data-id="{{ $item->id }}" style="right:45%;cursor: pointer;" class="item " data-toggle="tooltip" data-placement="top" title="GENERATE PDF"><span class="material-symbols-outlined"> picture_as_pdf</span></a>
                     </td>
                     <td>
                        <a  href="{{ url('orders/'.$item->id.'/excel' ) }}"   data-id="{{ $item->id }}" style="right:45%;cursor: pointer;" class="item " data-toggle="tooltip" data-placement="top" title="GENERATE EXCEL"><span class="material-symbols-outlined">csv</span></a>
                     </td>

                    @endif

                    @if($item->created_at)
                    <?php
                    // Convert the string to a DateTime object using Carbon
                    $orderDate = \Carbon\Carbon::parse($item->created_at);
                  
                ?>
                     <td class="desc">{{$orderDate->format('Y/m/d g:i A')}}</td>
                     {{-- <td class="desc">{{$orderDate->format('Y-m-d H:i:s')}}</td> --}}
                     <?php
                     //   dd($orderDate->format('Y-m-d H:i:s'));
                     ?>
                     @else
                     <td class="desc"><span> not found</span></td>
                     @endif 


                    <td class="desc">{{$item->short_delivery_date ?? 'empty' }}</td>
                <td>
                    <div class="table-data-feature" style="padding-left:30px"> 
                        @can('View Order')
                        <a href="{{ url('orders_view',$item->id) }}" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="View"> 
                           
                            <i class="fa fa-eye" aria-hidden="true"></i>

                            {{-- <i class="fa fa-history"></i> --}}
                         </a>
                          @endcan 
                          @can('Update Order')
                          <a href="{{ url('orders_edit',$item->id) }}" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        @endcan
                         @can('Delete Order')
                         <a  data-id="{{ $item->id }}" style="right:45%;cursor: pointer;" class="item delete_orders_one_item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="zmdi zmdi-delete"></i> 
                        </a> 
                        @endcan</div>
                </td>
                  </tr>
                  <?php
                  $i++;
            ?>
                  @endforeach
                  @else
                      <tr>
                          <td colspan="8">Not Found Orders</td>
                      </tr>
                  @endisset  
                  
                </tbody>
              
            </table>
            <div style="float:right; margin-top:-1%">
                {{-- {{ $items->links('vendor.pagination.default')  }} --}}
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>


/* Modal Box */
.right .modal-dialog,
.left .modal-dialog {
    transition: transform .25s ease-out;
    position: fixed;
    margin: auto;
    height: 100%;
}
.modal.right .modal-content,
.modal.left .modal-content {
    overflow-y: auto;
  	border-radius: 0;
  	border: none;
    height: 100%;
}
.right .modal-dialog {
    transform: translateX(50px);
    right: 0;
}
.left .modal-dialog {
    transform: translateX(-50px);
    left: 0;
}
.modal-backdrop{
    display: none !important
;}

#rightModal2{
    top: 10% !important;
}
</style>
 <!-- Drawer Style Right Modal -->
    
<div class="modal right" id="rightModal2" tabindex="-1" aria-labelledby="rightModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md w-100" >
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="rightModalLabel" ><b>Advance Search</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <form   method="POST" id="payment-form">
                @csrf
            <div class="modal-body" style="height: 100%">
                <div class="container" style="height: 800px;">

                    <?php 
             
                    $Orderdetail = App\Models\Orderdetail::distinct()->pluck('select_country');
                     
                    
                    ?>

                    <div class="row mb-1">
                        <div class="col-md-12">
                            <label><b>Country </b> (Optional)   </label>
                            <select id="country_name" name="country_name" class="form-select" >
                                <option value="" >--Select Country--</option>
                                @forelse ($Orderdetail as $country)
                                <option value="{{ $country}}">{{ $country }}</option>
                                @empty
                                <option value="">No Found</option>
                                @endforelse
                               
                              </select>
    
                        </div>
                    </div>
                    
                    <div class="row mb-1">
                        @if (in_array($order_role->name, $allowedRoles))
                        <div class="col-md-12">
                            <label><b>Agent Name  </b>(Optional) </label>
                            <input type="text" id="agen_name" name="agen_name" class="form-control search" placeholder="Agent Name"  >
                            <span class="correct_agen_plz" style="color:red"></span>
                            <div style="display: none;height: 235px;overflow: auto;" class="searching_agent_bar" >
                                <div style="padding-top: 12px;padding-bottom:6px;"><b class="Searched_search"> Searched Agents </b></div>
                                <div id="suggestion-list"></div>
                                
                            </div>
                        </div>
                        @endif
                    
                        <div class="col-md-12">
                            <label><b>Zip Code</b> (Optional)  </label>
                            <input type="text" id="zip_code" name="zip_code" class="form-control" placeholder="Zip Code" >
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-md-12">
                            <label><b>Product Name</b>  (Optional) </label>
                            <input type="text" id="product_name" name="product_name" class="form-control search-product" placeholder="Product Name" >
                            <div style="display: none; height: 100px; overflow: auto; " class="searching_product_bar">
                                <div style="padding-top:13px;padding-bottom:6px;"><b> Searched Products </b>
                                </div>
                                <div id="suggestion-list-product"></div>
                             </div>
                        </div>
                   
                      
                    </div>
                  

                    <div class="row mb-1">
                     

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label><b>From</b>(Optional) </label>
                                <input type="date" id="date_from" name="date_from" class="form-control" >
                            </div>
                       
                            <div class="col-md-6">
                                <label><b>To </b> (Optional)</label>
                                <input type="date" id="date_to" name="date_to" class="form-control" >
                            </div><br>
                            <span style="padding-top: 10px">we can find order between  two different date<span>
                        </div>

                        @if (in_array($order_role->name, $allowedRoles))
                        <div class="col-md-12 mt-2">
                            <button type="button" id="close_button_ajax" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary filter_loarder_btn_real_filter" id="search_filter_order"> Search</button>
                           
                            <button class="btn btn-primary filter_loarder_btn" type="button" disabled style="display: none">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                              </button>
                        </div>
                        @else

                        <div class="col-md-12 mt-2">
                            <button type="button" id="close_button_ajax" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary filter_loarder_btn_real_filter" id="search_filter_orders_customers"> Search</button>
                           
                            <button class="btn btn-primary filter_loarder_btn" type="button" disabled style="display: none">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                              </button>
                        </div>

                        @endif

                        
                    </div>

                </div>
           
            </div>
            </form>

         
           
        </div>
    </div>
</div>

<!-- End Drawer Style Right Modal -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


@endsection

@section('js_files')

<script>

    function hello(){

        $('#master').on('click', function(e) {

if ($(this).is(':checked', true)) {
    $(".sub_chk_subb").prop('checked', true);
    $('.checkbox_hidden_btn').show('slow');
  
} else {
    $(".sub_chk_subb").prop('checked', false);
    $('.checkbox_hidden_btn').hide('slow');
   
}
});

        if($('.sub_chk_subb:checked').length > 0){
                $('.checkbox_hidden_btn').show('slow');
            }else{
                $('.checkbox_hidden_btn').hide('slow');
            }
        
    }
    
    
    </script>

<script>
    $(document).ready(function() {
        
        $('#master').on('click', function(e) {

            if ($(this).is(':checked', true)) {
                $(".sub_chk").prop('checked', true);
                $('.checkbox_hidden_btn').show('slow');
              
            } else {
                $(".sub_chk").prop('checked', false);
                $('.checkbox_hidden_btn').hide('slow');
               
            }
        });

        $('.sub_chk').on('click', function(e) {
            
            if($('.sub_chk:checked').length > 0){
                $('.checkbox_hidden_btn').show('slow');
            }else{
                $('.checkbox_hidden_btn').hide('slow');
            }

        });



        // $('.sub_chk_subb').on('click', function(e) {
            // alert("hello");
            
            // if($('.sub_chk_subb:checked').length > 0){
            //     $('.checkbox_hidden_btn').show('slow');
            // }else{
            //     $('.checkbox_hidden_btn').hide('slow');
            // }

        // });

       
        
    });

</script>



<!-- Your JavaScript code (using jQuery) -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function() {
        $('#multiple_generate_excels').on('click', function() { 
            // Send the AJAX request
            var filter_name = $("#filter_name").val();
              var allVals = [];
                        var allcustomer = [];

                        $(".sub_chk:checked").each(function() {
                            allVals.push($(this).attr('data-id'));

                            allcustomer.push($(this).attr('value'));

                            var v_token = "{{csrf_token()}}";
    
                        });

                        $(".sub_chk_subb:checked").each(function() {
                            allVals.push($(this).attr('data-id'));

                            allcustomer.push($(this).attr('value'));

                            var v_token = "{{csrf_token()}}";
    
                        });

  if (allVals.length <= 0) {
    
                            Swal.fire(
                                'Alert?',
                                'Please Select the Checkbox?',
                                '???????'
                            )
                        } else {
                            // var check = confirm("Are you sure you want to delete this row?");
                            Swal.fire({
                                title: 'Are you sure?',
                                text: " You want to Generate Pdf !",
                                imageUrl: '{{asset("public/popup_images/popup.png")}}',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, Generate Excel!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    var join_selected_values = allVals.join(",");
                                    var customer_values = allcustomer.join(",");
                                    // alert(join_selected_values);
                                   
                                    var v_token = "{{csrf_token()}}";
                                       var params = {join_selected_values:join_selected_values, _token: v_token , customer_values ,filter_name:filter_name};
    

            $.ajax({
                url: '/generate-excels',
                data: params,
                type: 'GET',
                xhrFields: {
                    responseType: 'blob' // Required to handle binary response (file download)
                },
                success: function(response) {
                    // Handle the success response (e.g., trigger the file download)
                    const url = window.URL.createObjectURL(new Blob([response]));
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = 'sample_file.xlsx';
                    a.click();
                    window.URL.revokeObjectURL(url);
                },
                error: function(error) {
                    // Handle the error response
                    console.error(error);
                }
            });


        }
                            })
                        }


        });
    });
</script>


{{-- advance search customer start --}}


<script>

    $(document).on('click', '#search_filter_orders_customers', function(e) {
                        e.preventDefault();

      var country_name  = $('#country_name').val();
    //   var agen_name  = $('#agen_name').val();
      var zip_code  = $('#zip_code').val();
      var product_name  = $('#product_name').val();
      var date_from  = $('#date_from').val();
      var date_to  = $('#date_to').val();

     


        if (! $('#payment-form')[0].checkValidity()) {
      $('#payment-form')[0].reportValidity();

        }else{
            $('.filter_loarder_btn').show();
        $('.filter_loarder_btn_real_filter').hide();


            var dataId = $(this).attr("data-id");
    
    var v_token = "{{csrf_token()}}";
       var params = {country_name:country_name, _token: v_token , zip_code: zip_code , product_name: product_name ,  date_from: date_from , date_to:date_to };

    $.ajax({
        type: 'post',
        data: params,
        url: "/advance-searchings_customers_order",
        success: function(data) {
            if(data.status == 202){
                $('.correct_agen_plz').html("");
                $('.filter_loarder_btn').hide();
                $('.filter_loarder_btn_real_filter').show();
                $('.correct_agen_plz').html(data.agen);
            }else{

            if(data.status == 200){

                $('.correct_agen_plz').html("");
                $('.filter_loarder_btn').hide();
                $('.filter_loarder_btn_real_filter').show();

              
                if(data.items != ""){

                    $('.append_order_data').html("");
                     $('#close_button_ajax').click();
                    //  alert("hello");

                    
                                var i = 1;
                                    $.each(data.items, function (key, order) {
               
                var originalText = order.short_order_message;
            var words = originalText.split(' '); // Split text into words
            var maxLength = 5; // Maximum words to display
            // Join the first 10 words with a space
            var truncatedText = words.slice(0, maxLength).join(' ');
            // If there are more than 10 words, add "..." at the end
            if (words.length > maxLength) {
                truncatedText += ' ...';
            }

             // var timeAgo = moment(order.order_date).format('DD MMM YYYY');
                var delivery_date = moment(order.created_at).format('YYYY/MM/DD h:mm A');

                console.log(delivery_date);
                console.log(order.post_country_code_get);

                var pdfLink = '/orders/' + order.id + '/pdf';
                var excelLink = '/orders/' + order.id + '/excel';

                var tableRow = '<tr class="tr-shadow select_' + order.id + '">' +
                
                    '<td class="desc">' + i + '</td>' +
                    '<td><span class="block-email">' + order.short_country + '</span></td>' +
                    '<td class="desc">' + order.name + '</td>' +
                    '<td class="desc">' + truncatedText + '</td>' +
                    '<td class="desc">' + order.short_post_code + '</td>' +
                    '<td><span class="status--process">' + order.user_name +'</span></td>' +
                  
                   

                   


                    '<td class="desc">' + delivery_date + '</td>' +
                    '<td class="desc">' + order.short_delivery_date + '</td>' +
                    '<td>' +

                    '<div class="table-data-feature">' +
                    '@can("View Order")<a href="' + '/orders_view/' + order.id + '" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="View"> <i class="fa fa-eye" aria-hidden="true"></i></a>@endcan ' +
                    '@can("Update Order")<a href="' + '/orders_edit/' + order.id + '" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>@endcan ' +
                    '@can("Delete Order")<a data-id="' + order.id + '" style="right:45%;cursor: pointer;" class="item delete_orders_one_item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>@endcan' +
                    '</div>' +
                    '</td>' +
                    '</tr>';

   

                $('.append_order_data').append(tableRow);
                i++;
});
        
                    }else{
                            $('#close_button_ajax').click();
                        $('.append_order_data').html("");
                        $('.append_order_data').append(' <tr><td colspan="12">Not Found Orders</td></tr>');
                    }
         
            }else{
                Swal.fire(
                'Something Error!',
                'Your file has Not been deleted.',
                'danger'
            )
            }

        }
        },
        // error: function(data) {
        //     alert(data.responseText);
        // }
    });

            
        }
  
    });
    </script>



{{-- advance search customer end --}}

<script>

$(document).ready(function() {
    $(".advance_searching_btn").click(function() {
      $(".header-desktop").css("z-index", "1");
    });
  });


</script>

{{-- super admin advance search start --}}
<script>

    $(document).on('click', '#search_filter_order', function(e) {
                        e.preventDefault();

      var country_name  = $('#country_name').val();
      var agen_name  = $('#agen_name').val();
      var zip_code  = $('#zip_code').val();
      var product_name  = $('#product_name').val();
      var date_from  = $('#date_from').val();
      var date_to  = $('#date_to').val();

     


        if (! $('#payment-form')[0].checkValidity()) {
      $('#payment-form')[0].reportValidity();

        }else{
            $('.filter_loarder_btn').show();
        $('.filter_loarder_btn_real_filter').hide();


            var dataId = $(this).attr("data-id");
    
    var v_token = "{{csrf_token()}}";
       var params = {country_name:country_name, _token: v_token , agen_name: agen_name , zip_code: zip_code , product_name: product_name ,  date_from: date_from , date_to:date_to };

    $.ajax({
        type: 'post',
        data: params,
        url: "/advance-searchings",
        success: function(data) {
            if(data.status == 202){
                $('.correct_agen_plz').html("");
                $('.filter_loarder_btn').hide();
                $('.filter_loarder_btn_real_filter').show();
                $('.correct_agen_plz').html(data.agen);
            }else{

            if(data.status == 200){

                $('.correct_agen_plz').html("");
                $('.filter_loarder_btn').hide();
                $('.filter_loarder_btn_real_filter').show();

              
                if(data.items != ""){

                    $('.append_order_data').html("");
                    $('.append_order_datas').html("");
                    $('.append_order_datas').html('<input type="hidden" name="filter_name" id="filter_name" value="filter" >');
                     $('#close_button_ajax').click();
                    //  alert("hello");

                    
                    
                                var i = 1;
                                    $.each(data.items, function (key, order) {
               
                var originalText = order.short_order_message;
            var words = originalText.split(' '); // Split text into words
            var maxLength = 5; // Maximum words to display
            // Join the first 10 words with a space
            var truncatedText = words.slice(0, maxLength).join(' ');
            // If there are more than 10 words, add "..." at the end
            if (words.length > maxLength) {
                truncatedText += ' ...';
            }

             // var timeAgo = moment(order.order_date).format('DD MMM YYYY');
                var delivery_date = moment(order.created_at).format('YYYY/MM/DD h:mm A');

                console.log(delivery_date);
                console.log(order.post_country_code_get);

                var pdfLink = '/orders/' + order.id + '/pdf';
                var excelLink = '/orders/' + order.id + '/excel';

                var tableRow = '<tr class="tr-shadow select_' + order.id + '">' +
                    '<td><input type="checkbox" style="margin-top: 15px;" value="' + order.id + '" name="check[]" class="sub_chk_subb" data-id="' + order.id + '" onclick=hello() ></td>' +
                    '<td class="desc">' + i + '</td>' +
                    '<td><span class="block-email">' + order.short_country + '</span></td>' +
                    '<td class="desc">' + order.name + '</td>' +
                    '<td class="desc">' + truncatedText + '</td>' +
                    '<td class="desc">' + order.short_post_code + '</td>' +
                    '<td><span class="status--process">' + order.user_name +'</span></td>' +
                  
                   

                    '<td><a href="' + pdfLink + '" data-id="' + order.id + '" style="right:45%;cursor: pointer;" class="item" data-toggle="tooltip" data-placement="top" title="GENERATE PDF"><span class="material-symbols-outlined"> picture_as_pdf</span></a></td>' +
                    '<td><a href="' + excelLink + '" data-id="' + order.id + '" style="right:45%;cursor: pointer;" class="item" data-toggle="tooltip" data-placement="top" title="GENERATE EXCEL"><span class="material-symbols-outlined">csv</span></a></td>' +


                    '<td class="desc">' + delivery_date + '</td>' +
                    '<td class="desc">' + order.short_delivery_date + '</td>' +
                    '<td>' +
                     
                    '<div class="table-data-feature">' +
                    '@can("View Order")<a href="' + '/orders_view/' + order.id + '" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="View"> <i class="fa fa-eye" aria-hidden="true"></i></a>@endcan ' +
                    '@can("Update Order")<a href="' + '/orders_edit/' + order.id + '" style="right:45%" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>@endcan ' +
                    '@can("Delete Order")<a data-id="' + order.id + '" style="right:45%;cursor: pointer;" class="item delete_orders_one_item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>@endcan' +
                    '</div>' +
                    '</td>' +
                    '</tr>';

   

                $('.append_order_data').append(tableRow);
                i++;
});
        
                    }else{
                            $('#close_button_ajax').click();
                        $('.append_order_data').html("");
                        $('.append_order_data').append(' <tr><td colspan="12">Not Found Orders</td></tr>');
                    }
         
            }else{
                Swal.fire(
                'Something Error!',
                'Your file has Not been deleted.',
                'danger'
            )
            }

        }
        },
        // error: function(data) {
        //     alert(data.responseText);
        // }
    });

            
        }
  
    });
    </script>
{{-- super admin advance search end --}}


<script>
    $(document).ready(function() {
            //on page load uncheck any ticked checkboxes
            $("input:checkbox:checked").prop('checked', false);
        });
        </script>
    <script>

    $(document).on('click', '.delete_orders_one_item', function(e) {
                        e.preventDefault();
            var dataId = $(this).attr("data-id");

            // alert(dataId);
            Swal.fire({
                                title: 'Are you sure?',
                                text: "You want to Delete this order!",
                                imageUrl: '{{asset("public/popup_images/popup.png")}}',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
    
                                    var v_token = "{{csrf_token()}}";
                                       var params = {dataId:dataId, _token: v_token};
    
                                    $.ajax({
                                        type: 'DELETE',
                                        data: params,
                                        url: "/orders_delete",
                                        success: function(data) {
    
                                            if(data.status == 200){
                                                Swal.fire(
                                                'Deleted!',
                                                'Your file has been deleted.',
                                                'success'
                                            )
                                                
                                            $('.select_'+dataId).hide('slow');
                                            $('.checkbox_hidden_btn').hide('slow');
                                         
                                            }else{
                                                Swal.fire(
                                                'Something Error!',
                                                'Your file has Not been deleted.',
                                                'danger'
                                            )
                                            }
                                        },
                                        // error: function(data) {
                                        //     alert(data.responseText);
                                        // }
                                    });
    
                                }
    });
    });
         //Checkbox  select multiples Products with images  deleted
         $(document).on('click', '#products_checkedbox_get_id', function(e) {
                        e.preventDefault();
                        var allVals = [];
                        $(".sub_chk:checked").each(function() {
                            allVals.push($(this).attr('data-id'));
                            var v_token = "{{csrf_token()}}";
    
                        });
                        if (allVals.length <= 0) {
    
                            Swal.fire(
                                'Alert?',
                                'Please Select the Checkbox?',
                                '???????'
                            )
                        } else {
                            // var check = confirm("Are you sure you want to delete this row?");
                            Swal.fire({
                                title: 'Are you sure?',
                                text: " You want to Delete these orders!",
                                imageUrl: '{{asset("public/popup_images/popup.png")}}',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    var join_selected_values = allVals.join(",");
                                    // alert(join_selected_values);
                                   
                                    var v_token = "{{csrf_token()}}";
                                       var params = {join_selected_values:join_selected_values, _token: v_token};
    
                                    $.ajax({
                                        type: 'DELETE',
                                        data: params,
                                        url: "/myproductsDeleteAlls",
                                        success: function(data) {
    
                                            if(data.status == 200){
                                                Swal.fire(
                                                'Deleted!',
                                                'Your file has been deleted.',
                                                'success'
                                            )
                                                
                                            // $('.load_datatable').dataTable().api().ajax.reload();
                                            var getvalues =join_selected_values.split(",");
                                                $.each(getvalues , function(index, val) { 
                                                    $('.select_'+val).hide('slow');
                                                });
    
                                                $(".sub_chk_1").prop('checked', false);
                                                $('.checkbox_hidden_btn').hide('slow');
                                        
                                            }else{
                                                Swal.fire(
                                                'Something Error!',
                                                'Your file has Not been deleted.',
                                                'danger'
                                            )
                                            }
                                        },
                                        // error: function(data) {
                                        //     alert(data.responseText);
                                        // }
                                    });
                                    $.each(allVals, function(index, value) {
                                        $('table tr').filter("[data-row-id='" + value + "']")
                                            .remove();
                                    });
                                    //}
                                }
                            })
                        }
                    });
    
                    $('[data-toggle=confirmation]').confirmation({
                        rootSelector: '[data-toggle=confirmation]',
                        onConfirm: function(event, element) {
                            element.trigger('confirm');
                        }
                    });
    
    
                    //Checkbox  select multiples Products iwith images  deleted
      
    






    </script>
    
    <script>
        


//Checkbox  select multiples Generat Pdf   
    $(document).on('click', '#multiples_generate_pdf', function(e) {
                        e.preventDefault();
                     

                        // alert('hello');
                        var allVals = [];
                        var allcustomer = [];
                        $(".sub_chk:checked").each(function() {
                            allVals.push($(this).attr('data-id'));

                            allcustomer.push($(this).attr('value'));

                            var v_token = "{{csrf_token()}}";
    
                        });
                        $(".sub_chk_subb:checked").each(function() {
                            allVals.push($(this).attr('data-id'));

                            allcustomer.push($(this).attr('value'));

                            var v_token = "{{csrf_token()}}";
    
                        });
                        if (allVals.length <= 0) {
    
                            Swal.fire(
                                'Alert?',
                                'Please Select the Checkbox?',
                                '???????'
                            )
                        } else {
                            // var check = confirm("Are you sure you want to delete this row?");
                            Swal.fire({
                                title: 'Are you sure?',
                                text: " You want to Generate Pdf !",
                                imageUrl: '{{asset("public/popup_images/popup.png")}}',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, Generate Pdf!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    var join_selected_values = allVals.join(",");
                                    var customer_values = allcustomer.join(",");
                                    // alert(join_selected_values);
                                   
                                    var v_token = "{{csrf_token()}}";
                                       var params = {join_selected_values:join_selected_values, _token: v_token , customer_values };
                                       $('#loaderContainer').show();
    
                                    $.ajax({
                                        type: 'get',
                                        data: params,
                                        url: "/multiplesgenerateInvoices", 
                                        xhrFields: {
                                                    responseType: 'blob'
                                                },

                                                    success: function(response){


                                                        $('#loaderContainer').hide();

                                                    var blob = new Blob([response]);
                                                    var link = document.createElement('a');
                                                    link.href = window.URL.createObjectURL(blob);
                                                    link.download = "Sample.pdf";
                                                    link.click();
                                                    Swal.fire(
                                                        'Generate Pdf!',
                                                        'Your file has been Pdf.',
                                                        'success'
                                                     )

                                                    },
                                                    error: function(blob){
                                                    console.log(blob);
                                                    }

                                                  

                                      
                                    });
                                    $.each(allVals, function(index, value) {
                                        $('table tr').filter("[data-row-id='" + value + "']")
                                            .remove();
                                    });
                                    //}
                                }
                            })
                        }
                    });
    
                    $('[data-toggle=confirmation]').confirmation({
                        rootSelector: '[data-toggle=confirmation]',
                        onConfirm: function(event, element) {
                            element.trigger('confirm');
                        }
                    });
    
    
                    //Checkbox  select multiples Generat Pdf   




    </script>


        

@endsection