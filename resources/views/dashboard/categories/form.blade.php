{{ csrf_field() }}


    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('category.cat_ar')</label>
            <input type="text" class="form-control @error( 'name_ar') is-invalid
        @enderror " name="name_ar"
                value="{{ isset($row) ?$row->getTranslation('name','ar')  : old('name_ar') }}">

            @error('name_ar')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>




    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('category.cat_en')</label>
            <input type="text" class="form-control @error( 'name_en') is-invalid
        @enderror " name="name_en"
                value="{{ isset($row) ? $row->getTranslation('name','en')  : old('name_en') }}">

            @error('name_en')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>


   



