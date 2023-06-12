function previewImage(event) {
    var input = event.target;
    var preview = document.getElementById('image-preview');
    
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        var image = document.createElement('img');
        image.src = e.target.result;
        preview.innerHTML = '';
        preview.appendChild(image);
      }
      
      reader.readAsDataURL(input.files[0]);
    }
    else {
      preview.innerHTML = '';
    }
  }