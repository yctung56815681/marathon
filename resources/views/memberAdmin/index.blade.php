<!DOCTYPE html>
<html lang="en">
<head>
  <title>個人會員資料管理</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>個人會員列表 <a href="/memberAdmin/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
  <table class="table table-hover">
    <thead>
      <tr size="2">
        <th>姓名</th>
        <th>身分證字號</th>
        <th>性別</th>
        <th>城市</th>
        <th>電子信箱</th>
        <th>手機</th>

        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($membersList as $mem)
        <tr>
            <td>{{$mem->name}}</td>
            <td>{{$mem->twId}}</td>
            <td>{{$mem->sex}}</td>
            <td>{{$mem->address}}</td>
            <td>{{$mem->email}}</td>
            <td>{{$mem->cellPhone}}</td>
            <td>
                <span class="pull-right">
                    <form method="post" action="/memberAdmin/{{$mem->id}}"> 
                        <a href="/memberAdmin/{{$mem->id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                    </form>
                </span>
            </td>
        </tr>
        @endforeach
    
        </tbody>
    
  </table>
</div>

</body>
</html>