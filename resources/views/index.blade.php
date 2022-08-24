<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Learning</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <section>
            <div class="container">
                <div class="col-12">
                    <h1 class="text-center">E-Learning</h1>
                </div>

                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                        <a href="{{ route('create') }}" class="btn btn-primary float-end mb-3">add</a>
                        <tr>
                            
                            <th>No.</th>
                            <th>Course Name</th>
                            <th>Assignment Name</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $k)
                        <tr>
                            <td><strong>{{ $loop->iteration }}.</strong></td>
                            <td>{{ $k->course->coursename }}</td>
                            <td>{{ $k->assign->assign_name }}</td>
                            {{-- <td>{{ $k->assignment_id }}</td> --}}
                            {{-- <td>{{ $k->course_id }}</td>
                            <td>{{ $k->assignment_id }}</td> --}}
                            
                                @if ($k->course_id == 0)
                                    <td>Courseid {{ $k->course_id }} tidak terdaftar</td>
                                @elseif ($k->assignment_id == 0)
                                    <td>Assignment {{ $k->assignment_id }} tidak terdaftar</td>
                                @else
                                    <td>Ready</td>
                                @endif
                                
                            <td>
                                <a href="{{ url('edit/'. $k->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url('delete/'.$k->id) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
        <script>
            //CSRF TOKEN PADA HEADER
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });

            $('document').ready(function () {
                setInterval(function () { getData()}, 10000); // panggil setiap 10 detik
            }); 


            function getData() {
                $.ajax({
                    url: "/",
                    type: "GET",
                    success: function () {
                        $("#myTable").html(response)
                    }
                });
            }
        </script>
    </body>
</html>
