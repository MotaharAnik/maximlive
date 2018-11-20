@extends('layouts.dashboard')
{{--@section('page_heading', trans('others.add_party_label'))--}}
@section('page_heading', 'Update Supplier')
@section('section')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group ">
                <a href="{{ URL::previous() }}" class="btn btn-primary " style="width: 100%; margin: 10px 0px 5px 0px;">
                <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                      <li><span>{{ $error }}</span></li>
                    @endforeach
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Update Supplier</div>
                <div class="panel-body">               
                    <form class="form-horizontal" action="{{ Route('supplier_update_action') }}/{{$supplier->supplier_id}}" role="form" method="POST" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">                     
                        <div class="row">
                            <div style="" class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 control-label">Supplier Name</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" class="form-control  input_required" name="name" value="{{ $supplier->name }}">
                                    </div>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-4 col-sm-4 control-label">Contact</label>--}}
                                    {{--<div class="col-md-6 col-sm-6">--}}
                                        {{--<input type="text" class="form-control  input_required" name="phone" value="{{ $supplier->phone }}">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 control-label">Person Name</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" class="form-control  input_required" name="person_name" value="{{ $supplier->person_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 control-label">Email</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" class="form-control  input_required" name="email" value="{{ $supplier->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 control-label">Address</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" class="form-control  input_required" name="address" value="{{ $supplier->address }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-4 col-sm-4 control-label">{{ trans('others.header_status_label') }}</label>
                                  <div class="col-md-6 col-sm-6">
                                      <select class="form-control" id="sel1" name="status">
                                          @if($supplier->status == 1)
                                            <option value="1">Active</option>
                                              <option value="0">Inactive</option>
                                          @else
                                            <option value="0">Inactive</option>
                                              <option value="1">Active</option>
                                          @endif
                                      </select>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 col-sm-offset-5 col-xs-offset-8">
                                <button type="submit" class="btn btn-primary form-control" style="margin-right: 15px;">
                                    {{ trans('others.save_button') }}
                                </button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".selections").select2();
</script>
@endsection