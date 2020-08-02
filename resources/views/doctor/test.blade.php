<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
    <style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
     .wrapper{
        width: 100%;
        padding: 20px;
     }
    
    </style>
  </head>
  <body>
  <div style="width:100%; display:inline-block;">
  <img style="width:300px; height:250px;" src="{{ public_path('image/ehealth.png')}}" alt="BTS">
  </div>

  <div class="wrapper">
    <div>
        <div>
           
        </div>
        <div>
           Doctors List
        </div>
    </div>
   <div>
    <table align="center" style="width:100%;" class="table table-dark">
    <thead>
      <tr>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Qualification</b></td>     
      </tr>
      </thead>
      <tbody>
      @foreach($doctors as $doctor)
      <tr>
        <td>
          {{$doctor->name}}
        </td>
        <td>
        {{$doctor->email}}
        </td>
        <td>
        {{$doctor->qualification}}
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
    </div>
    </div>
    
  </body>
</html>