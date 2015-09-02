<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

	<title>NOC - Incidentes</title>
	<link href="./index_files/style2.css" rel="stylesheet" type="text/css">
	<link href="inc/css.css" rel="stylesheet" type="text/css" >

</head>

<body>

       <div data-role="fieldcontain">
            <label for="datetime-l">Datetime local:</label>
            <input type="datetime" name="datetime-l" id="datetime-l"  value="<?php
            $date1 = new Datetime($rrecord->strval('datenote'));
            echo $date1->format(DateTime::ISO8601);
            ?>" />
        </div>

        <div data-role="fieldcontain">
            <label for="datetime-2">Datetime local:</label>
            <input type="datetime-local" name="datetime-2" id="datetime-2"  value="<?php echo $rrecord->strval('datenote') ?>" />
        </div>
        
        

</body>
</html>