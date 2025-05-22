<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    #search-form {
    display: block;
    justify-content: center;
    align-items: center;
    height: 50%;
    width: 100%;
    position: absolute;
    top: 200px;
    left: 500px;

  }

  #search-input {
    width: 50%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  #search-button {
    width: 10%;
    padding: 10px;
    background-color: #9b60ec;
    color: #fff;
    cursor: pointer;
    margin-left: 10px;
    border: 10px black;
    box-shadow: 4px 4px rgb(211 211 211 / 5.0);   
  }

  #cat-Types {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    height: 50%;
    width: 100%;
    position: absolute;
    bottom: 0px;
  }

  .cat-type {
    width: 20%;
    text-align: center;
    margin: 10px;
    padding: 10px;
    background-color: lightgray;
    border-radius: 5px;
    display: none;
  }

  .cat-type img {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
  }

  #suggestions {
    position: absolute;
    width: 50%;
    background-color: white;
    list-style: none;
    padding: 0;
    margin: 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: none;
  }

  .suggestion {
    padding: 10px;
    cursor: pointer;
  }
  .tagline-rescused-cat{
    position: absolute;
    top: 170px;
    left: 500px;
  }
  .dogwithsignimg{
    position: absolute;
    top: 200px;
  }
  <style>
  .container {
    max-width: 800px;
    margin: 0 auto;
  }

  .filters {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
  }

  .cat-cards {
    display: flex;
    flex-wrap: wrap;
  }

  .cat-card {
    width: 300px;
    height: 400px;
    margin: 10px;
    text-align: center;
    border: solid black;
    border-radius:5px;
    position: relative;
    left: 150px;
  }

  .cat-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
</style>
</head>
<body>
<?php include("header.php");?>
<center>
  <p><strong>When you adopt a "Rescued cat", love is multiplied.</strong></p><br>
  <div class="container">
    <h1>cat Search</h1>
<br>
    <div class="filter-container">
      <label for="type-select">Types:</label>
      <select id="type-select">
        <option value="all">Types</option>
        <option value="beagle">Beagle</option>
        <option value="bulldog">Bull cat</option>
        <option value="chihuahua">Chihuahua</option>
        <option value="doberman">Doberman</option>
        <option value="german-shepherd">German Shepherd</option>
        <option value="golden-retriever">Golden Retriever</option>
        <option value="husky">Husky</option>
        <option value="labrador">Labrador</option>
        <option value="poodle">Poodle</option>
        <option value="pug">Pug</option>
        <option value="yorkshire-terrier">Yorkshire Terrier</option>
        <option value="rescued-cat">Rescued cat</option>
      </select>
      <label for="size-select">Size:</label>
      <select id="size-select">
        <option value="all">All</option>
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
      </select>
      <label for="energy-select">Energy Level:</label>
      <select id="energy-select">
        <option value="all">All</option>
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="high">High</option>
      </select>
    </div>
<br>
    <div class="cat-cards">

    </div>
  </div>
  </center>
</body>
<script>
 const cats = [
 {
  name: 'Julie',
  type: 'rescued-cat',
  size: 'medium',
  energyLevel: 'high',
  image: 'images/cats/rescued-cat1.jpg',
  affectionneeds: 'cuddly'
},
 {
  name: 'Minie',
  type: 'mainecoon',
  size: 'large',
  energyLevel: 'low',
  image: 'images/cats/mainecoon.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Persi',
  type:'persian',
  size: 'medium',
  energyLevel: 'medium',
  image: 'images/cats/persian.jpg',
  affectionneeds: 'cuddly'

},
{
  name: 'Charlie',
  type:'chihuahua',
  size: 'small',
  energyLevel: 'medium',
  affectionneeds: 'cuddly',
  image: 'images/cats/chihuahua1.jpg'
},
{
  name: 'Dobie',
  type:'doberman',
  size: 'large',
  energyLevel: 'high',
  image: 'images/cats/doberman1.jpg',
  affectionneeds: 'independent'

},
{
  name: 'Rex',
  type:'german-shepherd',
  size: 'large',
  energyLevel: 'high',
  image: 'images/cats/german-shepherd1.jpg',
  affectionneeds: 'independent'

},
{
  name: 'Luffy',
  type:'golden-retriever',
  size: 'large',
  energyLevel: 'high',
  image: 'images/cats/golden-retriever1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Kai',
  type:'husky',
  size: 'large',
  energyLevel: 'high',
  image: 'images/cats/husky1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Casper',
  type:'labrador',
  size: 'medium',
  energyLevel: 'high',
  image: 'images/cats/labrador1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Maggie',
  type:'poodle',
  size: 'large',
  energyLevel: 'high',
  image: 'images/cats/poodle1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Biscuit',
  type:'pug',
  size: 'small',
  energyLevel: 'low',
  image: 'images/cats/pug1.jpg',
  affectionneeds: 'balanced'

},
{
  name: 'Lola',
  type:'yorkshire-terrier',
  size: 'large',
  energyLevel: 'high',
  image: 'images/cats/yorkshire-terrier1.jpg',
  affectionneeds: 'cuddly'

}
];
 const typeSelect = document.querySelector('#type-select');

 const sizeSelect = document.querySelector('#size-select');
 const energySelect = document.querySelector('#energy-select');
 const catCardsContainer = document.querySelector('.cat-cards');

 function renderDogs(cats) {
  catCardsContainer.innerHTML = '';
  for (let cat of cats) {
    catCardsContainer.innerHTML += `
    <div class="cat-card">
    <img src="${cat.image}" alt="${cat.name}">
    <h2>${cat.name}</h2>
    <p>type: ${cat.type}</p>
    <p>Size: ${cat.size}</p>
    <p>Energy Level: ${cat.energyLevel}</p>
    <p>Affection Needs: ${cat.affectionneeds}</p>

    </div>
    `;
  }
}

typeSelect.addEventListener('change', function() {
  const selectedBreed = typeSelect.value;
  const filteredCats = cats.filter(function(cat) {
    return selectedBreed === 'all' || cat.type === selectedBreed;
  });
  renderDogs(filteredCats);
});


sizeSelect.addEventListener('change', function() {
  const selectedSize = sizeSelect.value;
  const filteredCats = cats.filter(function(cat) {
    return selectedSize === 'all' || cat.size === selectedSize;
  });
  renderDogs(filteredCats);
});

energySelect.addEventListener('change', function() {
  const selectedEnergy = energySelect.value;
  const filteredCats = cats.filter(function(cat) {
    return selectedEnergy === 'all' || cat.energyLevel === selectedEnergy;
  });
  renderDogs(filteredCats);
});


renderDogs(cats);
</script>
</body>
</html>