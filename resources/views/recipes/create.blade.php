
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodDude</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('cookfood') }}">FoodDude</a>
        <a class="navbar-brand" href="{{ route('cookfood') }}">Cook Food</a>
    </nav>

    <div class="row ">
        <div class="col-2">

        </div>
        <div class="col-8">
            @if(session('warning'))
                <span class="alert alert-danger d-block mt-3">{{session('warning')}}</span>
            @endif
            <form action="{{ route('recipes-store') }}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Duration</label>
                        <input type="text" class="form-control" name="duration" value="{{ old('duration') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Author</label>
                        <input type="text" class="form-control" name="author" value="{{ old('author') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Category</label>
                        <input type="text" class="form-control" name="cat" value="{{ old('cat') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ingredient</label>
                        <textarea name="ingre" class="form-control" rows="4">{{ old('ingre') }}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Method</label>
                        <textarea name="method" class="form-control" >{{ old('method') }}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </form>
        </div>
    </div>
   

    

</body>
</html>

