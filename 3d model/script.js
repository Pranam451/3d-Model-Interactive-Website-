// Modal Elements
const modal = document.getElementById("modelModal");
const modalModel = document.getElementById("modalModel");
const closeBtn = document.querySelector(".close");

// Open Modal with Lazy Loading
document.querySelectorAll(".view-detail").forEach(button => {
  button.addEventListener("click", () => {
    const modelSrc = button.getAttribute("data-model");
    modalModel.setAttribute("src", modelSrc);
    modal.style.display = "block";
  });
});

// Close Modal
closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
  modalModel.removeAttribute("src"); // Clear model when closed
});

// Close modal when clicking outside content
window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
    modalModel.removeAttribute("src");
  }
});
