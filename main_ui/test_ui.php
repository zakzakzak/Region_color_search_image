<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./public/css/index.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Homepage</h1>
        </header>

        <form autocomplete="off" action="test2_ui.php" method="get">

            <div class="grid-container">
              <?php for ($i=1; $i < 10; $i++):?>
                <?php
                echo '<div class="box-'.($i).'" id="box'.($i).'" onchange="changeBoxBackgroundColor'.($i).'()">';
                echo '<div class="input-rgb">';
                echo '<input oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="3" placeholder="0"
                      type="number" name="red'.($i).'" id="red-'.($i).'"><span>,</span>';
                echo '<input oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="3" placeholder="0"
                      type="number" name="green'.($i).'" id="green-'.($i).'"><span>,</span>';
                echo '<input oninput="this.value=this.value.slice(0,this.maxLength)" maxlength="3" placeholder="0"
                      type="number" name="blue'.($i).'" id="blue-'.($i).'">';
                echo '</div>';
                echo '</div>';
              endfor;
                ?>
              </div>






        <div class="button-next">
            <button name="button" >NEXT</button>
        </div>

      </form>
    </div>

</body>

<script type="text/javascript">
    function changeBoxBackgroundColor1() {
        let red1 = document.getElementById("red-1").value;
        let green1 = document.getElementById("green-1").value;
        let blue1 = document.getElementById("blue-1").value;

        document.getElementById("box1").style.backgroundColor = `rgb(${red1}, ${green1}, ${blue1})`;
    }

    function changeBoxBackgroundColor2() {
        let red2 = document.getElementById("red-2").value;
        let green2 = document.getElementById("green-2").value;
        let blue2 = document.getElementById("blue-2").value;

        document.getElementById("box2").style.backgroundColor = `rgb(${red2}, ${green2}, ${blue2})`;

    }

    function changeBoxBackgroundColor3() {
        let red3 = document.getElementById("red-3").value;
        let green3 = document.getElementById("green-3").value;
        let blue3 = document.getElementById("blue-3").value;

        document.getElementById("box3").style.backgroundColor = `rgb(${red3}, ${green3}, ${blue3})`;

    }

    function changeBoxBackgroundColor4() {
        let red4 = document.getElementById("red-4").value;
        let green4 = document.getElementById("green-4").value;
        let blue4 = document.getElementById("blue-4").value;

        document.getElementById("box4").style.backgroundColor = `rgb(${red4}, ${green4}, ${blue4})`;

    }

    function changeBoxBackgroundColor5() {
        let red5 = document.getElementById("red-5").value;
        let green5 = document.getElementById("green-5").value;
        let blue5 = document.getElementById("blue-5").value;

        document.getElementById("box5").style.backgroundColor = `rgb(${red5}, ${green5}, ${blue5})`;

    }

    function changeBoxBackgroundColor6() {
        let red6 = document.getElementById("red-6").value;
        let green6 = document.getElementById("green-6").value;
        let blue6 = document.getElementById("blue-6").value;

        document.getElementById("box6").style.backgroundColor = `rgb(${red6}, ${green6}, ${blue6})`;

    }

    function changeBoxBackgroundColor7() {
        let red7 = document.getElementById("red-7").value;
        let green7 = document.getElementById("green-7").value;
        let blue7 = document.getElementById("blue-7").value;

        document.getElementById("box7").style.backgroundColor = `rgb(${red7}, ${green7}, ${blue7})`;

    }

    function changeBoxBackgroundColor8() {
        let red8 = document.getElementById("red-8").value;
        let green8 = document.getElementById("green-8").value;
        let blue8 = document.getElementById("blue-8").value;

        document.getElementById("box8").style.backgroundColor = `rgb(${red8}, ${green8}, ${blue8})`;

    }

    function changeBoxBackgroundColor9() {
        let red9 = document.getElementById("red-9").value;
        let green9 = document.getElementById("green-9").value;
        let blue9 = document.getElementById("blue-9").value;

        document.getElementById("box9").style.backgroundColor = `rgb(${red9}, ${green9}, ${blue9})`;

    }

    // document.getElementById("box1").addEventListener("change", changeBoxBackgroundColor1, false);
</script>


</html>
