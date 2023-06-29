{{ csrf_field() }}
<div class="row" style="margin: 0 !important;">

<div class="col-md-12">
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

<div class="col-md-12">
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


<div class="col-md-12">
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

<div class="col-md-12">
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

<div class="col-md-12">
    <div class="form-group">
        <label>@lang('site.phone')</label>
        <input type="tel" pattern="(01)[0-2]{1}[0-9]{8}" required
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
        <label for="exampleFormControlSelect1">@lang('site.brand_id')</label>
        <select class="form-control @error('brand_id') is-invalid @enderror" id="exampleFormControlSelect1" name="brand_id">
        <option value=""selected  disabled>@lang('site.brand_id')</option>
            @foreach ( App\Models\Brand::get() as $brand)
             <option {{ (isset($row) && $row->brand_id == $brand->id) ? 'selected style=color:red ': '' }} value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
        @error('brand_id')
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
    <img src="{{ isset($row) ? $row->image_path : asset('uploads/client/default.png') }}" style="width: 115px;height: 80px;position: relative;
                    top: 14px;" class="img-thumbnail image-preview">
</div>
</div>


