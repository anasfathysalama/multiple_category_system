<div class="row justify-content-center" style="margin-top :30px">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                Create Category
            </div>

            <div class="card-body">
                <form action="" id="category-form" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="category_name">Category Name:</label>
                        <input type="text" class="form-control" id="category_name" placeholder="Enter category name"
                               name="name">
                        <small class="text-danger" id="name_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Parent Category:</label>
                        <select class="form-control" id="parent_id" name="parent_id">
                            <option value="">Select a category</option>
                            @foreach($parentCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger" id="parent_id_error"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
