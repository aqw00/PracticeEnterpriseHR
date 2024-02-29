<?php
    if(isset($_GET['startDate']) && isset($_GET['endDate']) && isset($_GET['submit']))
    {
        require_once 'C:\xampp\htdocs\PE-app\vendor\autoload.php';
        $pdfcontent = '<table class="form-data"><thead><tr> </tr></thead><tbody><tr><td>user</td></tr><tr><td>id</td></tr>';
        foreach($_GET as $key =>$value)
        {
            $pdfcontent .= "<tr><td>" . ucwords(str_replace("_", " ",$key)) . "</td>:<td>" . $value . "</td></tr>";
        }
        $pdfcontent .= "</tbody></table>";
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(utf8_encode($pdfcontent));
        $mpdf->Output('formdata.pdf', 'D');
    }
    elseif(isset($_GET['cancel']))
    {
        $_GET['startDate'] = '';
        $_GET['endDate'] = '';
        $_GET['holidayType'] = '';
    }

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add a black background color to the top navigation */
        .topnav{background-color: #333; overflow: hidden;}

        /* Style the links inside the navigation bar */
        .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
        background-color: #ddd;
        color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
        background-color: #04AA6D;
        color: white;
        }
    </style>
    <title>holiday</title>
</head>
<header>
<div class="topnav">
  <a href="{{ route('home') }}">Home</a>
  <a class="active" href="{{ route('holiday') }}">Holiday</a>
  <a  href="{{ route('man') }}">ManagerPage</a>
  <a href="#about">About</a>
</div>
</header>
<body>
    <h1>Welcome to Holiday Page!</h1>
    <table class="form-data">
     <form action="/holiday" method="get">  
            <tr>
                <td>
                    <label for="startDate">Start Date:</label>
                </td>
                <td>
                    <input type="date" id="startDate" name="startDate" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="endDate">End Date:</label>
                </td>
                <td>
                    <input type="date" id="endDate" name="endDate" required>
                </td>
            </tr>
            <tr>
                <td>
                <label for="holiDays">Choose a type:</label>
                </td>
                <td>
                    <select id="holiDays" name="holidayType" required>
                    <option value="">Select</option>
                    <option value="vacation">Vacation</option>
                    <option value="sickLeave">Sick leave</option>
                    <option value="parentalLeave">Parental leave</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                <label for="reason">Reason:</label>
                </td>
                <td>
                    <textarea name="reason" id="reason" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="file">Select a file to upload:</label>
                </td>
                <td>
                    <input type="file" id="file" name="file">
                </td>
            </tr>
            <tr>
                <td id="subHoliday">
                    <button type="cancel" value="cancel" name="cancel" > cancel </button>
                </td>
                <td id="subHoliday">
                    <button type="submit" value="submit" name="submit"> submit </button>
                </td>
            </tr>
        </form>
    </table>
    
   
   
   
</body>
</html>