const searchButton = document.getElementById("search-button");
const searchInput = document.getElementById("search-input");

searchButton.addEventListener("click", function() {
  const query = searchInput.value;
  const url = `https://api.example.com/search?q=${query}`;

  fetch(url)
    .then(response => response.json())
    .then(data => {
      // do something with the search results
      console.log(data);
    })
    .catch(error => {
      console.error(error);
    });
});
