<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document @yield('title')</title>
  <style>
    .main{
      background-color:#2d197c;
      height:100vh;
      weight:100vw;
      position:relative;
    }

    .main-contents{
      background-color:white;
      width:50vw;
      padding:30px;
      position:absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      border-radius:10px;
    }

    .main-title{
      font-weight:bold;
      font-size:24px;
    }

    .main-action{
      display:flex;
      margin-bottom:30px;
      justify-content:space-between;
    }

    input{
      vertical-align:middle;
    }

    .button-a{
      border-color:#dc70fa;
      color:#dc70fa;
      font-weight:bold;
      background-color:#FFFFFF;
      border-radius:4px;
      padding: 8px 16px;
      cursor: pointer;
      transition:0.4s;
    }

    .button-a:hover{
      background:#dc70fa;
      color:#FFFFFF;
    }

    .text-a{
      width:80%;
      border:1px solid #ccc;
      border-radius:5px;
      padding:5px;
      font-size:14px;
      appearance: none;
    }

    tr th{
      padding-right:110px;
      padding-top:0;
    }

  </style>
</head>
<body>
  @section('main')
  <div class = "main">
    @show
      <div class = "main-contents">
          @yield('main-contents')
        <p class = "main-title">Todo List</p>
      <div class = "sub-contents">
        <form action = "index.php" method="post" class="main-action">
          @csrf
          <input type="text" class="text-a">
          <input type="submit" value="追加" class="button-a">
        </form>
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
        </table>
      </div>
    </div>
  </div>

</body>
<script></script>
</html>