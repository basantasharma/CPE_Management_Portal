// const togglecurrentPassword5g = document.querySelector("#toggle-currentPassword5g");
// const currentPassword5g = document.querySelector("#currentPassword5g");

// togglecurrentPassword5g.addEventListener("click", function() {
//   if (currentPassword5g.type === "password") {
//     currentPassword5g.type = "text";
//     togglecurrentPassword5g.classList.remove("bi-eye-slash");
//     togglecurrentPassword5g.classList.add("bi-eye");
//   } else {
//     currentPassword5g.type = "password";
//     togglecurrentPassword5g.classList.remove("bi-eye");
//     togglecurrentPassword5g.classList.add("bi-eye-slash");
//   }
// });

const toggleNewPassword5g = document.querySelector("#toggle-newPassword5GHz");
const newPassword5g = document.querySelector("#newPassword5GHz");

if(toggleNewPassword5g)
{
  toggleNewPassword5g.addEventListener("click", function() {
    if (newPassword5g.type === "password") {
      newPassword5g.type = "text";
      toggleNewPassword5g.classList.remove("bi-eye-slash");
      toggleNewPassword5g.classList.add("bi-eye");
    } else {
      newPassword5g.type = "password";
      toggleNewPassword5g.classList.remove("bi-eye");
      toggleNewPassword5g.classList.add("bi-eye-slash");
    }
  });
}


// const togglecurrentPassword24g = document.querySelector("#toggle-currentPassword24g");
// const currentPassword24g = document.querySelector("#currentPassword24g");

// togglecurrentPassword24g.addEventListener("click", function() {
//   if (currentPassword24g.type === "password") {
//     currentPassword24g.type = "text";
//     togglecurrentPassword24g.classList.remove("bi-eye-slash");
//     togglecurrentPassword24g.classList.add("bi-eye");
//   } else {
//     currentPassword24g.type = "password";
//     togglecurrentPassword24g.classList.remove("bi-eye");
//     togglecurrentPassword24g.classList.add("bi-eye-slash");
//   }
// });

const toggleNewPassword24g = document.querySelector("#toggle-newPassword24GHz");
const newPassword24g = document.querySelector("#newPassword24GHz");
if(toggleNewPassword24g)
{
  toggleNewPassword24g.addEventListener("click", function() {
    if (newPassword24g.type === "password") {
      newPassword24g.type = "text";
      toggleNewPassword24g.classList.remove("bi-eye-slash");
      toggleNewPassword24g.classList.add("bi-eye");
    } else {
      newPassword24g.type = "password";
      toggleNewPassword24g.classList.remove("bi-eye");
      toggleNewPassword24g.classList.add("bi-eye-slash");
    }
  });
}