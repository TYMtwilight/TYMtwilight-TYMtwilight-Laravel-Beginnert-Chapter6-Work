<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>従業員詳細画面</title>
  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>氏名</th>
        <th>部署</th>
        <th>基本給</th>
        <th></th>
      </tr>
      <tr>
        <td>{{$employee -> id}}</td>
        <td>{{$employee -> employee_name}}</td>
        <td>{{$employee -> section}}</td>
        <td>{{$employee -> salary}}</td>
      </tr>
    </table>
    <table>
      <tr>
        <th>作業日付</th>
        <th>作業時間</th>
        <th>概要</th>
      </tr>
      <tr>
        <td>{{$work_report -> working_date}}</td>
        <td>{{$work_report -> working_hours}}</td>
        <td>{{$work_report -> summary}}</td>
      </tr>
    </table>
    <a href="http://localhost/workingmanager/public/employees">戻る</a>
  </body>
</html>