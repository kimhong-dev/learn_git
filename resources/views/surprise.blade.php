<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Surprise!</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 50%, #fbc2eb 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }

        .card {
            background: #fff;
            border-radius: 20px;
            padding: 50px 40px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .card h1 {
            margin: 0 0 10px;
            color: #444;
            font-size: 28px;
        }

        .card p {
            color: #777;
            margin-bottom: 25px;
        }

        button {
            background: linear-gradient(135deg, #ff6a88, #ff99ac);
            border: none;
            color: white;
            padding: 15px 35px;
            font-size: 18px;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(255, 105, 135, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            transform: scale(1.08);
            box-shadow: 0 12px 25px rgba(255, 105, 135, 0.5);
        }

        .surprise {
            display: none;
            animation: popIn 0.6s ease forwards;
        }

        .surprise.show {
            display: block;
        }

        @keyframes popIn {
            0% { transform: scale(0.5); opacity: 0; }
            70% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); }
        }

        .emoji {
            font-size: 60px;
            margin-bottom: 10px;
        }

        .confetti {
            position: fixed;
            top: -10px;
            width: 10px;
            height: 10px;
            border-radius: 2px;
            opacity: 0.9;
            pointer-events: none;
            z-index: 1;
            animation: fall linear forwards;
        }

        @keyframes fall {
            to {
                transform: translateY(110vh) rotate(360deg);
                opacity: 0.3;
            }
        }
    </style>
</head>
<body>

    <div class="card" id="card">
        {{-- Initial state: the ask --}}
        <div id="initial">
            <h1>🎁 A little something for you...</h1>
            <p>Click the button to find out what it is</p>
            <form id="surpriseForm">
                @csrf
                <button type="submit">Click me!</button>
            </form>
        </div>

        {{-- Surprise state --}}
        <div class="surprise" id="surpriseMessage">
            <div class="emoji">🎉🎂🎈</div>
            <h1>Happy Birthday, {{ $name ?? 'friend' }}!</h1>
            <p>Wishing you an amazing year ahead, full of joy and cake!</p>
        </div>
    </div>

    <script>
        const form = document.getElementById('surpriseForm');
        const initial = document.getElementById('initial');
        const surprise = document.getElementById('surpriseMessage');

        form.addEventListener('submit', function (e) {
            e.preventDefault(); // no page reload needed for the surprise reveal
            initial.style.display = 'none';
            surprise.classList.add('show');
            launchConfetti();
        });

        function launchConfetti() {
            const colors = ['#ff6a88', '#ffb6b9', '#fbc2eb', '#a1c4fd', '#fbe27a'];
            for (let i = 0; i < 80; i++) {
                const piece = document.createElement('div');
                piece.className = 'confetti';
                piece.style.left = Math.random() * 100 + 'vw';
                piece.style.background = colors[Math.floor(Math.random() * colors.length)];
                piece.style.animationDuration = (Math.random() * 2 + 2) + 's';
                piece.style.width = piece.style.height = (Math.random() * 8 + 6) + 'px';
                document.body.appendChild(piece);
                setTimeout(() => piece.remove(), 4500);
            }
        }
    </script>

</body>
</html>