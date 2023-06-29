{{ csrf_field() }}


    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('brand.name_ar')</label>
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
            <label>@lang('brand.name_en')</label>
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



    <div class="col-md-12">
        <div class="form-group">
            <label >@lang('site.description')</label>
            <textarea   name="description_ar" @error('description_ar') is-invalid
            @enderror id="" cols="185" rows="5">{{ isset($row) ? $row->getTranslation('description','ar')  : old('gggggg') }}</textarea>




            @error('description_ar')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>




    <div class="col-md-12">
        <div class="form-group">
            <label >@lang('site.description')</label>
            <textarea cols="185" rows="5" name="description_en" @error( 'description_en') is-invalid
            @enderror >{{ isset($row) ? $row->getTranslation('description','en')  : old('gggggg') }}</textarea>




            @error('description_en')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>

    {{-- <div class="col-md-12">
        <div class="form-group">
            <label for="exampleFormControlSelect1">@lang('site.description')</label>
            <textarea  class="form-control ckeditor" id="description" placeholder="description" name="description">
                 {{ isset($row) ? $row->description : old('description') }}
            </textarea>
            @error('description')
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
    <img src="{{ isset($row) ? $row->image_path : asset('uploads/brand/default.png') }}" style="width: 115px;height: 80px;position: relative;
                    top: 14px;" class="img-thumbnail image-preview">
</div>
</div>

