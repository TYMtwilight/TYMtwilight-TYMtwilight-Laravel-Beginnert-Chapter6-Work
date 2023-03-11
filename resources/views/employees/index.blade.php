<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>従業員一覧画面</title>
  </head>
  <body>
    <table style="border-collapse: collapse;">
      <tr>
        <th style="border: solid 1px; width:45px; height:40px; text-align:center">ID</th>
        <th style="border: solid 1px; width:120px; text-align:center">氏名</th>
        <th style="border: solid 1px; width:100px; text-align:center">部署</th>
        <th style="border: solid 1px; width:120px; text-align:center">基本給</th>
        <th style="border: solid 1px; width:60px; text-align:center"></th>
      </tr>
      @foreach($employees as $employee)
        <tr>
          <td style="border: solid 1px; width:45px; height:40px; text-align:center">{{$employee -> id}}</td>
          <td style="border: solid 1px; width:120px; padding-left:10px; text-align:left">{{$employee -> employee_name}}</td>
          <td style="border: solid 1px; width:100px; padding-left:10px; text-align:left">{{$employee -> section}}</td>
          <td style="border: solid 1px; width:120px; padding-left:10px; text-align:left">¥{{$employee -> salary}}</td>
          <td style="border: solid 1px; width:60px; text-align:center"><a href="/workingmanager/public/employees/detail/{{$employee -> id}}">詳細</a></td>
        </tr>
      @endforeach
    </table>
  </body>
</html>