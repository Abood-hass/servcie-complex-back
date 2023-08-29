<div class="card-body card-block">

    {{-- Category English Name --}}
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="text-input" class=" form-control-label">Category English Name</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" value="{{ old('category-name-en') }}" name="category-name-en"
                placeholder="Category English Name"
                class="form-control @error('category-name-en') is-invalid @enderror ">
            @error('category-name-en')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    {{-- Category Arabic Name --}}
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="text-input" class=" form-control-label">Category Arabic Name</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" value="{{ old('category-name-ar') }}" name="category-name-ar"
                placeholder="Category Arabic Name"
                class="form-control @error('category-name-ar') is-invalid @enderror ">
            @error('category-name-ar')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    {{-- Select Category Parent --}}
    <div class="row form-group" bis_skin_checked="1">
        <div class="col col-md-3" bis_skin_checked="1">
            <label for="selectSm" class=" form-control-label">Select Category Parent</label>
        </div>
        <div class="col-12 col-md-9" bis_skin_checked="1">
            <select name="category-parent_id" id="SelectLm" class="form-control-sm form-control">
                <option value="" selected>No Parent</option>
                @foreach ($parent_categories as $item)
                    <option class="text-capitalize" value="{{ $item->id }}">
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
            <small class="form-text text-muted">
                This Category will a main Category if you didn't select any Parent.
            </small>
        </div>
    </div>


    {{-- Category English Description --}}
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="text-input" class=" form-control-label">Category English Description</label>
        </div>
        <div class="col-12 col-md-9">
            <textarea type="text" name="category-description-en"
                class="form-control px-2 @error('category-description-en') is-invalid @enderror ">{{ old('category-description-en') }}</textarea>
            @error('category-description-en')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    {{-- Category Description --}}
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="text-input" class="form-control-label">Category Arabic Description</label>
        </div>
        <div class="col-12 col-md-9">
            <textarea type="text" name="category-description-ar"
                class="form-control px-2 @error('category-description-ar') is-invalid @enderror ">{{ old('category-description-ar') }}</textarea>
            @error('category-description-ar')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    {{-- Category Icon --}}
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="text-input" class=" form-control-label">Category Icon</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" value="{{ old('category-icon') }}" name="category-icon" placeholder="Category Icon"
                class="form-control @error('category-icon') is-invalid @enderror ">
            @error('category-icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <small class="form-text text-muted">Copy the Icon of
                <a target="_blank" href="https://fontawesome.com/search?o=r&m=free">Font Awsome
                    Website</a>.</small>
        </div>

    </div>

    {{-- Category Image --}}
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="text-input" class=" form-control-label">Category Image</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="file" accept=".png, .jpg, .svg" name="category-image"
                class="@error('category-image') is-invalid @enderror ">
            @error('category-image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
