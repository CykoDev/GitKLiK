<script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/ace-builds/src-noconflict/theme-monokai.js" type="text/javascript" charset="utf-8"></script>
<script src="/ace-builds/src-noconflict/mode-javascript.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function() {
		$('textarea[data-editor]').each(function() {
		    var textarea = $(this);
		    var mode = textarea.data('editor');
		    var editDiv = $('<div>', {
		    	position: 'absolute',
		    	width: textarea.width(),
		    	height: textarea.height(),
		    	'class': textarea.attr('class')
		    }).insertBefore(textarea);
		    textarea.css('display', 'none');
		    var editor = ace.edit(editDiv[0]);
		    editor.renderer.setShowGutter(textarea.data('gutter'));
		    editor.getSession().setValue(textarea.val());
		    editor.getSession().setMode("ace/mode/" + mode);
		    editor.setTheme("ace/theme/dawn");
		    editor.setOptions({
				showGutter: true,
				vScrollBarAlwaysVisible: true,
				showPrintMargin: true,
				minLines: 5,
				highlightGutterLine: true,
				highlightActiveLine: true,
                autoScrollEditorIntoView: true,
                readOnly: true,
				selectionStyle: "line"
			});
			editor.resize();
		    // copy back to textarea on form submit...
		    textarea.closest('form').submit(function() {
				textarea.val(editor.getSession().getValue());
		    });
		});
	});
</script>
