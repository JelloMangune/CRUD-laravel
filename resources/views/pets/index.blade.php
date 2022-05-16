<!doctype html>
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>
    <title>Pets</title>
    </head>
    <body>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p style="text-align:center;">{{ $message }}</p>
            </div>
        @endif
        <div style="padding:20px;margin-left:140px">
            <a class="btn btn-success" href="{{ route('pets.create') }}">Insert New Pets</a>
            <a class="btn btn-secondary" href="{{url('show-all');}}">View All Pets</a>
        </div>
        <div class="container">
                <table class="display" id="pets-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pet Name</th>
                        <th>Pet Type</th>
                        <th>Owner</th>
                        <th>Owner Address</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pets as $pet)
                    <tr>
                        <td>{{ $pet->id }}</td>
                        <td>{{ $pet->name }}</td>
                        <td>{{ $pet->type }}</td>
                        <td>{{ $pet->owner }}</td>
                        <td>{{ $pet->owner_address }}</td>
                        <td>
                            <form action="{{ route('pets.destroy',$pet->id) }}" method="POST">
                            <a type="button" class="btn btn-secondary" href="{{route('pets.show', $pet->id)}}">View</a>
                            <a type="button" class="btn btn-primary" href="{{route('pets.edit', $pet->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete Pet #{{$pet->id}}?')">Delete</button>
                            </form>
                        </td>
                    </tr>                        
                    @endforeach
                </tbody>         
                </table>
        </div>
        <script>
            $(document).ready( function () {
                 $('#pets-table').DataTable();
            } );
        </script>

        
</html>