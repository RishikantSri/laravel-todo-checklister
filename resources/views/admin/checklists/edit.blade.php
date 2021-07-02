@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">


            <div class="card-body">
                <div class="card">
                     @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form action="{{ route('admin.checklist_groups.checklists.update', [$checklistGroup, $checklist])}}" method="POST">

                        @csrf  
                        @method('PUT')
                    <div class="card-header">{{ __('Edit Checklist ') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input value="{{$checklist->name}}" class="form-control" name="name" type="text"
                                        >
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">{{ __('Save Checklist') }}</button>
                    </div>
                    </form>
                </div>
                <form action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist])}}" method="POST">

                        @csrf  
                        @method('DELETE')
                                        
                        <button class="btn btn-sm btn-danger" onclick="return confirm(' {{ __('Are you sure to delete this Checklist ?' ) }}' )" type="submit">{{ __('Delete this checklist ') }}</button>
                    
                </form>
                <br>
                <div class="card">
                    <div class="card-header"><h3>{{ __(' List of Tasks') }}</h3></div>
                     @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form action="{{ route('admin.checklists.tasks.store', [$checklist])}}" method="POST">

                        @csrf  
                        
                    <div class="card-header">{{ __('Add New Task') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input value="" class="form-control" name="name" type="text" placeholder="Enter tasks name"
                                        >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Description') }}</label>
                                    <textarea name="name" class="form-control" id="" cols="30" rows="6"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit">{{ __('Save Task') }}</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection