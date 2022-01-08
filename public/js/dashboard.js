$(document).ready(function () {
    $('#dataTable').DataTable({
        "destroy": false,
        pageLength: 10,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
        lengthMenu: [[5, 10, 15], [5, 10, 15]]
    });

    
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
        const dropZoneElement = inputElement.closest(".drop-zone");
      
        dropZoneElement.addEventListener("click", (e) => {
          inputElement.click();
        });
      
        inputElement.addEventListener("change", (e) => {
          if (inputElement.files.length) {
            updateThumbnail(dropZoneElement, inputElement.files[0]);
          }
        });
      
        dropZoneElement.addEventListener("dragover", (e) => {
          e.preventDefault();
          dropZoneElement.classList.add("drop-zone--over");
        });
      
        ["dragleave", "dragend"].forEach((type) => {
          dropZoneElement.addEventListener(type, (e) => {
            dropZoneElement.classList.remove("drop-zone--over");
          });
        });
      
        dropZoneElement.addEventListener("drop", (e) => {
          e.preventDefault();
      
          if (e.dataTransfer.files.length) {
            inputElement.files = e.dataTransfer.files;
            updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
          }
      
          dropZoneElement.classList.remove("drop-zone--over");
        });
      });
      
      /**
       * Updates the thumbnail on a drop zone element.
       *
       * @param {HTMLElement} dropZoneElement
       * @param {File} file
       */
      function updateThumbnail(dropZoneElement, file) {
        let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
      
        // First time - remove the prompt
        if (dropZoneElement.querySelector(".drop-zone__prompt")) {
          dropZoneElement.querySelector(".drop-zone__prompt").remove();
        }
      
        // First time - there is no thumbnail element, so lets create it
        if (!thumbnailElement) {
          thumbnailElement = document.createElement("div");
          thumbnailElement.classList.add("drop-zone__thumb");
          dropZoneElement.appendChild(thumbnailElement);
        }
      
        thumbnailElement.dataset.label = file.name;
      
        // Show thumbnail for image files
        if (file.type.startsWith("image/")) {
          const reader = new FileReader();
      
          reader.readAsDataURL(file);
          reader.onload = () => {
            thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
          };
        } else {
          thumbnailElement.style.backgroundImage = null;
        }
      }
});

const modal_create = document.getElementById("modal-create");
const modal_edit = document.getElementById("modal-edit");
const modal_delete = document.getElementById("modal-delete");

window.addEventListener('load', function () {

    const btn_modal_create = document.getElementById("btn-modal-create");
    const close_create = document.getElementById("close-create");

    const btn_modal_edit = document.getElementsByClassName("btn-modal-edit");
    const close_edit = document.getElementById("close-edit");

    const btn_modal_delete = document.getElementsByClassName("btn-modal-delete");
    const close_delete = document.getElementById("close-delete");
    
    btn_modal_create.onclick = function () {
        modal_create.classList.add('active');
    }

    close_create.onclick = function () {
        modal_create.classList.remove('active');
    }

    for (let i=0; i<btn_modal_edit.length; i++) {
        btn_modal_edit.item(i).onclick = function(){
            modal_edit.classList.add('active');
            document.getElementById("id").value = this.dataset.id;
            document.getElementById('name').value = this.dataset.name;
        };
    }

    close_edit.onclick = function () {
        modal_edit.classList.remove('active');
    }

    for (let i=0; i<btn_modal_delete.length; i++) {
        btn_modal_delete.item(i).onclick = function(){
            modal_delete.classList.add('active');
            document.getElementById("id_delete").value = this.dataset.id;;
            document.getElementById('category').innerHTML = this.dataset.name;;
        };
    }

    close_delete.onclick = function () {
        modal_delete.classList.remove('active');
    }

});
window.onclick = function (event) {
    if (event.target == modal_create) {
        modal_create.classList.remove('active');
    }

    if (event.target == modal_edit) {
        modal_edit.classList.remove('active');
    }

    if (event.target == modal_delete) {
        modal_delete.classList.remove('active');
    }
}

