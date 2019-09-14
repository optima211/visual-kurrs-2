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

        #td2 {
            width: 160px;
        }

        #titles {
            font-weight: 600;
            text-align: center;
        }

        hr {
            border: none; /* Убираем границу */
            background-color: red; /* Цвет линии */
            color: red; /* Цвет линии для IE6-7 */
            height: 2px; /* Толщина линии */
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
                <input type="radio" id="weather" name="weather" value="windy">windy<Br>
                <input type="radio" id="weather" name="weather" value="Extremal">Extremal<Br>
                <P>
                    <INPUT TYPE="SUBMIT" VALUE="Send">
                    <INPUT TYPE="RESET" VALUE="Clear">
            </FORM>
        </td>
        <td id="td2">
            <?php
            //echo "<b>Data is update!</b><br>";
            if (isset($_POST['nm']))
                if ($_POST['nm'] != "") {
                    echo "<b id='titles'> Hello " . $name = $_POST['nm'] . "!</b><br>  <hr>";
                } else
                    echo $name = "<b id='titles'> You not enter name :(</b><br>  <hr>";
            if (isset($_POST['sx']))
                $sex = $_POST['sx'];
            if (isset($_POST['days']))
                $days = $_POST['days'];
            if (isset($_POST['weather']))
                $weather = $_POST['weather'];
            echo "You need in road:<br>";
            echo "<b id='titles'>Clothes:</b><br>";
            If ($sex == "m") {
                echo "
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">jacket<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">trousers<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">shirt<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">tie<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">shoes<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">shoe wax<Br>
                ";
            }
            If ($sex == "f") {
                echo "
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">shirt<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">skirt<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">shoes<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">cosmetics<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">dress<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">bow<Br>
                ";
            }
            if ($weather == "Sunny")
                echo "
                    <p>For sunny:<br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">cap<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">T-shirt<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">shorts<Br>
                  ";
            if ($weather == "Cold")
                echo "
                    <p>For cold:<br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">a cap<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Down jacket<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">felt boots<Br>
                  ";
            if ($weather == "windy")
                echo "
                    <p>For windy:<br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">coat<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">raincoat<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">galoshes<Br>
                  ";
            if ($weather == "Extremal")
                echo "
                    <p>For extremal:<br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">skiing<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">parachute<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">diving suit<Br>
                  ";
            echo "<hr><b id='titles'>Personal items:</b><br>";
            if ($days == "day") {
                echo "
                    <p>For at one to three days:<br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Passport<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Documents for work<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Washing facilities<Br>
                  ";
            }
            if ($days == "Week") {
                echo "
                    <p>For one week:<br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Passport<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Documents for work<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Washing facilities<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">underwear and socks<Br>
                  ";
            }
            if ($days == "Month") {
                echo "
                    <p>For one month:<br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Passport<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Documents for work<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Washing facilities<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">underwear and socks<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">all documents<Br>
                  ";
            }
            if ($days == "Year") {
                echo "
                    <p>For one year:<br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Passport<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Documents for work<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">Washing facilities<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">underwear and socks<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">all documents<Br>
                  <input type=\"checkbox\" id=\"weather\" name=\"weather\" value=\"Sunny\">memory of home<Br>
                  ";
            }
            ?>
        </td>
    </tr>
</table>
</BODY>
</HTML>