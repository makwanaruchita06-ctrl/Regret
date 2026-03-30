document.addEventListener('DOMContentLoaded', function() {
  const editorElement = document.querySelector('#description-editor');
  if (editorElement) {
    const existingContent = editorElement.dataset.content || '';
    const editor = new toastui.Editor({
      el: editorElement,
      height: '200px',
      initialEditType: 'wysiwyg',
      previewStyle: 'vertical',
      initialValue: ''
    });
    
    // Load existing content
    if (existingContent) {
      editor.setHTML(existingContent);
    }
    
    // Real-time sync to hidden input
    editor.on('change', () => {
      const hiddenInput = document.getElementById('description-input');
      if (hiddenInput) {
        hiddenInput.value = editor.getHTML();
      }
    });
    
    // Ensure form submit has latest content
    const form = document.querySelector('form');
    if (form) {
      form.addEventListener('submit', () => {
        const hiddenInput = document.getElementById('description-input');
        if (hiddenInput) {
          hiddenInput.value = editor.getHTML();
        }
      });
    }
  }
});
