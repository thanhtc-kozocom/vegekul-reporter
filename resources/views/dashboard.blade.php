<!DOCTYPE html>
<html>
<head>
    <title>Backlog Sprint Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Backlog Sprints</h1>
    <ul>
        @foreach($sprints as $sprint)
            <li>
                <a href="#" onclick="loadSprint({{ $sprint['id'] }})">{{ $sprint['name'] }}</a>
            </li>
        @endforeach
    </ul>

    <div id="sprint-data">
        <canvas id="statusChart" width="400" height="200"></canvas>
    </div>

    <script src="/vendor/vegekul-reporter/js/chart-handler.js"></script>
</body>
</html>
