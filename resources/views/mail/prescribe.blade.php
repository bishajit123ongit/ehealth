<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="padding:10px;font-family: cursive;">

  <p>Dear {{$prescription_data['name']}},</p>
  <p>Thanks for trust ehealth application for your tretment.</p>
  <p>I understand your disease, i suggest you some things given below</p>

  <p> <strong style="font-size:17px;color:black;">Doctor Advice: </strong>You need to follow this instruction so carefully maintain this instruction<br>
  <strong style="font-size:17px;color:black;">Prescription:  </strong>  {{$prescription_data['prescription']}}
  </p>

  <p><strong style="font-size:17px;color:black;">Test: </strong>  {{$prescription_data['test']}}
  </p>
</div>

</body>
</html>