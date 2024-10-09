<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .calculator {
            display: inline-block;
            padding: 25px;
            border: 2px solid #333;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1.5em;
            text-align: right;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fbe7f0;
        }
        button {
            width: 22%;
            padding: 15px;
            font-size: 1.2em;
            margin: 3px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        button.number {
            background-color: #ff99cc;
            color: white;
        }
        button.number:hover {
            background-color: #ff80b0;
        }
        button.operator {
            background-color: #ff66a3;
            color: white;
        }
        button.operator:hover {
            background-color: #ff3380;
        }
        button.special {
            background-color: #ff4d94;
            color: white;
        }
        button.special:hover {
            background-color: #ff1a75;
        }
        button.equals {
            background-color: #ff80bf;
            color: white;
        }
        button.equals:hover {
            background-color: #ff66b3;
        }
    </style>
</head>
<body>

<div class="calculator">
    <form method="post" action="">
        <input type="text" name="display" id="display" value="<?php echo isset($_POST['display']) ? $_POST['display'] : ''; ?>" readonly>
        <br>

        <!-- Number Buttons -->
        <button type="button" class="number" onclick="append('1')">1</button>
        <button type="button" class="number" onclick="append('2')">2</button>
        <button type="button" class="number" onclick="append('3')">3</button>
        <button type="button" class="operator" onclick="append('+')">+</button>
        <br>

        <button type="button" class="number" onclick="append('4')">4</button>
        <button type="button" class="number" onclick="append('5')">5</button>
        <button type="button" class="number" onclick="append('6')">6</button>
        <button type="button" class="operator" onclick="append('-')">-</button>
        <br>

        <button type="button" class="number" onclick="append('7')">7</button>
        <button type="button" class="number" onclick="append('8')">8</button>
        <button type="button" class="number" onclick="append('9')">9</button>
        <button type="button" class="operator" onclick="append('*')">x</button>
        <br>

        <button type="button" class="special" onclick="clearDisplay()">C</button>
        <button type="button" class="number" onclick="append('0')">0</button>
        <button type="button" class="equals" onclick="calculate()">=</button>
        <button type="button" class="operator" onclick="append('/')">/</button>
    </form>
</div>

<script>
    function append(value) {
        document.getElementById('display').value += value;
    }

    function clearDisplay() {
        document.getElementById('display').value = '';
    }

    function calculate() {
        let display = document.getElementById('display').value;
        try {
            document.getElementById('display').value = eval(display);
        } catch (e) {
            alert("Kesalahan dalam perhitungan");
            clearDisplay();
        }
    }
</script>

</body>
</html>