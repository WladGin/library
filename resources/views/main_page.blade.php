@extends('layouts/app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <div class="card mt-5">
            <div class="card-header">
                <h5 class="text-center p-1">List of Books</h5>
                @include('book_list')
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(window).on('hashchange', function () {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page === Number.NaN || page <= 0) {
                    return false;
                } else {
                    getBooks(page);
                }
            }
        });

        $(document).ready(function () {
            $(document).on('click', '.pagination a', function (event) {
                event.preventDefault();

                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var page = $(this).attr('href').split('page=')[1];

                getBooks(page);
            });

        });

        function getBooks(page) {
            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    datatype: "html"
                }).done(function (data) {
                $("#tag_container").empty().html(data);
                location.hash = page;
            }).fail(function () {
                alert('No response from server');
            });
        }
    </script>
@endsection
