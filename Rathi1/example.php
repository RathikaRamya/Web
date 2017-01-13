<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
    body{ font-family: tahoma, Arial; font-size: 9pt;}
    table {border-collapse:collapse; font: tahoma, Arial 9pt;}
    table th{font-family: tahoma, Arial, Geneva, sans-serif; font-size:9pt; width:75px; background-color:#999; color:#000; text-transform:uppercase;}
    table th, td{ padding:4px 6px; text-transform:capitalize;}
</style>

</head>

<body>
    <table>
        <tr ng-repeat = "data in comments">
            <td ng-if="data.type == 'hootsslllll' ">
             //differnt template with hoot data
            </td>
            <td ng-if="data.type == 'story' ">
             //differnt template with story data
            </td>
            <td ng-if="data.type == 'article' ">
            //differnt template with article data
            </td>
        </tr>

    </table>
</body>
</html>