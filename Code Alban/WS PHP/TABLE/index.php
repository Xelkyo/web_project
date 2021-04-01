<?php

?>
<form action="Export.php" method="GET">
    <div>
        <label for='format'>Format</label>
        <select name='format' id='format'>
            <option value="">--Choisisez une option--</option>
            <option value='JSON'>JSON</option>
            <option value='CSV'>CSV</option>
            <option value='HTML'>HTML</option>
        </select>
    </div>
    <p><input type="submit" value="exporter"></p>
    </form>