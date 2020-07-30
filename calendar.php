<!DOCTYPE html>
<html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <title>Calendar</title>
        <style>
        body {
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          background: url("cloud2.jpg") no-repeat center / cover;
        }
          
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: inherit;
            filter: blur(10px);
        }

        .calendar {
          position: relative;
          width: 300px;
          background-color: #fff;
          box-sizing: border-box;
          box-shadow: 0 5px 50px rgba(#000, 0.5);
          border-radius: 8px;
          overflow: hidden;
        }

        .calendar__picture {
          position: relative;
          height: 200px;
          padding: 20px;
          color: #fff;
          background: #262626 url("cloud2.jpg") no-repeat center / cover;
          box-sizing: border-box;
        }
  
        .calendar__picture::before {
            content: "";
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: absolute;
            background: linear-gradient(to top, rgba(#000, 0.25), rgba(#000, 0.1));
          }
  
          h2 {
            margin: 0;
          }
          
          h3 {
            margin: 0;
            font-weight: 500;
          }

        .calendar__date {
          padding: 20px;
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(25px, 1fr));
          grid-gap: 10px;
          font-family: "Oswald";
          box-sizing: border-box;
        }

        .calendar__day {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 25px;
          font-family: "Oswald";
          font-weight: 600;
          color: #262626;
        }
          
        .calendar__day:nth-child(7) {
            color: lightcoral;
        }

        .calendar__number {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 25px;
          font-family: "Oswald";
          color: #262626;
        }

        .calendar__number:nth-child(7n) {
            color: lightcoral;
            font-weight: 700;
        }
          
        .calendar__number:hover {
            background-color: lightblue;
            color: black !important;
            font-weight: 700;
            cursor: pointer;
          }

        h1, h2, h3 {
          color: black;
          margin: 2px;
          font-family: "Oswald";
        }
        </style>
            
    </head>
    <body>
      <div class="calendar">
        <div class="calendar__picture">
          <h1>Cloud Class Calendar</h1>
          <h2>3 Sunday</h2>
          <h3>May</h3>
        </div>
        <div class="calendar__date">
          <div class="calendar__day">M</div>
          <div class="calendar__day">T</div>
          <div class="calendar__day">W</div>
          <div class="calendar__day">T</div>
          <div class="calendar__day">F</div>
          <div class="calendar__day">S</div>
          <div class="calendar__day">S</div>
          <div class="calendar__number"></div>
          <div class="calendar__number"></div>
          <div class="calendar__number"></div>
          <div class="calendar__number"></div>
          <div class="calendar__number">1</div>
          <div class="calendar__number">2</div>
          <div class="calendar__number calendar__number--current">3</div>
          <div class="calendar__number">4</div>
          <div class="calendar__number">5</div>
          <div class="calendar__number">6</div>
          <div class="calendar__number">7</div>
          <div class="calendar__number">8</div>
          <div class="calendar__number">9</div>
          <div class="calendar__number">10</div>
          <div class="calendar__number">11</div>
          <div class="calendar__number">12</div>
          <div class="calendar__number">13</div>
          <div class="calendar__number">14</div>
          <div class="calendar__number">15</div>
          <div class="calendar__number">16</div>
          <div class="calendar__number">17</div>
          <div class="calendar__number">18</div>
          <div class="calendar__number">19</div>
          <div class="calendar__number">20</div>
          <div class="calendar__number">21</div>
          <div class="calendar__number">22</div>
          <div class="calendar__number">23</div>
          <div class="calendar__number">24</div>
          <div class="calendar__number">25</div>
          <div class="calendar__number">26</div>
          <div class="calendar__number">27</div>
          <div class="calendar__number">28</div>
          <div class="calendar__number">29</div>
          <div class="calendar__number">30</div>
          <div class="calendar__number">31</div>
        </div>
      </div>
	  
    </body>
</html>