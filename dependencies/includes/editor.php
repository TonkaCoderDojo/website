<script src="/dependencies/miscelaneous/epiceditor/js/epiceditor.js"></script>
<script src="/dependencies/miscelaneous/epiceditor/markdown/to-markdown.js"></script>
<script>
var opts = {
	container: document.getElementById("contents"),
	textarea: null,
	basePath: '/dependencies/miscelaneous/epiceditor/',
	clientSideStorage: false,
	localStorageName: 'epiceditor',
	useNativeFullscreen: true,
	parser: marked,
	file: {
	  name: 'epiceditor',
	  defaultContent: toMarkdown(document.getElementById("contents").innerHTML),
	  autoSave: 100
	},
	theme: {
	  base: 'themes/base/epiceditor.css',
	  preview: '../../stylesheets/default.css',
	  editor: 'themes/editor/epic-dark.css'
	},
	button: {
	  preview: true,
	  fullscreen: false,
	  bar: "auto"
	},
	focusOnLoad: false,
	shortcut: {
	  modifier: 18,
	  fullscreen: 70,
	  preview: 80
	},
	string: {
	  togglePreview: 'Preview & Save',
	  toggleEdit: 'Edit',
	  toggleFullscreen: 'Fullscreen'
	},
	autogrow: false
    }
    var editor = new EpicEditor(opts);
    editor.load();
    
    // enable quasi-preview-saving
    editor.on("preview", function (){
	var previewer = editor.getElement("previewer").body.children[0];
	var parsedHTML = previewer.innerHTML; // the string
	
	// save here (call php)
	var pathname = window.location.pathname
	if (pathname.substring(window.location.pathname.lastIndexOf('/')) == "/") {
	    pathname = pathname + "index.php";
	}
	var params = "text=" + parsedHTML + "&file=" + pathname;
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("POST", "/dependencies/miscelaneous/epiceditor/php/saveedited.php", true);
	xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlHttp.send(params);
    });
</script>