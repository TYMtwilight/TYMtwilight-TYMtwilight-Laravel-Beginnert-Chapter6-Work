<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>作業報告登録画面</title>
  </head>
  <body>
    <table style="border-collapse:collapse;">
      <form action="/workingmanager/public/work_reports/store" method="POST">
        <?php echo e(csrf_field()); ?>
        <tr>
          <th style="width: 100px; height: 50px; border:solid 1px #000;">従業員ID</th>
          <td style="width: 200px; height: 50px; border:solid 1px #000;"><input type="text" name="employee_id" style=" width: 190px; height: 36px;"></td>
        </tr>
        <tr>
          <th style="width: 100px; height: 50px; border:solid 1px #000;">作業日付</th>
          <td style="width: 200px; height: 50px; border:solid 1px #000;"><input type="date" name="working_date" style=" width: 190px; height: 36px;"></td>
        </tr>
        <th style="width: 100px; height: 50px; border:solid 1px #000;">作業時間</th>
          <td style="width: 200px; height: 50px; border:solid 1px #000;"><input type="number" name="working_hours" style=" width: 190px; height: 36px;"></td>
        <tr>
          <th style="width: 100px; height: 100px; border:solid 1px #000;">概要</th>
          <td style="width: 200px; height: 50px; border:solid 1px #000;"><textarea name="summary" style="display:block; width: 190px; height: 86px;"></textarea></td>
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