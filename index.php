<!DOCTYPE html>
<html>
<head>
    <title>Grievance Registration</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>

    <h1>Grievance Registration</h1>

    <form action="process-from.php" method="post">
    <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="prn">PRN</label>
        <input type="text" id="prn" name="prn">
        
        <label for="body">Message</label>
        <textarea id="body" name="body"></textarea>

        <label for="priority">Priority</label>
        <select id="priority" name="priority">
            <option value="1">Low</option>
            <option value="2" selected>Medium</option>
            <option value="3">High</option>
        </select>

        <fieldset>
            <legend>Type</legend>

            <label>
                <input type="radio" name="type" value="Camplaint" checked>
                Complaint
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="Suggestion">
                Suggestion
            </label>

        </fieldset>

         

        <br>

        <button>Send</button>

    </form>

</body>
</html>