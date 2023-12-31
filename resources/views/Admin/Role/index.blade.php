@extends('layouts.main')
@section('yield', 'Roles')
@section('content')

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
    .alert {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .alert i {
        margin-right: 10px;
        font-size: 24px;
    }
</style>
@can('View Role')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Role</h3>
        @if(session('status'))

        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="success-alert" style="left: 25%;width:40%">
            <span class="badge badge-pill badge-success">Success</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {{ session('status') }}

        </div>
        <script>
            setTimeout(function() {
                $('#success-alert').fadeOut('slow');
            }, 8000); // 10 seconds
        </script>
        @endif
        <div class="table-data__tool">
            <div class="table-data__tool-left">
            </div>
             @can('Create Role')
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" style="color:white" href="{{route('createrole')}}">
                    <i class="zmdi zmdi-plus"></i>add role</a>
            </div>
             @endcan
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1 ?>
                    @foreach($items as $item)
                    <tr class="tr-shadow">
                        <td>{{$num++}}</td>
                        <td>
                            <span class="status--process">{{$item->name}}</span>
                        </td>
                        <td class="desc">{{$item->created_at->format('F jS Y')}}</td>
                        <td>
                            <div class="table-data-feature">
                                 @can('Update Role')
                                <a class="item" data-toggle="tooltip" style="left:48%" data-placement="top" title="Edit" href="{{route('editrole',$item->id)}}">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                    @endcan
                                @can('Delete Role')
                                <a class="item" data-toggle="tooltip" style="left:48%" data-placement="top" title="Delete" href="{{route('destroyrole',$item->id)}}">
                                    <i class="zmdi zmdi-delete"></i>
                                </a>
                                @endcan
                            </div>
                        </td>
                        <td></td>
                    </tr>
       
                    @endforeach
                </tbody>
            </table>
            <div style="float:right; margin-top:1%">
                {{ $items->links('vendor.pagination.default')  }}
            </div>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@else
<div class="alert alert-warning" role="alert" style="text-transform: uppercase;">
    <i class="fas fa-exclamation-triangle"></i>
    You do not have permission to view roles & permissions.
</div>
@endcan
@endsection