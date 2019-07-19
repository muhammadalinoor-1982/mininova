<div class="col-12 mb-15"><input name="service_name" type="text" class="form-control @error('service_name') is-invalid @enderror" value="{{old('service_name', isset($source)?$source->service_name:null)}}" placeholder="Service Name"></div>
@error('service_name')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-15"><input name="drags_name" type="text" class="form-control @error('drags_name') is-invalid @enderror" value="{{old('drags_name', isset($source)?$source->drags_name:null)}}" placeholder="Drags Name"></div>
@error('drags_name')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-15"><input name="medical_test" type="text" class="form-control @error('medical_test') is-invalid @enderror" value="{{old('medical_test', isset($source)?$source->medical_test:null)}}" placeholder="Medical Test"></div>
@error('medical_test')
<div class=" text-danger">{{ $message }}</div>
@enderror

@php
    if(old("status")){
        $status = old('status');
    }elseif (isset($source)){
        $status = $source->status;
    }else{
        $status = null;
    }
@endphp
<div class="adomx-checkbox-radio-group inline @error('status') is-invalid @enderror">
    <label class="adomx-radio"><input type="radio" @if($status=='active') checked @endif name="status" value="active" id="active"> <i class="icon"></i> Active</label>
    <label class="adomx-radio"><input type="radio" @if($status=='inactive') checked @endif name="status" value="inactive" id="inactive"> <i class="icon"></i> Inactive</label>
</div>
@error('status')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-15"></div>