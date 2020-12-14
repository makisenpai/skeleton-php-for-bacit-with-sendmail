<form action="../inc/course.insert.php" method="post">
        <table>
            <tr>
                <td>Aktivitets Navn</td>
                <td><input type="text" name="name" required/></td>
            </tr>
            <tr>
                <td>Info</td>
                <td><input type="text" name="info" required/></td>
            </tr>
            <tr>
                <td>Start dato</td>
                <td><input type="date" name="start_date" required/></td>
            </tr>
            <tr>
                <td>Slut dato</td>
                <td><input type="date" name="end_date" required/></td>
            </tr>
            <input type="submit" name="create" value="Legg til">
            </table>
</form>