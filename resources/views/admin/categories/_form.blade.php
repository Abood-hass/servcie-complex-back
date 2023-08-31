<div class="card-body card-block lang-body">

    <div class="row form-group mt-2">
        {{-- Category English Name --}}
        <div class="col col-xl-6 col-12">
            <label for="text-input" class=" form-control-label">{{ __('adminPage.category-name-en') }}</label>
            <input type="text" value="{{ old('category-name-en', $category->name_en) }}" name="category-name-en"
                placeholder="{{ __('adminPage.category-name-en') }}"
                class="form-control @error('category-name-en') is-invalid @enderror">
            @error('category-name-en')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        {{-- Category Arabic Name --}}
        <div class="col col-xl-6 col-12">
            <label for="text-input" class=" form-control-label">{{ __('adminPage.category-name-ar') }}</label>
            <input type="text" value="{{ old('category-name-ar', $category->name_ar) }}" name="category-name-ar"
                placeholder="{{ __('adminPage.category-name-ar') }}"
                class="form-control @error('category-name-ar') is-invalid @enderror">
            @error('category-name-ar')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>


    {{-- Category English Description --}}
    <div class="row form-group mt-2">
        <div class="col col-xl-6 col-12">
            <label for="text-input" class=" form-control-label">{{ __('adminPage.category-description-en') }}</label>

            <textarea rows="4" type="text" name="category-description-en"
                class="form-control px-2 @error('category-description-en') is-invalid @enderror">{{ old('category-description-en', $category->description_en) }}</textarea>
            @error('category-description-en')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>



        {{-- Category Arabic Description --}}
        <div class="col col-xl-6 col-12 mt-2">
            <label for="text-input" class="form-control-label">{{ __('adminPage.category-description-ar') }}</label>

            <textarea rows="4" type="text" name="category-description-ar"
                class="form-control px-2 @error('category-description-ar') is-invalid @enderror">{{ old('category-description-ar', $category->description_ar) }}</textarea>
            @error('category-description-ar')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    {{-- Select Category Parent --}}
    <div class="row form-group mt-2" bis_skin_checked="1">
        <div class="col col-md-3" bis_skin_checked="1">
            <label for="selectSm" class=" form-control-label">{{ __('adminPage.category-parent_id') }}</label>
        </div>
        <div class="col-12 col-md-9" bis_skin_checked="1">
            <select name="category-parent_id" id="SelectLm" class="form-control-sm form-control">
                <option value="" selected>{{ __('adminPage.no-parent') }}</option>
                @foreach ($parent_categories as $item)
                    <option class="text-capitalize" value="{{ $item->id }}"
                        @if (old('category-parent_id', $category->parent_id) == $item->id) selected @endif>
                        {{ $item->name_en . '  |  ' . $item->name_ar }}
                    </option>
                @endforeach
            </select>
            <small class="form-text text-muted">
                {{ __('adminPage.select-parent-hint') }}
            </small>
        </div>


        {{-- Category Icon --}}
        <div class="col col-md-3 mt-2">
            <label for="text-input" class=" form-control-label">{{ __('adminPage.category-icon') }}</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" value="{{ $category->icon ?? old('category-icon') }}" name="category-icon"
                placeholder="{{ __('adminPage.category-icon') }}"
                class="form-control @error('category-icon') is-invalid @enderror ">
            @error('category-icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <small class="form-text text-muted">
                {{ __('adminPage.add-icon-hint') }}
                <a target="_blank" href="https://fontawesome.com/search?o=r&m=free">Font Awsome
                    Website</a>.</small>
        </div>


        {{-- Category Image --}}
        <div class="col col-md-3 mt-2">
            <label for="text-input" class="form-control-label">{{ __('adminPage.category-image') }}</label>
        </div>
        <div class="col-12 col-md-9">
            <label for="category-image" style="user-select: none;"
                class="@error('category-image') is-invalid @enderror form-control">
                <div class="position-relative d-inline">
                    <i class="fas fa-image pr-3" style="font-size: 20px"></i>
                    <i class="fas fa-plus pr-3 position-absolute"
                        style="font-size: 10px; right:0; bottom: 0px; color: green; transform: translate(20%,20%)"></i>
                </div>
                {{ __('adminPage.select-image') }}
                <input type="file" accept=".png, .jpg, .svg" id="category-image" name="category-image"
                    style="width: 0;height: 0;">
            </label>
            @error('category-image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        @if ($category->image)
            <div class="col-12 mt-3">
                <label for="text-input"
                    class=" form-control-label">{{ __('adminPage.previous-image-category') }}:</label>
                <img class="border border-dark mt-2" src="{{ asset($category->image->path) }}"
                    alt="{{ $category->name }}">
            </div>
        @endif
    </div>

</div>
