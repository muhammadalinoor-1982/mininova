<div class="col-12 mb-20"><input class="form-control @error('doctor_email') is-invalid @enderror" name="doctor_email" type="email" value="{{old('doctor_email', isset($doctor)?$doctor->doctor_email:null)}}" placeholder="Email"></div>
@error('doctor_email')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_phone') is-invalid @enderror" name="doctor_phone" type="text" value="{{old('doctor_phone', isset($doctor)?$doctor->doctor_phone:null)}}" placeholder="Phone"></div>
@error('doctor_phone')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_facebook') is-invalid @enderror" name="doctor_facebook" type="text" value="{{old('doctor_facebook', isset($doctor)?$doctor->doctor_facebook:null)}}" placeholder="Facebook"></div>
@error('doctor_facebook')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_twitter') is-invalid @enderror" name="doctor_twitter" type="text" value="{{old('doctor_twitter', isset($doctor)?$doctor->doctor_twitter:null)}}" placeholder="Twitter"></div>
@error('doctor_twitter')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_instagram') is-invalid @enderror" name="doctor_instagram" type="text" value="{{old('doctor_instagram', isset($doctor)?$doctor->doctor_instagram:null)}}" placeholder="Instagram"></div>
@error('doctor_instagram')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_youtube') is-invalid @enderror" name="doctor_youtube" type="text" value="{{old('doctor_youtube', isset($doctor)?$doctor->doctor_youtube:null)}}" placeholder="Youtube"></div>
@error('doctor_youtube')
<div class=" text-danger">{{ $message }}</div>
@enderror

@if(isset($doctor) && $doctor->doctor_image !=null)
    <img src="{{asset($doctor->doctor_image)}}" alt="">
@endif
<div class="col-12 mb-20"><input class="form-control @error('doctor_image') is-invalid @enderror" name="doctor_image" type="file" placeholder="Image"></div>
@error('doctor_image')
<div class=" text-danger">{{ $message }}</div>
@enderror

@php
    if(old("doctor_status")){
        $doctor_status = old('doctor_status');
    }elseif (isset($doctor)){
        $doctor_status = $doctor->doctor_status;
    }else{
        $doctor_status = null;
    }
@endphp
<div class="adomx-checkbox-radio-group inline @error('doctor_status') is-invalid @enderror">
    <label class="adomx-radio"><input type="radio" @if($doctor_status=='active') checked @endif name="$doctor_status" value="active" id="active"> <i class="icon"></i> Active</label>
    <label class="adomx-radio"><input type="radio" @if($doctor_status=='inactive') checked @endif name="$doctor_status" value="inactive" id="inactive"> <i class="icon"></i> Inactive</label>
</div>
@error('$doctor_status')
<div class=" text-danger">{{ $message }}</div>
@enderror

