<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>作業報告一覧画面</title>
  </head>
  <body>
    <div style="padding:20px; border:solid 1px;">
      <div style="margin-bottom: 20px; margin-top: 10px">
        <a href="/workingmanager/public/work_reports/create" style="padding:2px; border-bottom:1px solid #000; text-decoration:none;">登録</a>
      </div>
      <table style="border-collapse: collapse">
        <tr>
          <th style="border: solid 1px; width: 40px; height: 40px; text-align:center"><strong>ID</strong></th>
          <th style="border: solid 1px; width:80px; text-align:center"><strong>従業員ID</strong></th>
          <th style="border: solid 1px; width:160px; text-align:center"><strong>作業日付</strong></th>
          <th style="border: solid 1px; width:100px; text-align:center"><strong>作業時間</strong></th>
          <th style="border: solid 1px; width:240px; text-align:center"><strong>概要</strong></th>
        </tr>
        @foreach($working_reports as $working_report)
        <tr>
          <td style="border: solid 1px; height: 40px; text-align:center">{{$working_report -> id}}</td>
          <td style="border: solid 1px; padding-left:10px;">{{$working_report -> employee_id}}</td>
          <td style="border: solid 1px; padding-left:10px;">{{$working_report -> working_date}}</td>
          <td style="border: solid 1px; padding-left:10px">{{$working_report -> working_hours}}時間</td>
          <td style="border: solid 1px; padding-left:10px">{{$working_report -> summary}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </body>
</html>