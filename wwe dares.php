<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWE 2K24 Dare Game</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e2f;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: #2a2a3b;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        button {
            padding: 10px 20px;
            background-color: #ff4500;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        button:hover {
            background-color: #ff6347;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>WWE 2K24 Dare Game</h1>
        <button id="generateDare">Generate Dare</button>
        <div class="result" id="result"></div>
    </div>

    <script>
        $(document).ready(function() {
            const characters = [
                "Roman Reigns",
                "The Undertaker",
                "John Cena",
                "Brock Lesnar",
                "Triple H",
                "Stone Cold Steve Austin",
                "The Rock",
                "Shawn Michaels",
                "Randy Orton",
                "Seth Rollins"
            ];

            const matchTypes = [
                "Hell in a Cell",
                "TLC (Tables, Ladders, and Chairs)",
                "Royal Rumble",
                "Steel Cage",
                "Extreme Rules",
                "Last Man Standing",
                "Falls Count Anywhere",
                "Iron Man Match",
                "Submission Match",
                "Elimination Chamber"
            ];

            const difficulties = ["Easy", "Normal", "Hard", "Legendary"];

            const dares = [
                "Win the match without using any finishers or signatures.",
                "Eliminate at least 5 opponents in a Royal Rumble.",
                "Win the match in under 5 minutes.",
                "Do not reverse any attacks during the match.",
                "Win the match with only submissions.",
                "Break all the available tables in the match.",
                "Escape the cage in under 3 minutes.",
                "Land a finisher from the top of a ladder.",
                "Survive at least 10 minutes against your opponent.",
                "Use only grapple moves to win the match."
            ];

            $('#generateDare').click(function() {
                const selectedCharacter = characters[Math.floor(Math.random() * characters.length)];
                const selectedOpponent = characters[Math.floor(Math.random() * characters.length)];
                const selectedMatch = matchTypes[Math.floor(Math.random() * matchTypes.length)];
                const selectedDifficulty = difficulties[Math.floor(Math.random() * difficulties.length)];
                const selectedDare = dares[Math.floor(Math.random() * dares.length)];

                const resultHtml = `
                    <h2>Your WWE 2K24 Dare</h2>
                    <p><strong>Character:</strong> ${selectedCharacter}</p>
                    <p><strong>Opponent:</strong> ${selectedOpponent}</p>
                    <p><strong>Match Type:</strong> ${selectedMatch}</p>
                    <p><strong>Difficulty:</strong> ${selectedDifficulty}</p>
                    <p><strong>Dare:</strong> ${selectedDare}</p>
                `;

                $('#result').html(resultHtml);
            });
        });
    </script>
</body>
</html>
