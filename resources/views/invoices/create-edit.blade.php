@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{$isEdit ? route('invoices.update', $invoice->id) : route('invoices.store')}}">
                    @csrf
                    @if ($isEdit)
                        @method('PUT')
                    @endif
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{$isEdit ? $invoice->title : old('title')}}" />                                                       
                            </div>
                        </div>                        
                            
                        <div class="row mb-3">
                            <label for="content" class="col-md-4 col-form-label text-md-end">Content</label>
                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content">{{$isEdit ? $invoice->content : old('content')}}</textarea>                                                       
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="total" class="col-md-4 col-form-label text-md-end">Total</label>
                            <div class="col-md-6">
                                <input id="total" type="text" class="form-control" name="total" value="{{$isEdit ? $invoice->total : old('total')}}" />                                                     
                            </div>
                        </div>
                        <div class="text-center">
                            @if ($errors->any())
                                @foreach ($errors->all() as $errorMessage)
                                    <p class="text-danger">{{$errorMessage}}</p>
                                @endforeach                                
                            @endif
                        </div>

                        <div class="row mb-3">
                            <label for="total" class="col-md-4 col-form-label text-md-end">Share</label>
                            <div class="col-md-6">
                                <select id="share" name="share[]" multiple>

                                        @if ($isEdit == false || Auth::id() == $invoice->user_id)

                                            @foreach (App\Models\User::all()->except(Auth::id()) as $user)
                                                <option value="{{$user->id}}" {{$isEdit ? ($invoice->shared->contains($user) ? 'selected': '') : ''}}>{{$user->name}}</option>    
                                            @endforeach                                        

                                        @else

                                            @foreach (App\Models\User::all()->except($invoice->user_id)->except(Auth::id()) as $user)
                                                <option value="{{$user->id}}" {{$isEdit ? ($invoice->shared->contains($user) ? 'selected': '') : ''}}>{{$user->name}}</option>    
                                            @endforeach

                                        @endif                                    

                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-info" type="submit">{{$isEdit ? "Update" : "Create"}}</button> 
                            <a href="{{route('invoices.index')}}" class="btn btn-secondary" role="button">My Invoices</a>
                        </div>               
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
