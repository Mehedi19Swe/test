<html>
<head>
    <title> Laravel Crud Operation </title>
    <link rel="stylesheet" href="{{asset('css')}}/app.css">
    <script src="{{asset('js/app.js')}}" type="text/javascript"> </script>
<body>


<div style="padding: 30px;"></div>
<div class="container">

    <div class="row">
        <div class="col-sm-8 m-auto">
            <div class="card">
                <div class="card-header">
                    Update Course
                </div>
                <div class="card-body">
                    <form action="{{ url('course/update/'.$course->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">course</label>
                            <input type="text" name="course" class="form-control" @error('course') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->course }}">
                            @error('course')
                            <strong class="text-danger">{{message}}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">category</label>
                            <input type="text" name="category" class="form-control" @error('category') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->category }}">
                            @error('category')
                            <strong class="text-danger">{{message}}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Level</label>
                            <input type="text" name="level" class="form-control" @error('level') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $course->level }}">
                            @error('level')
                            <strong class="text-danger">{{message}}</strong>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</head>
</html>
