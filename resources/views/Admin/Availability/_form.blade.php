<div class="col-12 mb-15"><input name="doctors_id" type="text" class="form-control @error('doctors_id') is-invalid @enderror" value="{{old('doctors_id', isset($availability)?$availability->doctors_id:null)}}" placeholder="Doctors_id"></div>
@error('doctors_id')
<div class=" text-danger">{{ $message }}</div>
@enderror

@php
    if(old("availability_of_doctors")){
        $availability_of_doctors = old('availability_of_doctors');
    }elseif (isset($availability)){
        $availability_of_doctors = $availability->availability_of_doctors;
    }else{
        $availability_of_doctors = null;
    }
@endphp
<div class="adomx-checkbox-radio-group inline @error('availability_of_doctors') is-invalid @enderror">
    <label class="adomx-radio"><input type="radio" @if($availability_of_doctors=='is_in_leave') checked @endif name="availability_of_doctors" value="is_in_leave" id="is_in_leave"> <i class="icon"></i> Is in leave</label>
    <label class="adomx-radio"><input type="radio" @if($availability_of_doctors=='busy') checked @endif name="availability_of_doctors" value="busy" id="busy"> <i class="icon"></i> Busy</label>
    <label class="adomx-radio"><input type="radio" @if($availability_of_doctors=='meeting') checked @endif name="availability_of_doctors" value="meeting" id="meeting"> <i class="icon"></i> Meeting</label>
    <label class="adomx-radio"><input type="radio" @if($availability_of_doctors=='consulting') checked @endif name="availability_of_doctors" value="consulting" id="consulting"> <i class="icon"></i> Consulting</label>
    <label class="adomx-radio"><input type="radio" @if($availability_of_doctors=='surgery') checked @endif name="availability_of_doctors" value="surgery" id="surgery"> <i class="icon"></i> Surgery</label>
    <label class="adomx-radio"><input type="radio" @if($availability_of_doctors=='on_the_way') checked @endif name="availability_of_doctors" value="on_the_way" id="on_the_way"> <i class="icon"></i> On the way</label>
</div>
@error('availability_of_doctors')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-15"></div>