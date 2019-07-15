<div class="col-12 mb-20"><input class="form-control @error('staff_name') is-invalid @enderror" name="staff_name" type="text" value="{{old('staff_name', isset($registration)?$registration->staff_name:null)}}" placeholder="Full Name"></div>
@error('staff_name')
<div class=" text-danger">{{ $message }}</div>
@enderror
<div class="col-12 mb-20"><input class="form-control @error('staff_email') is-invalid @enderror" name="staff_email" type="email" value="{{old('staff_email', isset($registration)?$registration->staff_email:null)}}" placeholder="Email"></div>
@error('staff_email')
<div class=" text-danger">{{ $message }}</div>
@enderror
<div class="col-12 mb-20"><input class="form-control @error('staff_phone') is-invalid @enderror" name="staff_phone" type="text" value="{{old('staff_phone', isset($registration)?$registration->staff_phone:null)}}" placeholder="Phone"></div>
@error('staff_phone')
<div class=" text-danger">{{ $message }}</div>
@enderror

@php
    if(old("staff_gender")){
        $staff_gender = old('staff_gender');
    }elseif (isset($registration)){
        $staff_gender = $registration->staff_gender;
    }else{
        $staff_gender = null;
    }
@endphp
<div class="adomx-checkbox-radio-group inline @error('staff_gender') is-invalid @enderror">
    <label class="adomx-radio"><input type="radio" @if($staff_gender=='male') checked @endif name="staff_gender" value="male" id="male"> <i class="icon"></i> Male</label>
    <label class="adomx-radio"><input type="radio" @if($staff_gender=='female') checked @endif name="staff_gender" value="female" id="female"> <i class="icon"></i> Female</label>
</div>
@error('staff_gender')
<div class=" text-danger">{{ $message }}</div>
@enderror

@if(isset($registration) && $registration->staff_image !=null)
    <img src="{{asset($registration->staff_image)}}" alt="">
@endif
<div class="col-12 mb-20"><input class="form-control @error('staff_image') is-invalid @enderror" name="staff_image" type="file" placeholder="Image"></div>
@error('staff_image')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('staff_password') is-invalid @enderror" name="staff_password" type="password" value="{{old('staff_password', isset($registration)?$registration->staff_password:null)}}" placeholder="Password"></div>
@error('staff_password')
<div class=" text-danger">{{ $message }}</div>
@enderror

@php
    if(old("staff_status")){
        $staff_status = old('staff_status');
    }elseif (isset($registration)){
        $staff_status = $registration->staff_status;
    }else{
        $staff_status = null;
    }
@endphp
<div class="adomx-checkbox-radio-group inline @error('staff_status') is-invalid @enderror">
    <label class="adomx-radio"><input type="radio" @if($staff_status=='supervisor') checked @endif name="staff_status" value="supervisor" id="supervisor"> <i class="icon"></i> Supervisor</label>
    <label class="adomx-radio"><input type="radio" @if($staff_status=='nurse') checked @endif name="staff_status" value="nurse" id="nurse"> <i class="icon"></i> Nurse</label>
    <label class="adomx-radio"><input type="radio" @if($staff_status=='operator') checked @endif name="staff_status" value="operator" id="operator"> <i class="icon"></i> Operator</label>
</div>
@error('staff_status')
<div class=" text-danger">{{ $message }}</div>
@enderror