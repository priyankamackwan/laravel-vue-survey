@extends('backend.layouts.app')

<style>
    body:not(.layout-fixed) .main-sidebar{
        min-height: 180% !important;
    }
    .error{
        color:red !important;
    }
</style>
@section('contains')


<div class="card">
    <div class="card-header">
        User create
    </div>

    <div class="card-body">
        <form method="POST" id="user"  action="{{ route("admin.user.store") }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="required" for="first_name">{{ trans('cruds.user.fields.first_name') }}</label>
                        <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" onkeypress="return lettersOnly(event);"  name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                        @if($errors->has('first_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('first_name') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="required" for="last_name">{{ trans('cruds.user.fields.last_name') }}</label>
                        <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" onkeypress="return lettersOnly(event);" name="last_name" id="last_name" value="{{ old('last_name', '') }}" required>
                        @if($errors->has('last_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('last_name') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                        <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country_code">{{ trans('cruds.user.fields.country_code') }}</label>
                        <input class="form-control {{ $errors->has('country_code') ? 'is-invalid' : '' }}" type="text" onkeypress="return NumberOnly(event);" name="country_code" id="country_code" value="{{ old('country_code', '') }}">
                        @if($errors->has('country_code'))
                            <div class="invalid-feedback">
                                {{ $errors->first('country_code') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone_no">{{ trans('cruds.user.fields.phone_no') }}</label>
                        <input class="form-control {{ $errors->has('phone_no') ? 'is-invalid' : '' }}" type="text" name="phone_no" onkeypress="return NumberOnly(event);" id="phone_no" value="{{ old('phone_no', '') }}">
                        @if($errors->has('phone_no'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone_no') }}
                            </div>
                        @endif
                    
                    </div>
                </div>
            </div><hr>

           
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address_1">{{ trans('cruds.user.fields.address_1') }}</label>
                        <input class="form-control {{ $errors->has('address_1') ? 'is-invalid' : '' }}" type="text" name="address_1" id="address_1" value="{{ old('address_1', '') }}">
                        @if($errors->has('address_1'))
                            <div class="invalid-feedback">
                                {{ $errors->first('address_1') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address_2">{{ trans('cruds.user.fields.address_2') }}</label>
                        <input class="form-control {{ $errors->has('address_2') ? 'is-invalid' : '' }}" type="text" name="address_2" id="address_2" value="{{ old('address_2', '') }}">
                        @if($errors->has('address_2'))
                            <div class="invalid-feedback">
                                {{ $errors->first('address_2') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="city">{{ trans('cruds.user.fields.city') }}</label>
                        <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                        @if($errors->has('city'))
                            <div class="invalid-feedback">
                                {{ $errors->first('city') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="state">{{ trans('cruds.user.fields.state') }}</label>
                        <input class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}" type="text" name="state" id="state" value="{{ old('state', '') }}">
                        @if($errors->has('state'))
                            <div class="invalid-feedback">
                                {{ $errors->first('state') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="country">{{ trans('cruds.user.fields.country') }}</label>
                        <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}">
                        @if($errors->has('country'))
                            <div class="invalid-feedback">
                                {{ $errors->first('country') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="zip_code">{{ trans('cruds.user.fields.zip_code') }}</label>
                        <input class="form-control {{ $errors->has('zip_code') ? 'is-invalid' : '' }}" type="text" name="zip_code" onkeypress="return NumberOnly(event);" id="zip_code" value="{{ old('zip_code', '') }}">
                        @if($errors->has('zip_code'))
                            <div class="invalid-feedback">
                                {{ $errors->first('zip_code') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
            </div><hr>
                        
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="experience">{{ trans('cruds.user.fields.experience') }}</label>
                        <input class="form-control {{ $errors->has('experience') ? 'is-invalid' : '' }}" type="text" name="experience" onkeypress="return NumberOnly(event);" id="experience" value="{{ old('experience', '') }}">
                        @if($errors->has('experience'))
                            <div class="invalid-feedback">
                                {{ $errors->first('experience') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="skills">{{ trans('cruds.user.fields.skills') }}</label>
                        <input class="form-control {{ $errors->has('skills') ? 'is-invalid' : '' }}" type="text" name="skills" id="skills" value="{{ old('skills', '') }}">
                        @if($errors->has('skills'))
                            <div class="invalid-feedback">
                                {{ $errors->first('skills') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="education">{{ trans('cruds.user.fields.education') }}</label>
                        <input class="form-control {{ $errors->has('education') ? 'is-invalid' : '' }}" type="text" name="education" id="education" value="{{ old('education', '') }}">
                        @if($errors->has('education'))
                            <div class="invalid-feedback">
                                {{ $errors->first('education') }}
                            </div>
                        @endif
                        
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="designation">{{ trans('cruds.user.fields.designation') }}</label>
                <textarea class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}" type="text" name="designation" id="designation" value="{{ old('designation', '') }}"></textarea>
                @if($errors->has('designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('designation') }}
                    </div>
                @endif
                
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.user.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" type="text" name="notes" id="notes" value="{{ old('notes', '') }}"></textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                
            </div>

            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="col-md-6">
                        <img id="blah2" src="{{ asset('/images/default_profile.png')}}" alt="your image"  style="height: auto;width: 60%;"/>

                    </div>
                </div>
            </div>

              <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                            <label class="small mb-1" for="profile_image">Profile Upload<span class="text-danger">*</span></label>
                            <input class="form-control cls" accept="image/*" id="profile_image" type="file" name="profile_image" placeholder="Enter profile_image">
                        @if ($errors->has('profile_image'))
                            <span class="text-danger">{{ $errors->first('profile_image') }}</span>
                        @endif
                    </div>
                        
                    </div>
                </div>
               
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
        
    $(document).ready(function() {
           
            $("#user").validate({
                rules: {
                    first_name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    },
                    email: {
                        required: true
                    }
                },
                messages: {
                    first_name: {
                        required: "The first name is required"
                    },
                    last_name: {
                        required: "The last name is required"
                    },
                    email: {
                        required: "The email address is required"
                    }
                }           
                
            })  

          
    });

   

</script>