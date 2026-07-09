const categoriesButton = document.querySelector(".categories");
const categoriesOption = document.querySelector(".categories-option");

categoriesButton.addEventListener("click", () => {
    categoriesOption.toggleAttribute("hidden");
});
