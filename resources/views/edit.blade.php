<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit E-Learning</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <section>
            <div class="container">
                <div class="col-12">
                    <h1 class="text-center">Edit E-Learning</h1>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Course Name</label>
                    <select class="form-control" id="" name="course">
                        @foreach ($getCourse as $k)
                        <option value="{{ $k->id }}"{{ $data->course_id == $k->id ? 'selected' : '' }}>{{ $k->coursename }}</option>
                            {{-- <option value="{{ $k->id }}">{{ $k->coursename }}</option> --}}
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="">Assignment Name</label>
                    <select class="form-control" id="" name="assign">
                        @foreach ($getAssign as $k)
                            <option value="{{ $k->id }}"{{ $data->assignment_id == $k->id ? 'selected' : '' }}>{{ $k->assign_name }}</option>
                            {{-- <option value="{{ $dataKategori->id }}" {{ $data->id_kategori == $dataKategori->id ? 'selected' : '' }}>{{ $dataKategori->kategori }} </option> --}}
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-3">submit</button>
                </form>    
            </div>
        </section>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
    </body>
</html>