<form method="POST" action="{{URL::route("post_create")}}">
    {{csrf_field()}}
    <div class="form-group">
        <label for="input_name">Name</label>
        <input class="form-control" id="input_name" type="text" placeholder="Name" name="name" value="{{$formData["name"]??''}}"/>
        @if($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
        @endif
    </div>

    <div class="form-group">
        <label for="short_description">Short Description</label>
        <textarea name="short_description" id="short_description" rows="4" maxlength="400" class="form-control">{{$formData["short_description"]??''}}</textarea>
    </div>

    <div class="form-group">
        <label for="summernote">Content</label>
        <textarea id="summernote" class="form-control" name="post_content">{{$formData["post_content"]??''}}</textarea>
        @if($errors->has('post_content'))
            <div class="error">{{ $errors->first('post_content') }}</div>
        @endif
    </div>

    <div class="form-group">
        <label for="categories_ids">Categories</label>
        <select name="categories_ids[]" id="categories_ids" multiple class="form-control">
            @foreach($categories as $category)
                <option value="{{$category->id}}" {{ in_array($category->id, $formData["categories_ids"]??[]) ? "selected" :""}}>{{$category->title}}</option>
            @endforeach
        </select>
        @if($errors->has('categories_ids'))
            <div class="error">{{ $errors->first('categories_ids') }}</div>
        @endif
    </div>

    <div class="form-group">
        <label for="hashtags">Hashtags</label>
        <select name="hashtag_ids[]" id="hashtags" class="form-control" multiple>
            @foreach($hashtags as $hashtag)
                <option value="{{$hashtag->id}}" {{in_array( $hashtag->id,$formData["hashtag_ids"]??[]) ? "selected" :""}}>{{$hashtag->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input id="image" class="form-control-file" type="file" name="image" value="{{$formData["image"]??''}}"/>
    </div>


    <div class="form-group">
        <label for="banner_image">Banner Image</label>
        <input type="file" id="banner_image" class="form-control-file" name="banner_image" value="{{$formData["banner_image"]??''}}"/>
    </div>

    <div class="form-group">
        <label for="url_key">URL Post</label>
        <input type="text" id = "url_key" class="form-control" name="url_key" value="{{$formData["url_key"]??''}}"/>
        @if($errors->has('url_key'))
            <div class="error">{{ $errors->first('url_key') }}</div>
        @endif
    </div>

    <div class="form-group">
        <label for="publish_date">Publish Date</label>
        <input type="date" id="publish_date" class="form-control" name="publish_date" value="{{$formData["publish_date"]??''}}">
        @if($errors->has('publish_date'))
            <div class="error">{{ $errors->first('publish_date') }}</div>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>

</form>