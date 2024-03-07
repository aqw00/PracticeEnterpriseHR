<?php
    // Example function to handle AJAX request to update session
    // This is a simplified concept. You need an actual endpoint to process AJAX requests.
    if (isset($_POST['action']) && isset($_POST['number'])) {
        $number = $_POST['number'];
        if ($_POST['action'] == 'add') {
            $_SESSION['addedCells'][$number] = true;
        } elseif ($_POST['action'] == 'remove') {
            unset($_SESSION['addedCells'][$number]);
        }
        // Send back a response if needed
        echo json_encode(['success' => true]);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendar</title>
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="topnav">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('holiday') }}">Holiday</a>
            <a class="active " href="{{ route('calendar') }}">Calendar</a>
            <a  href="{{ route('man') }}">ManagerPage</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="#about">About</a>
        </div>
    </header>
    <h1>calendar test</h1>

    <table id="calendar">
            <?php
    for ($row = 0; $row < 5; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 7; $col++) {
            $number = $row * 7 + $col;
            $class = isset($_SESSION['addedCells'][$number]) ? 'added' : '';
            echo "<td class='{$class}'>{$number}</td>";
        }
        echo "</tr>";
    }
    ?>
    </table>

    <div class="sidebar">
        <label id="label">This label is currently empty</label>
        <button id="button" onclick="addDate()">Click Me</button>
    </div>

    <script>
        function addDate() {
            const selected = document.querySelector(".selected");
    
            if (selected) {
                if (selected.classList.contains('added'))
                {
                    selected.classList.remove("added");
                    // updateSession(selected.textContent, 'remove');
                }
                else
                {
                    selected.classList.add("added");
                    // updateSession(selected.textContent, 'add');
                }
                selected.classList.remove("selected");
            }
        }
    
        document.getElementById("calendar").addEventListener("click", function(e) {
            if(e.target && e.target.nodeName === "TD") {
                // Remove previous selection and 'added' class from all cells
                document.querySelectorAll("td").forEach(cell => {
                    cell.classList.remove("selected");
                    // Optionally remove 'added' class if you want each click to only mark one cell as added
                    // cell.classList.remove("added");
                });
    
                // Add 'selected' class to the clicked cell
                e.target.classList.add("selected");
                
                // Update the label with the cell's number
                document.getElementById("label").textContent = e.target.textContent;
            }
        });
    </script>

</body>
</html>