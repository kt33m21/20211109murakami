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

    .button-b{
      border-color:#ff6b71;
      color:#ff6b71;
      font-weight:bold;
      background-color:#FFFFFF;
      border-radius:4px;
      padding: 8px 16px;
      cursor: pointer;
      transition:0.4s;
    }

    .button-b:hover{
      background:#ff6b71;
      color:#FFFFFF;
    }

    .button-c{
      border-color:#6bfcff;
      color:#6bfcff;
      font-weight:bold;
      background-color:#FFFFFF;
      border-radius:4px;
      padding: 8px 16px;
      cursor: pointer;
      transition:0.4s;
    }

    .button-c:hover{
      background:#6bfcff;
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

    .text-b{
      width:90%;
      padding:5px;
      border-radius:5px;
      border:1px solid #ccc;
      appearance:none;
      font-size:14px;
      outline:none;
    }

    table{
      border-collapse:collapse;
      border-spacing:0;
      text-align:center;
      width:100%;
    }

  </style>
</head>
<body>
  <div class = "main">
      <div class = "main-contents">
        <p class = "main-title">Todo List</p>
      <div class = "sub-contents">
        <form action = "{{ url('/todo/create')}}" method="post" class="main-action">
          @csrf
          <input type="text" class="text-a" name="content">
          <input type="submit" value="??????" class="button-a">
        </form>
        <table>
          <tr>
            <th>?????????</th>
            <th>????????????</th>
            <th>??????</th>
            <th>??????</th>
          </tr>
          @foreach ($items as $item)
          <form action = "{{ url('/todo/update')}}" method="post">
              @csrf
          <tr>
            <td>
              {{$item->gettimestamp()}}
            </td>
            <td>
              <input type="text" name="content" value="{{$item->content}}" class = text-b>
            </td>
            <td>
              <input type="hidden" name="id" value="{{$item->id}}" >
              <input type="submit" value="??????" class="button-b">
              </form>
            </td>
            <td>
              <form action = "{{ url('/todo/delete')}}" method="post">
              @csrf
                <input type="hidden" name="id" value="{{$item->id}}" >
                <input type="submit" value="??????" class="button-c">
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>

</body>
<script></script>
</html>
