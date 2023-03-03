const searchButton = document.querySelector('#search-button');

searchButton.addEventListener('click', () => {
  const searchTerm = document.querySelector('#search-input').value;

  fetch(`https://api.example.com/search?q=${searchTerm}`)
    .then(response => response.json())
    .then(data => {
      // display search results
    })
    .catch(error => {
      console.error('Error:', error);
    });
});
