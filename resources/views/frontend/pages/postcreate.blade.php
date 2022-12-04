@extends('frontend.layouts.default')


@section('title')
    Create Post
@endsection


@section('body.wrapper.content')


<section class="forum_sidebar_area" id="sticky_doc">
    <div class="container">
        <div class="row">
            <div class="col-12">
               @include('frontend.includes.formPost')
            </div>

        </div>

    </div>

</section>
@endsection
@section('footer.scripts')
    @parent
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $("#summernote").summernote();
    </script>
@endsection
