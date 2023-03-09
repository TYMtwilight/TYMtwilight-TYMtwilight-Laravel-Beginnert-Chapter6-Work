<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>従業員一覧画面</title>
  </head>
  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>氏名</th>
        <th>部署</th>
        <th>基本給</th>
        <th><a href="http://localhost/workingmanager/public/employees/detail">詳細</a></th>
      </tr>
      @foreach($employees as $employee)
        <tr>
          <td>{{$employee -> id}}</td>
          <td>{{$employee -> employee_name}}</td>
          <td>{{$employee -> section}}</td>
          <td>{{$employee -> salary}}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>