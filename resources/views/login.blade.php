<!-- 继承master.php的页面 -->
@extends('master')
 
@section('title', '登录')

<!-- js代码 -->
@section('my-js')
    <script type="text/javascript">
        alert('登录');
    </script>
@endsection

<!-- body -->
@section('content')
    <p>登录页</p>
@endsection
