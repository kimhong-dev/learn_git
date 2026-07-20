<!DOCTYPE html>
<html>
<head>
    <title>Countdown</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: sans-serif;
            gap: 20px;
        }
        #display {
            font-size: 48px;
            font-weight: bold;
        }
        button {
            padding: 10px 24px;
            font-size: 16px;
            cursor: pointer;
        }
        button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div id="display">01:00</div>
    <button id="startBtn" onclick="startCountdown()">Start Countdown</button>

    <script>
        let timerInterval = null;

        function formatTime(seconds) {
            const m = Math.floor(seconds / 60);
            const s = seconds % 60;
            return String(m).padStart(2, '0') + ':' + String(s).padStart(2, '0');
        }

        function startCountdown() {
            if (timerInterval) return;

            const display = document.getElementById('display');
            const btn = document.getElementById('startBtn');
            let remaining = 60;

            display.textContent = formatTime(remaining);
            btn.disabled = true;

            timerInterval = setInterval(() => {
                remaining--;
                display.textContent = formatTime(remaining);

                if (remaining <= 0) {
                    clearInterval(timerInterval);
                    timerInterval = null;
                    display.textContent = "Time's up!";
                    btn.disabled = false;
                }
            }, 1000);
        }
    </script>
</body>
</html>