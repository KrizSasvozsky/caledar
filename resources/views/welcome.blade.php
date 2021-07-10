<!doctype html>
<html lang="en">
  <head>
  	<title>Calendar 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{('public/frontend/css/style.css')}}">
    <style>
        body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("skyblue.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }

        .hero-text {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        }

        .hero-text button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #ddd;
        text-align: center;
        cursor: pointer;
        }

        .hero-text button:hover {
        background-color: #555;
        color: white;
        }
        </style>
	</head>
	<body>
    <section style="background-image: url('skyblue.jpg');height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;" class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Calendar #04</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="content w-100">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
				        <table class="months-table w-100"> 
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Jan</td> 
				              <td class="month">Feb</td> 
				              <td class="month">Mar</td> 
				              <td class="month">Apr</td> 
				              <td class="month">May</td> 
				              <td class="month">Jun</td> 
				              <td class="month">Jul</td>
				              <td class="month">Aug</td> 
				              <td class="month">Sep</td> 
				              <td class="month">Oct</td>          
				              <td class="month">Nov</td>
				              <td class="month">Dec</td>
				            </tr>
				          </tbody>
				        </table> 
				        
				        <table class="days-table w-100"> 
				          <td class="day">Sun</td> 
				          <td class="day">Mon</td> 
				          <td class="day">Tue</td> 
				          <td class="day">Wed</td> 
				          <td class="day">Thu</td> 
				          <td class="day">Fri</td> 
				          <td class="day">Sat</td>
				        </table> 
				        <div class="frame"> 
				          <table id="myTable" class="dates-table w-100" style="cursor: pointer;"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div> 
				        <button class="button" id="add-button">Add Event</button>
				      </div>
				    </div>
				    <div class="events-container">
				    </div>
					
					<p id="demo"></p>
				    <div class="dialog" id="dialog">
				        <h2 class="dialog-header"> Add New Event </h2>
				        <form class="form" id="form">
				          <div class="form-container" align="center">
				            <label class="form-label" id="valueFromMyButton" for="name">Event name</label>
				            <input class="input" type="text" id="name" maxlength="36">
				            <label class="form-label" id="valueFromMyButton" for="count">Number of people to invite</label>
				            <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
				            <input type="button" value="Cancel" class="button" id="cancel-button">
				            <input type="button" value="OK" class="button button-white" id="ok-button">
				          </div>
				        </form>
						
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</section>
	<script>
	var table = document.getElementById("myTable");
	if (table != null) {
		for (var i = 0; i < table.rows.length; i++) {
			for (var j = 0; j < table.rows[i].cells.length; j++)
			table.rows[i].cells[j].onclick = function () {
				tableText(this);
			};
		}
	}
	function tableText(tableCell) {
		alert(tableCell.innerHTML);
	}
	</script>
	<script src="{{('public/frontend/js/jquery.min.js')}}"></script>
  <script src="{{('public/frontend/js/popper.js')}}"></script>
  <script src="{{('public/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{('public/frontend/js/main.js')}}"></script>
	
	</body>
</html>

