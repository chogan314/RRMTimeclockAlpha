<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Form</title>
    <link rel="stylesheet" href="user-form.css">
</head>

<body>
    <div id="content">
        <div id="sub-container">
            <div id="lhs">
                <form class="section" id="date-selection">
                    <div id="asdf">Showing results for</div>
                    <input type="date" name="start-date" id="start-date">
                    <div>to</div>
                    <input type="date" name="stop-date" id="stop-date">
                    <input type="submit" value="Refresh" id="refresh">
                </form>
                <table class="table-fill section">
                    <thead>
                        <tr>
                            <th class="text-left">Event</th>
                            <th class="text-left">Section</th>
                            <th class="text-left">Date</th>
                            <th class="text-left">Time</th>
                            <th class="text-left">Hours</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr>
                            <td class="text-left">Punch In</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Punch Out</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">5.45</td>
                        </tr>
                        <tr>
                            <td class="text-left">Punch In</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Punch Out</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">8.29</td>
                        </tr>
                        <tr>
                            <td class="text-left">Punch In</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Punch Out</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">5.45</td>
                        </tr>
                        <tr>
                            <td class="text-left">Punch In</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">-</td>
                        </tr>
                        <tr>
                            <td class="text-left">Punch Out</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">8.29</td>
                        </tr>
                        <tr>
                            <td class="text-left">Punch In</td>
                            <td class="text-left">Service</td>
                            <td class="text-left">1/29/17</td>
                            <td class="text-left">9:00</td>
                            <td class="text-left">-</td>
                        </tr>
                        <tr id="total-hours">
                            <td class="text-left">Total Hours:</td>
                            <td class="text-right" colspan="4">200.82</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="section" id="rhs">
                <h1>Welcome, Your Name Here.</h1>
                <form action="" method="post">
                    <select name="cars" id="role-select">
                        <option value="" disabled selected>Select your section</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                    <input type="submit" value="Punch In" id="submit">
                </form>
                <form action="" method="post" id="logout-form">
                    <div id="logout">Logout</div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>