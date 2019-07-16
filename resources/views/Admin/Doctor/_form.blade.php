<div class="col-12 mb-20"><input class="form-control @error('doctor_name') is-invalid @enderror" name="doctor_name" type="text" value="{{old('doctor_name', isset($doctor)?$doctor->doctor_name:null)}}" placeholder="Full Name"></div>
@error('doctor_name')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_password') is-invalid @enderror" name="doctor_password" type="password" value="{{old('doctor_password', isset($doctor)?$doctor->doctor_password:null)}}" placeholder="Password"></div>
@error('doctor_password')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_degree') is-invalid @enderror" name="doctor_degree" type="text" value="{{old('doctor_degree', isset($doctor)?$doctor->doctor_degree:null)}}" placeholder="Degree"></div>
@error('doctor_degree')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_speciality') is-invalid @enderror" name="doctor_speciality" type="text" value="{{old('doctor_speciality', isset($doctor)?$doctor->doctor_speciality:null)}}" placeholder="Speciality"></div>
@error('doctor_speciality')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_fellowship') is-invalid @enderror" name="doctor_fellowship" type="text" value="{{old('doctor_fellowship', isset($doctor)?$doctor->doctor_fellowship:null)}}" placeholder="Fellowship"></div>
@error('doctor_fellowship')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_year_of_experience') is-invalid @enderror" name="doctor_year_of_experience" type="text" value="{{old('doctor_year_of_experience', isset($doctor)?$doctor->doctor_year_of_experience:null)}}" placeholder="Year of Experience"></div>
@error('doctor_year_of_experience')
<div class=" text-danger">{{ $message }}</div>
@enderror

<div class="col-12 mb-20"><input class="form-control @error('doctor_position') is-invalid @enderror" name="doctor_position" type="text" value="{{old('doctor_position', isset($doctor)?$doctor->doctor_position:null)}}" placeholder="Position"></div>
@error('doctor_position')
<div class=" text-danger">{{ $message }}</div>
@enderror



