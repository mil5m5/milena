<DOCTYPE html/>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
    <style>
        form{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
    </style>
        <form method="post" action="check.php">
            <input type="number" min="1" placeholder="Տողի երկարությունը" name="length_row" required/>
            <label for="content">Տողի մեջ ներառել</label>
            <select name="content" id="content" required>
                <option value="int">Թվեր</option>
                <option value="let">Տառեր</option>
                <option value="int_let">Թվեր եւ Տառեր</option>
            </select>
            <input type="submit" name="send" value="Գեներացնել"/>
        </form>
    </body>
</html>