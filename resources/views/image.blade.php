<html>
<head>
<style>
    body{
        background: black;
        height: 100vh;
        width: 100vw;
        display: flex;
        padding: 0;
        margin: 0;
    }
    img{
        display: block;
        margin: auto;
        max-height: 100vh;
    }
</style>
</head>
<body>
<img src="{{ action('ImageController@show') }}"/>
</body>
</html>