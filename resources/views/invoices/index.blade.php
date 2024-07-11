@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">            
        
        <div class="col-md-8">
            <table id="invoicesList" class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Created by</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>                
                </thead>           
                <tbody>                                    
                </tbody> 
            </table>
        </div>

        <p class="text-center"><a href="{{route('invoices.create')}}" class="btn btn-primary" role="button">Create Invoice</a></p>

    </div>
</div>

<script>
    
$(document).ready(function () {
    $('#invoicesList').dataTable({
        "serverSide": true,
        "responsive": true,
        "ajax": "{{route('invoices.data')}}"
    });
});

</script>

@endsection
