{{ csrf_field() }}
<div class="row" style="margin: 0 !important;">

<div class="col-md-6">
    <div class="form-group">
        <label>@lang('site.name')</label>
        <input type="name" class="form-control  @error('name') is-invalid @enderror" name="name"
            value="{{ isset($row) ? $row->name : old('name') }}">
        @error('name')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>@lang('site.email')</label>
        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
            value="{{ isset($row) ? $row->email : old('email') }}">
        @error('email')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
    </div>
</div>


<div class="col-md-6">
    <div class="form-group">
        <label>@lang('site.password')</label>
        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" value="">
        @error('password')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>@lang('site.password_confirmation')</label>
        <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror"
            name="password_confirmation" value="">
        @error('password_confirmation')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>@lang('site.phone')</label>
        <input type="tel"
            class="form-control  @error('phone') is-invalid @enderror" name="phone" value="{{ isset($row) ? $row->phone : old('phone') }}">
        @error('phone')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
    </div>
</div>

 <div class="col-md-6">
    <div class="form-group">
        <label>@lang('site.address')</label>
        {{-- <textarea name="address"id="" cols="10" rows="5">{{ isset($row) ? $row->address : old('address') }}</textarea> --}}
        <input type="text" class="form-control  @error('address') is-invalid @enderror" name="address"
        value="{{ isset($row) ? $row->address : old('address') }}">
        @error('address')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleFormControlSelect1">@lang('site.country_id')</label>
        <select class="form-control @error('country_id') is-invalid @enderror" id="exampleFormControlSelect1" name="country_id">
        <option value=""selected  disabled>@lang('site.choose_country_id')</option>
            @foreach ( App\Models\Country::get() as $country)
             <option {{ (isset($row) && $row->country_id == $country->id) ? 'selected style=color:red ': '' }} value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
        </select>
        @error('country_id')
        <small class=" text text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </small>
        @enderror
      </div>

</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="exampleFormControlSelect1">@lang('site.category_id')</label>
        <select class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlSelect1" name="category_id">
        <option value=""selected  disabled>@lang('site.choose_category_id')</option>
            @foreach ( App\Models\Category::get() as $category)
             <option {{ (isset($row) && $row->category_id == $category->id) ? 'selected style=color:red ': '' }} value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category_id')
        <small class=" text text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </small>
        @enderror
      </div>

</div>


<div class="col-md-6">
    <div class="form-group">
        <label for="exampleFormControlSelect1">@lang('site.verified_email')</label>
        <select class="form-control @error('verified_email') is-invalid @enderror" id="exampleFormControlSelect1" name="verified_email">


            <option {{ (isset($row) && $row->verified_email == true) ? 'selected style=color:red ': '' }} value="1" >
                @lang('site.true')
            </option>
            <option {{ (isset($row) && $row->verified_email == false) ? 'selected style=color:red ': '' }} value="0" >
                @lang('site.false')
            </option>

        </select>
        @error('verified_email')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
        </div>

</div>



{{-- <input type="hidden" name="user_type" value="App\User"> --}}

{{-- <div class="col-md-6">
    <div class="form-group">
        @foreach (App\Role::get() as $role)
            <input type="checkbox" id="{{ $role->name }}"
                {{ isset($row->roles[0]) && $row->roles[0]->id == $role->id ? 'checked' : '' }} name="role_id[]"
                value="{{ $role->id }}">
            <label for="{{ $role->name }}">{{ $role->name }}</label><br>
        @endforeach


        @error('role_id')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
    </div>
</div> --}}

<div class="col-md-3">
    <div class="form-group">
        <label>@lang('site.image')</label>
        <input type="file" name="avatar" class="form-control image @error('avatar') is-invalid @enderror">
        @error('avatar')
            <small class=" text text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </small>
        @enderror
    </div>
</div>

<div class="form-group col-md-3">
    <img src="{{ isset($row) ? $row->image_path : asset('uploads/employee/default.png') }}" style="width: 115px;height: 80px;position: relative;
                    top: 14px;" class="img-thumbnail image-preview">
</div>
</div>


