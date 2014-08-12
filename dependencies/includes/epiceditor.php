<script src="/dependencies/miscelaneous/epiceditor/js/epiceditor.js"></script>
<script>
var opts = {
    container: document.getElementsByTagName("article")[0],
    textarea: document.getElementsByTagName("article")[0],
    basePath: '/dependencies/miscelaneous/epiceditor/',
    clientSideStorage: true,
    localStorageName: 'epiceditor',
    useNativeFullscreen: true,
    parser: marked,
    file: {
      name: 'epiceditor',
      defaultContent: '',
      autoSave: 100
    },
    theme: {
      base: 'themes/base/epiceditor.css',
      preview: '../../stylesheets/default.css',
      editor: 'themes/editor/epic-dark.css'
    },
    button: {
      preview: true,
      fullscreen: true,
      bar: "auto"
    },
    focusOnLoad: false,
    shortcut: {
      modifier: 18,
      fullscreen: 70,
      preview: 80
    },
    string: {
      togglePreview: 'Toggle Preview Mode',
      toggleEdit: 'Toggle Edit Mode',
      toggleFullscreen: 'Enter Fullscreen'
    },
    autogrow: false
  }
  var editor = new EpicEditor(opts);
  editor.load();
</script>