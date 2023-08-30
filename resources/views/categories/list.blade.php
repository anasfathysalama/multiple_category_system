<div>
    @foreach($parentCategories as $category)
        <div class="main-div">
            <input type="checkbox" data-category_id="{{$category->id}}" class="category-check" name="category"> {{$category->name}}
        </div>
    @endforeach
</div>
