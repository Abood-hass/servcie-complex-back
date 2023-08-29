<div class="card-body card-block">

    <div class="row form-group mt-2">
        {{-- Category English Name --}}
        <div class="col col-xl-6 col-12">
            <label for="text-input" class=" form-control-label">Category English Name</label>
            <input type="text" value="{{ old('category-name-en', $category->name_en) }}" name="category-name-en"
                placeholder="Category English Name" class="form-control @error('category-name-en') is-invalid @enderror">
            @error('category-name-en')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        {{-- Category Arabic Name --}}
        <div class="col col-xl-6 col-12">
            <label for="text-input" class=" form-control-label">Category Arabic Name</label>
            <input type="text" value="{{ old('category-name-ar', $category->name_ar) }}" name="category-name-ar"
                placeholder="Category Arabic Name" class="form-control @error('category-name-ar') is-invalid @enderror">
            @error('category-name-ar')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>


    {{-- Category English Description --}}
    <div class="row form-group mt-2">
        <div class="col col-xl-6 col-12">
            <label for="text-input" class=" form-control-label">Category English Description</label>

            <textarea rows="4" type="text" name="category-description-en"
                class="form-control px-2 @error('category-description-en') is-invalid @enderror">{{ old('category-description-en', $category->description_en) }}</textarea>
            @error('category-description-en')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>



        {{-- Category Arabic Description --}}
        <div class="col col-xl-6 col-12 mt-2">
            <label for="text-input" class="form-control-label">Category Arabic Description</label>

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
            <label for="selectSm" class=" form-control-label">Select Category Parent</label>
        </div>
        <div class="col-12 col-md-9" bis_skin_checked="1">
            <select name="category-parent_id" id="SelectLm" class="form-control-sm form-control">
                <option value="" selected>No Parent</option>
                @foreach ($parent_categories as $item)
                    <option class="text-capitalize" value="{{ $item->id }}"
                        @if (old('category-parent_id', $category->parent_id) == $item->id) selected @endif>
                        {{ $item->name_en . '  |  ' . $item->name_ar }}
                    </option>
                @endforeach
            </select>
            <small class="form-text text-muted">
                This Category will a main Category if you didn't select any Parent.
            </small>
        </div>


        {{-- Category Icon --}}
        <div class="col col-md-3 mt-2">
            <label for="text-input" class=" form-control-label">Category Icon</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" value="{{ $category->icon ?? old('category-icon') }}" name="category-icon"
                placeholder="Category Icon" class="form-control @error('category-icon') is-invalid @enderror ">
            @error('category-icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <small class="form-text text-muted">Copy the Icon of
                <a target="_blank" href="https://fontawesome.com/search?o=r&m=free">Font Awsome
                    Website</a>.</small>
        </div>


        {{-- Category Image --}}
        <div class="col col-md-3 mt-2">
            <label for="text-input" class="form-control-label">Category Image</label>
        </div>
        <div class="col-12 col-md-9">
            <label for="category-image" style="user-select: none;"
                class="@error('category-image') is-invalid @enderror form-control">
                <div class="position-relative d-inline">
                    <i class="fas fa-image pr-3" style="font-size: 20px"></i>
                    <i class="fas fa-plus pr-3 position-absolute"
                        style="font-size: 10px; right:0; bottom: 0px; color: green; transform: translate(20%,20%)"></i>
                </div>
                Select an Image
                <input type="file" accept=".png, .jpg, .svg" id="category-image" name="category-image"
                    style="width: 0;height: 0;">
            </label>
            @error('category-image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        @if ($category->image)
            <div class="col-12 mt-3">
                <label for="text-input" class=" form-control-label">Previous Image of the category:</label>
                <img class="border border-dark mt-2" src="{{ asset($category->image->path) }}"
                    alt="{{ $category->name }}">
            </div>
        @endif
    </div>

</div>
