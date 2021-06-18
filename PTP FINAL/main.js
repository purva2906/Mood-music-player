const picfile = document.getElementById("picfile");
        const container = document.getElementById("imagepreview");
        const previewImage = container.querySelector(".imagePreviewImage");
        const defaultText = container.querySelector(".text2");
          
        picfile.addEventListener("change", function(){
            const file = this.files[0];
            
            if (file) {
                const scanner = new FileReader();

                defaultText.style.display = "none";
                previewImage.style.display = "block";

                scanner.addEventListener("load", function() {
                    console.log(this);
                    previewImage.setAttribute("src" , this.result)
                });

                scanner.readAsDataURL(file);
            } else {
                defaultText.style.display = null;
                previewImage.style.display = null;
            }
        });

        const CPbtn = document.getElementById("CPbtn");
        const formContainer = document.querySelector(".FormContainer");
        const formButton = document.querySelector(".FormButton");
        const Formclose = document.querySelector(".close");

        CPbtn.addEventListener("click", popup);

        function popup(){
            formContainer.style.display = "block"
        }


         function closepopup(){
            formContainer.style.display = "none"
         }
