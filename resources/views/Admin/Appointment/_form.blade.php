<div class="col-12 mb-15"><input name="appointment_name" type="text" class="form-control @error('appointment_name') is-invalid @enderror" value="{{old('appointment_name', isset($appointment)?$appointment->appointment_name:null)}}" placeholder="Appointment Name"></div>
@error('appointment_name')
<div class=" text-danger">{{ $message }}</div>
@enderror

@php
    if(old("status")){
        $status = old('status');
    }elseif (isset($appointment)){
        $status = $appointment->status;
    }else{
        $status = null;
    }
@endphp
<div class="adomx-checkbox-radio-group inline @error('status') is-invalid @enderror">
    <label class="adomx-radio"><input type="radio" @if($status=='complete') checked @endif name="status" value="complete" id="complete"> <i class="icon"></i> Complete</label>
    <label class="adomx-radio"><input type="radio" @if($status=='pending') checked @endif name="status" value="pending" id="pending"> <i class="icon"></i> Pending</label>
    <label class="adomx-radio"><input type="radio" @if($status=='postpone') checked @endif name="status" value="postpone" id="postpone"> <i class="icon"></i> Postpone</label>
    <label class="adomx-radio"><input type="radio" @if($status=='cancel') checked @endif name="status" value="cancel" id="cancel"> <i class="icon"></i> Cancel</label>
</div>
@error('status')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-15"></div>