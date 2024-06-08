function changeInput(value) {
  var inputElement = document.getElementById("inputElement");
  inputElement.value = value;

  // Close the dropdown after selecting an item (optional)
  var dropdownMenu = document.getElementById("dropdownMenu");
  dropdownMenu.classList.add("hidden");
  dropdownMenu.classList.remove("scale-y-100");
}

document.addEventListener("DOMContentLoaded", function () {
  var dropdownButton = document.getElementById("dropdownButton");
  var dropdownMenu = document.getElementById("dropdownMenu");

  // Function to toggle the dropdown menu
  function toggleDropdown() {
    dropdownMenu.classList.toggle("hidden");
    dropdownMenu.classList.toggle("scale-y-0");
  }

  // Event listener for button click
  dropdownButton.addEventListener("click", function (event) {
    event.stopPropagation(); // Prevent the click event from propagating to the document
    toggleDropdown();
  });

  // Event listener for document click to close dropdown if clicked outside
  document.addEventListener("click", function (event) {
    var isClickInside = dropdownButton.contains(event.target) || dropdownMenu.contains(event.target);
    if (!isClickInside) {
      dropdownMenu.classList.add("hidden");
      dropdownMenu.classList.remove("scale-y-100");
    }
  });
});
