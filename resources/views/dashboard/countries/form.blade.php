{{ csrf_field() }}


    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('country.name_ar')</label>
            <input type="text" class="form-control @error( 'name_ar') is-invalid
        @enderror " name="name_ar"
                value="{{ isset($row) ?$row->getTranslation('name','ar')  : old('gggggg') }}">



            @error('name_ar')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>




    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('country.name_en')</label>
            <input type="text" class="form-control @error( 'name_en') is-invalid
        @enderror " name="name_en"
                value="{{ isset($row) ? $row->getTranslation('name','en')  : old('gggggg') }}">



            @error('name_en')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>


    
    <div class="col-md-3">
        <div class="form-group">
            <label>@lang('site.image')</label>
            <input type="file" name="image" class="form-control image @error('image') is-invalid @enderror">
            @error('image')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>
    
    <div class="form-group col-md-3">
        <img src="{{ isset($row) ? $row->logo_path : asset('uploads/country/default.png') }}" style="width: 115px;height: 80px;position: relative;
                        top: 14px;" class="img-thumbnail image-preview">
    </div>
    </div>


