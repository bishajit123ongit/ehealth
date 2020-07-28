<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
		.list-group{
			overflow-y: scroll;
			height: 200px;
		}
	</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center" id="app">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">We Code Messenger</div>
        
                        <div class="card-body">
                            <example-message :user="{{ auth()->user() }}"></example-message>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<script src="{{asset('js/app.js')}}"></script>
</body>
</html>