<html>
<head>
    <!-- 配置文件 -->
    <script type="text/javascript" src="<?php echo STATIC_PATH . "/ueditor/" ?>ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="<?php echo STATIC_PATH . "/ueditor/" ?>ueditor.all.js"></script>

    <script src="<?php echo STATIC_PATH . "/js/jquery-1.8.0.js"; ?>"></script>
</head>

<body>
<div class="editor-wrapper">
    <script id="container" name="content" type="text/plain"></script>
</div>

<input class="btn1" type="button" value="获取内容">
<input class="btn2" type="button" value="设置内容">

</body>

<!-- 实例化编辑器 -->
<script type="text/javascript">

    var ue = UE.getEditor('container', {
        //自定义工具栏图标:http://fex.baidu.com/ueditor/#start-toolbar
        toolbars: [
            [
                'bold', 'italic', 'underline', 'fontsize', 'forecolor', 'horizontal', '|',
                'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
                'simpleupload', 'attachment', '|', 'link', 'unlink', '|',
                'inserttable', 'deletetable', 'insertrow', 'insertcol', 'mergeright',
                'mergedown', 'deleterow', 'deletecol', 'splittorows', 'splittocols', 'mergecells',
                'fullscreen'
            ]
        ],
        //初始化编辑器的内容
        initialContent: '欢迎使用ueditor!',
        //初始化编辑器宽度,默认1000
        initialFrameWidth: 858,
        //初始化编辑器高度,默认320
        initialFrameHeight: 500,

        //阻止div标签自动转换为p标签
        allowDivTransToP: false,
        //是否自动长高,默认true
        autoHeightEnabled: false,

        //是否开启字数统计
        //wordCount:true
        //允许的最大字符数
        //maximumWords:10000
        //字数统计提示，{#count}代表当前字数，{#leave}代表还可以输入多少字符数,留空支持多语言自动切换，否则按此配置显示
        //wordCountMsg:''   //当前已输入 {#count} 个字符，您还可以输入{#leave} 个字符
        //超出字数限制提示  留空支持多语言自动切换，否则按此配置显示
        //wordOverFlowMsg: ''    //<span style="color:red;">你输入的字符个数已经超出最大允许值，服务器可能会拒绝保存！</span>
    });

    $(".btn1").click(function () {
        <!-- 判断编辑器是否有内容: ue.hasContents -->
        if (ue.hasContents) {
            <!-- 获取编辑器内容: ue.getContent() -->
            alert(ue.getContent());
        }
    });

    $(".btn2").click(function () {
        <!-- 设置编辑器内容: ue.setContent('设置内容') -->
        ue.setContent('设置内容!!!!');
    });

</script>
</html>