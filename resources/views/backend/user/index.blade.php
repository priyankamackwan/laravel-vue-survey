@extends('backend.layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('contains')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <a href="{{ route('admin.user.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Create</a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="user-list" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    
    
    $(document).ready(function(){

        var table = $('#user-list').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('admin.user.index')}}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name',orderable: false,},
                {data: 'email', name: 'email',orderable: false,},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#user-list').on('click','.delete',function(e) {
            e.preventDefault();
            const deleteUrl = $(this).attr('href');
            console.log(deleteUrl);
            const token = $("meta[name='csrf-token']").attr("content");
            bootbox.confirm({ 
            size: "small",
            message: "Are you sure?",
            callback: function(result){ 
                if (result) {
                    $.ajax({
                        url:deleteUrl,
                        type: 'DELETE',
                        data:{
                         "_token": token,
                        },
                        success:function(data) {
                            if (data.success) {
                             location.reload();
                            }
                        }
                    })
                }
             }
            })
        })
       
    })
</script>

