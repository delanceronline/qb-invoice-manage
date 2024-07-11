@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Invoice                
                </div>

                <div class="card-body">
                    
                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end">Created by {{$invoice->user->name}}</label>                        
                    </div>

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="{{$invoice->title}}" readOnly />                                                       
                        </div>
                    </div>                        
                        
                    <div class="row mb-3">
                        <label for="content" class="col-md-4 col-form-label text-md-end">Content</label>
                        <div class="col-md-6">
                            <textarea id="content" class="form-control" name="content" readOnly>{{$invoice->content}}</textarea>                                                       
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="total" class="col-md-4 col-form-label text-md-end">Total</label>
                        <div class="col-md-6">
                            <input id="total" type="text" class="form-control" name="total" value="${{$invoice->total}}" readOnly />                                                     
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="total" class="col-md-4 col-form-label text-md-end">Share</label>
                        <div class="col-md-6">
                            <ul>
                                @foreach ($invoice->shared as $user)
                                    <li>
                                        {{$user->name}}
                                    </li>                                    
                                @endforeach
                            </ul>                            
                        </div>
                    </div>                        

                    <form method="POST" action="{{route('invoices.destroy', $invoice->id)}}">
                        @csrf
                        @method('DELETE')
                        <div class="text-center">
                            <a href="{{route('invoices.edit', $invoice->id)}}" class="btn btn-info" role="button">Edit</a> 
                            <a href="{{route('invoices.index')}}" class="btn btn-secondary" role="button">My Invoices</a> 
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </div>
                    </form> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
