
<h4 class="c_head">Categories</h4>
<ul class="list-unstyled w_tag_list style-light">
    <?php
        $categories = $post->Categorys ?? $categories;
    ?>
    @foreach($categories ?? [] as $category)
    <li><a href="{{URL::route('catalog_posts',['category_url_rewrite'=>$category->url_rewrite ])}}">{{ $category->title }}</a></li>
    @endforeach
</ul>

