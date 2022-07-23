<div class="card-body" id="tag_container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Authors</th>
            <th>Publishing Houses</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)

            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
                <td>
                    @foreach($book->authors as $author)
                        {{ $author->first_name }} {{ $author->last_name }}
                    @endforeach
                </td>
                <td>
                    @foreach($book->publishingHouses as $publishingHouse)
                        {{ $publishingHouse->title }}
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="">
        {!! $books->render() !!}
    </div>

</div>
