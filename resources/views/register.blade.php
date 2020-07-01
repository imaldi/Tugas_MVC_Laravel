<!DOCTYPE html>
<html>
    <title>Form Sign Up Sanbercode</title>
    <body>
        <h1><b>Buat Account Baru</b></h1><br>

        <h3><b>Sign Up Form</b></h3><br>

        <form action="/welcome" method="POST">
            @csrf
            <label>First name:</label><br>
            <input id="input_first_name" type="text" name="first_name"><br><br>

            <label>Last name:</label><br>
            <input id="input_last_name" type="text" name="last_name"><br><br>

            <label>Gender: </label><br>

            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>


            <br>
            <label>Nationality:</label><br>

            <select id="nationality" name="nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Singapura">Singapura</option>
                <option value="Brunei">Brunei Darussalam</option>
                <option value="Thailand">Thailand</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Laos">Laos</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Kamboja">Kamboja</option>
                <option value="Timor">Timor Leste</option>
            </select>
            <br>

            <br>
            <label>Bio:</label><br>

            <textarea id="bio" name="bio" rows="5" cols="30"></textarea><br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>