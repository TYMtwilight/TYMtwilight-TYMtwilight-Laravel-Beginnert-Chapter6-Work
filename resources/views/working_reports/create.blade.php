<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>作業報告登録画面</title>
  </head>
  <body>
    <table>
      <form method="POST" action="http://localhost/workingmanager/public/work_reports/store">
        <tr>
          <th>従業員ID</th>
          <td><input type="text" name="employee_id"></td>
        </tr>
        <tr>
          <th>作業日付</th>
          <td><input type="date" name="working_date"></td>
        </tr>
        <th>作業時間</th>
          <td><input type="number" name="working_hours"></td>
        <tr>
          <th>概要</th>
          <td><input type="text" name="summary"></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" value="登録"></td>
        </tr>
      </form>
    </table>
    <?php
    if($errors->any()){
      foreach($errors->all() as $error){
        echo '<p style="color:red;">' . e($error) . '</p>';
      }
    }
    ?>
  </body>
</html>