<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>従業員詳細画面</title>
  </head>
  <body>
    <table style="border-collapse: collapse; margin-bottom:50px;">
      <tr>
        <th style="border: solid 1px; width:45px; height:40px; text-align:center">ID</th>
        <th style="border: solid 1px; width:120px; text-align:center">氏名</th>
        <th style="border: solid 1px; width:100px; text-align:center">部署</th>
        <th style="border: solid 1px; width:120px; text-align:center">基本給</th>
      </tr>
      <tr>
        <td style="border: solid 1px; width:45px; height:40px; text-align:center">{{$employee -> id}}</td>
        <td style="border: solid 1px; width:120px; padding-left:10px; text-align:left;">{{$employee -> employee_name}}</td>
        <td style="border: solid 1px; width:100px; padding-left:10px; text-align:left">{{$employee -> section}}</td>
        <td style="border: solid 1px; width:120px; padding-left:10px; text-align:left;">¥{{$employee -> salary}}</td>
      </tr>
    </table>
    <table style="border-collapse: collapse;">
      <tr>
        <th style="border: solid 1px; width:160px; height:40px; text-align:center">作業日付</th>
        <th style="border: solid 1px; width:100px; text-align:center">作業時間</th>
        <th style="border: solid 1px; width:240px; text-align:center">概要</th>
      </tr>
      @foreach($work_reports as $work_report)
      <tr>
        <td style="height: 40px; border: solid 1px; padding-left:10px;">{{$work_report -> working_date}}</td>
        <td style="border: solid 1px; padding-left:10px">{{$work_report -> working_hours}}</td>
        <td style="border: solid 1px; padding-left:10px">{{$work_report -> summary}}</td>
      </tr>
      @endforeach
    </table>
    <a href="/workingmanager/public/employees">戻る</a>
  </body>
</html>