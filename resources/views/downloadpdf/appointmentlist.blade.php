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

        .bookmsg{
            font-size: 18px;
            color: #272b41;
            font-weight: 600;
            display: block;
        }
        .info{
            font-size: 24px;
            color: #272b41;
            font-weight: 700;
            width:100%;
            text-align:center;
            display:inline-block;
            margin-bottom:10px;
        }

        .bookpar{
            color: #757575;
            font-weight: 500;
            font-size: 18px;
        }
        
        .drbooksty{
            width:400px; 
            display:inline-block; 
            text-align:right;
            float:right;
        }

        .content{
            width:100%; 
            display:inline-block;
            text-align:center;
        }
        .imgstyle{
            width:100px; 
            height:100px;
            border-radius:50%;
        }
        .divstyle{
            width:100%;
            display:inline-block;
        }

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
        padding: 10px;
     }
    
    </style>
  </head>
  <body>
  

  <div class="wrapper">
    <div class="content">
        <img class="imgstyle" src="{{ public_path('image/doccure.png')}}" alt="BTS">
    </div>

    <div>
           <strong class="info">Your confirmed schedule for this patient</strong>
    </div>
   <div>
    <table align="center" style="margin-top:20px;width:100%;" class="table table-dark">
    <thead>
      <tr>
        <td><b>Id</b></td>
        <td><b>Patient Image</b></td>
        <td><b>Patient Id</b></td>
        <td><b>Patient Name</b></td>
        
        <td><b>Day</b></td>
        <td><b>Start Time</b></td>
        <td><b>End Time</b></td>     
      </tr>
      </thead>
      <tbody>
      @foreach($bookings as $book)
      <tr>
        <td>
          {{$book->id}}
        </td>
        <td>
          <img style="width:50px;height:50px; border-radius:100%;" src="{{ public_path($book->user->image)}}" alt="">
        </td>
        <td>
           {{$book->user->id}}
        </td>
        <td>
          {{$book->user->name}}
        </td>
        <td>
           {{$book->schedule->day}}
        </td>

        <td>
           {{$book->schedule->start_time}}
        </td>

        <td>
           {{$book->schedule->end_time}}
        </td>
        
      </tr>
      @endforeach
      </tbody>
    </table>
    </div>
    <div>
      <strong class="info">Other information</strong>
      <p style="margin-top:10px; font-size:18px; font-family:cursive;">The Online Doctor Appointment Form simplifies the process of scheduling appointments with new and recurring patients through 
          collecting relevant information as the date of appointment, appointment type, patient name and contact information, and latest 
          attend information if any. Customize the template with apps, widgets, and themes through the JotForm builder and create a HIPAA 
          compliant Appointment Form today.</p>

    </div>
    </div>
    
  </body>
</html>