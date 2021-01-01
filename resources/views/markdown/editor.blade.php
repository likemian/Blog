<link rel="stylesheet" href="{{ asset('editor/css/editormd.css') }}" />
<script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('editor/editormd.min.js') }}"></script>
<script type="text/javascript">
    $(function() {
        var editor = editormd("test-editor", {
            width  : "70%",
            height : 500,
            path   : "editor/lib/"
        });
    });
</script>
<div id="test-editor">
    <textarea style="display:none;">
    </textarea>
</div>