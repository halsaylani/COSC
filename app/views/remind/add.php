<html>
<head>
    <title>Add New Reminder</title>
</head>
 
<body>
    <br/><br/>
    
    <form action="/remind/add" method="post" >
        <table width="25%" border="0">
            <tr> 
                <td>Subject</td>
                <td><input type="text" name="subject"></td>
            </tr>
            <tr> 
                <td>Description</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <a href="/remind/index">back</a>
</body>
</html>