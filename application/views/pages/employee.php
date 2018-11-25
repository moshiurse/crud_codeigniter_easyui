<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
    <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="https://www.jeasyui.com/easyui/demo/demo.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="https://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>

</head>
<body>
    <h2>Basic CRUD Application</h2>
    <p>Click the buttons on datagrid toolbar to do crud actions.</p>
    
    <table id="dg" title="My Users" class="easyui-datagrid" style="width:700px;height:250px"
            url="<?php echo base_url('student/show'); ?>"
             fitColumns="true">
        <thead>
            <tr>
                <th field="name" width="50">Name</th>
                <th field="email" width="50">Phone</th>
                <th field="phone" width="50">Email</th>
            </tr>
        </thead>
        
    </table>

    </body>
</html>