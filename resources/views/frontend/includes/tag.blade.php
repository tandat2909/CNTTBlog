
    <h4 class="c_head">Tags</h4>
    <ul class="list-unstyled w_tag_list style-light">
        @foreach($hashtags ?? [] as $tag)
        <li><a href="#">{{ $tag->title }}</a></li>
        @endforeach
    </ul>

