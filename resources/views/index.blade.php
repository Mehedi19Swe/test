<html>
<head>
    <title> Laravel Crud Operation </title>
    <link rel="stylesheet" href="{{asset('css')}}/app.css">
    <script src="{{asset('js/app.js')}}" type="text/javascript"> </script>
<body>


<div style="padding: 30px;"></div>
<div class="container">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-header">
                Add Course
            </div>
            <div class="card-body">
                <form action="{{ url('course/store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Course</label>
                        <input type="text" name="course" class="form-control" @error('course') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter course">
                        @error('course')
                        <strong class="text-danger">{{message}}</strong>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category</label>
                        <input type="text" name="category" class="form-control" @error('category') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                        @error('category')
                        <strong class="text-danger">{{message}}</strong>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Level</label>
                        <input type="text" name="level" class="form-control" @error('level') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Level">
                        @error('level')
                        <strong class="text-danger">{{message}}</strong>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    Course Category
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course</th>
                        <th scope="col">Category</th>
                        <th scope="col">Level</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $serial= 1;
                    @endphp
                    @foreach($courses as $row)


                        <tr>
                            <th scope="row">{{$serial++}}</th>
                            <td>{{$row->course}}</td>
                            <td>{{$row->category}}</td>
                            <td>{{$row->level}}</td>
                            <td>
                                <a href="{{url('course/edit/'.$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{url('course/destroy/'.$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>


</body>
</head>
</html>
