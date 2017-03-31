<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="content">
            <div id="example-1">
                <p v-if="greeting">Hello!</p>
            </div>
        </div>
    </div>
    </body>
    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
    <script type="text/javascript">
        var exampleData = {
            name: 'LaravelAcademy.org'
        }

        // 创建一个Vue实例绑定视图和数据
        var exampleVM = new Vue({
            el: '#example-1',
            data: {
                greeting: true
            }
        })
    </script>
</html>
