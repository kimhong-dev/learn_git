<!DOCTYPE html>
<html>
<head>
    <title>Weather</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
            background: #eee;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }
        button {
            padding: 10px 24px;
            font-size: 16px;
            border-radius: 8px;
            border: none;
            background: #333;
            color: white;
            cursor: pointer;
        }
        .card {
            display: none;
            width: 320px;
            border-radius: 20px;
            overflow: hidden;
            background: linear-gradient(135deg, #f2624b, #f5a623);
            color: white;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .card-top {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .left .status {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            opacity: 0.9;
        }
        .left .status img {
            width: 16px;
            height: 16px;
        }
        .left .temp {
            font-size: 42px;
            font-weight: bold;
            margin: 4px 0;
        }
        .left .range {
            font-size: 14px;
            opacity: 0.9;
        }
        .right {
            text-align: right;
        }
        .right .time {
            font-size: 24px;
            font-weight: bold;
        }
        .right .date {
            font-size: 12px;
            opacity: 0.9;
        }
        .right .city {
            font-size: 14px;
            margin-top: 20px;
        }
        .forecast {
            display: flex;
            background: rgba(0,0,0,0.15);
        }
        .forecast .day {
            flex: 1;
            text-align: center;
            padding: 10px 4px;
            font-size: 12px;
        }
        .forecast .day img {
            width: 20px;
            height: 20px;
            display: block;
            margin: 4px auto 0;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <button onclick="document.getElementById('weatherCard').style.display = 'block'">
            Show Weather
        </button>

        <div class="card" id="weatherCard">
            <div class="card-top">
                <div class="left">
                    <div class="status">
                        <img src="https://cdn.jsdelivr.net/npm/@tabler/icons@2.44.0/icons/sun.svg" alt="sunny" style="filter: invert(1);">
                        Sunny
                    </div>
                    <div class="temp">36&deg;</div>
                    <div class="range">42&deg;/28&deg;</div>
                </div>
                <div class="right">
                    <div class="time">23:56</div>
                    <div class="date">MON 08-23</div>
                    <div class="city">A Coruña</div>
                </div>
            </div>
            <div class="forecast">
                <div class="day">
                    TUE
                    <img src="https://cdn.jsdelivr.net/npm/@tabler/icons@2.44.0/icons/sun.svg" alt="sunny" style="filter: invert(1);">
                </div>
                <div class="day">
                    WED
                    <img src="https://cdn.jsdelivr.net/npm/@tabler/icons@2.44.0/icons/cloud-rain.svg" alt="rain" style="filter: invert(1);">
                </div>
                <div class="day">
                    THU
                    <img src="https://cdn.jsdelivr.net/npm/@tabler/icons@2.44.0/icons/cloud.svg" alt="cloudy" style="filter: invert(1);">
                </div>
                <div class="day">
                    FRI
                    <img src="https://cdn.jsdelivr.net/npm/@tabler/icons@2.44.0/icons/sun.svg" alt="sunny" style="filter: invert(1);">
                </div>
            </div>
        </div>
    </div>
</body>
</html>