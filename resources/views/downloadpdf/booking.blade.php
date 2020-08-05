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
       <h4 style="width:100%;text-align:center;">Your appointment date is<br> <strong><b>{{$bookings->schedule->date}}</b></strong></h4>
    </div>

    <div>
        <div style="display:inline-block;">
         <strong style="margin-top:45px; width:320px;"class="bookmsg">Booking from</strong><br>
         <p style="width:320px;" class="bookpar">{{$user->name}} Desg: Patient<br> {{$user->address}} <br> Mobile-no {{$user->mobile}} <br> Ehealth, Bangladesh</p>

        </div>

        <div style="display:inline-block;float:right;">
         <strong style="margin-top:10px;" class="bookmsg">Booking to</strong><br>
         <p class="bookpar">{{$doctor->name}} Dept: {{$doctor->type->name}}<br> {{$doctor->address}} <br> Mobile-no: {{$doctor->mobile}} <br> Ehealth, Bangladesh</p>
        </div>

    </div>

    <div>
        <div>
         <strong class="bookmsg">Payment method</strong><br>
         <p class="bookpar">Debit card<br> XXXXXXXXXXXX-2541 <br> UCB, Bank</p>

        </div>
    </div>

    <div>
        <p style="margin-top:10px; font-size:16px; font-family:cursive;">Dear {{$user->name}},<br><br>We are pleased to inform you, your appoint is booking successfully. Thanks for 
      trust us. <br> Please come exact schedule time and brings the copy of this recipt<br> Your schedule imformation given below
    </p>
    </div>

   

    <div>
           <strong class="info">Your schedule information</strong>
    </div>
   <div>
    <table align="center" style="width:100%;" class="table table-dark">
    <thead>
      <tr>
        <td><b>Id</b></td>
        <td><b>Day</b></td>
        <td><b>Start Time</b></td>
        <td><b>End Time</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
      <td>
          {{$bookings->id}}
        </td>
        <td>
        {{$bookings->schedule->day}}
        </td>
        <td>
          {{$bookings->schedule->start_time}}
        </td>
        <td>
        {{$bookings->schedule->end_time}}
        </td>
        
      </tr>
      </tbody>
    </table>
    </div>
    <div>
      <strong class="info">Other information</strong>
      <p style="margin-top:10px; font-size:16px; font-family:cursive;">The Online Doctor Appointment Form simplifies the process of scheduling appointments with new and recurring patients through 
          collecting relevant information as the date of appointment, appointment type, patient name and contact information, and latest 
          attend information if any. Customize the template with apps, widgets, and themes through the JotForm builder and create a HIPAA 
          compliant Appointment Form today.</p>

    </div>
    </div>
    
  </body>
</html>