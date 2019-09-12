<!DOCTYPE HTML>
<HTML lang="ru">
<HEAD>
    <TITLE>Course project for Visual programming</TITLE>
    <style>
        table {
        }

        td {
            border: 1px solid grey;
        }
    </style>
</HEAD>
<BODY>
<table>
    <tr>
        <td>
            <FORM ACTION="index.php" METHOD=POST>
                <label for="nm">Your name: </label>
                <BR>
                <INPUT NAME="nm" id="nm" TYPE="TEXT" placeholder="Enter your name">
                <br><br>
                <label for="sx">Sex </label>
                <br>
                <INPUT TYPE="RADIO" NAME="sx" id="sx1" VALUE="m" CHECKED><label for="sx1">Men</label>
                <INPUT TYPE="RADIO" NAME="sx" id="sx2" VALUE="f"><label for="sx2">Women</label>
                <br><br>
                <label for="days">Count trip</label>
                <BR>
                <SELECT NAME="days" id="days">
                    <OPTION VALUE="day" SELECTED>1-3 day
                    <OPTION VALUE="Week">Week
                    <OPTION VALUE="Month">Month
                    <OPTION VALUE="Year">Year
                </SELECT>
                <br><br>
                <label for="weather">Weather</label>
                <BR>
                <input type="radio" id="weather" name="weather" value="Sunny" CHECKED>Sunny<Br>
                <input type="radio" id="weather" name="weather" value="Cold">Cold<Br>
                <input type="radio" id="weather" name="weather" value="Winter">Winter<Br>
                <input type="radio" id="weather" name="weather" value="Extremal">Extremal<Br>

                <P>
                    <INPUT TYPE="SUBMIT" VALUE="Send">
                    <INPUT TYPE="RESET" VALUE="Clear">
            </FORM>
        </td>
        <td>
            <?php
            //echo "<b>Data is update!</b><br>";
            if (isset($_POST['nm']))
                if ($_POST['nm'] != "")
                    $name = $_POST['nm'];
                else $name = "you not enter name :(";
            if (isset($_POST['sx']))
                $sex = $_POST['sx'];
            if (isset($_POST['days']))
                $days = $_POST['days'];
            if (isset($_POST['weather']))
                $weather = $_POST['weather'];


            //   echo $name . "<br>";
            //  echo $sex . "<br>";
            //  echo $days . "<br>";
            // echo $weather . "<br>";
            If ($sex == "m") {
                echo "
                  <input type=\"radio\" id=\"weather\" name=\"weather\" value=\"Sunny\" CHECKED>Sunny<Br>
                
                
                
                ";
            }
            ?>
        </td>
    </tr>
</table>
</BODY>
</HTML>