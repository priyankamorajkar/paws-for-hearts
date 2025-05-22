<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">

  #dog-Types {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    height: 50%;
    width: 100%;
    position: absolute;
    bottom: 0px;
  }

  .dog-type {
    width: 20%;
    text-align: center;
    margin: 10px;
    padding: 10px;
    background-color: lightgray;
    border-radius: 5px;
    display: none;
  }

  .dog-type img {
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

  .tagline-rescused-dog{
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

  .dog-cards {
    display: flex;
    flex-wrap: wrap;
  }

  .dog-card {
    width: 300px;
    height: 400px;
    margin: 10px;
    text-align: center;
    border: solid black;
    border-radius:5px;
    position: relative;
    left: 150px;
  }

  .dog-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
</style>
</head>
<body>
<?php include("header.php");?>
<center>
  <p><strong>When you adopt a "Rescued Dog", love is multiplied.</strong></p><br>
  <div class="container">
    <h1>Dog Search</h1>
<br>
    <div class="filter-container">
      <label for="type-select">Types:</label>
      <select id="type-select">
        <option value="all">Types</option>
        <option value="beagle">Beagle</option>
        <option value="bulldog">Bull Dog</option>
        <option value="chihuahua">Chihuahua</option>
        <option value="doberman">Doberman</option>
        <option value="german-shepherd">German Shepherd</option>
        <option value="golden-retriever">Golden Retriever</option>
        <option value="husky">Husky</option>
        <option value="labrador">Labrador</option>
        <option value="poodle">Poodle</option>
        <option value="pug">Pug</option>
        <option value="yorkshire-terrier">Yorkshire Terrier</option>
        <option value="rescued-dog">Rescued Dog</option>
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
    <div class="dog-cards">

    </div>
  </div>
  </center>
</body>
<script>
 const dogs = [
 {
  name: 'Julie',
  type: 'rescued-dog',
  size: 'medium',
  energyLevel: 'high',
  image: 'images/dogs/rescued-dog1.jpg',
  affectionneeds: 'cuddly'
},
 {
  name: 'Bubbles',
  type: 'beagle',
  size: 'small',
  energyLevel: 'high',
  image: 'images/dogs/beagle1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Buddy',
  type:'bulldog',
  size: 'medium',
  energyLevel: 'low',
  image: 'images/dogs/bulldog1.jpg',
  affectionneeds: 'independent'

},
{
  name: 'Charlie',
  type:'chihuahua',
  size: 'small',
  energyLevel: 'medium',
  affectionneeds: 'cuddly',
  image: 'images/dogs/chihuahua1.jpg'
},
{
  name: 'Dobie',
  type:'doberman',
  size: 'large',
  energyLevel: 'high',
  image: 'images/dogs/doberman1.jpg',
  affectionneeds: 'independent'

},
{
  name: 'Rex',
  type:'german-shepherd',
  size: 'large',
  energyLevel: 'high',
  image: 'images/dogs/german-shepherd1.jpg',
  affectionneeds: 'independent'

},
{
  name: 'Luffy',
  type:'golden-retriever',
  size: 'large',
  energyLevel: 'high',
  image: 'images/dogs/golden-retriever1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Kai',
  type:'husky',
  size: 'large',
  energyLevel: 'high',
  image: 'images/dogs/husky1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Casper',
  type:'labrador',
  size: 'medium',
  energyLevel: 'high',
  image: 'images/dogs/labrador1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Maggie',
  type:'poodle',
  size: 'large',
  energyLevel: 'high',
  image: 'images/dogs/poodle1.jpg',
  affectionneeds: 'cuddly'
},
{
  name: 'Biscuit',
  type:'pug',
  size: 'small',
  energyLevel: 'low',
  image: 'images/dogs/pug1.jpg',
  affectionneeds: 'balanced'

},
{
  name: 'Lola',
  type:'yorkshire-terrier',
  size: 'large',
  energyLevel: 'high',
  image: 'images/dogs/yorkshire-terrier1.jpg',
  affectionneeds: 'cuddly'

}
];
 const typeSelect = document.querySelector('#type-select');

 const sizeSelect = document.querySelector('#size-select');
 const energySelect = document.querySelector('#energy-select');
 const dogCardsContainer = document.querySelector('.dog-cards');

 function renderDogs(dogs) {
  dogCardsContainer.innerHTML = '';
  for (let dog of dogs) {
    dogCardsContainer.innerHTML += `
    <div class="dog-card">
    <img src="${dog.image}" alt="${dog.name}">
    <h2>${dog.name}</h2>
    <p>type: ${dog.type}</p>
    <p>Size: ${dog.size}</p>
    <p>Energy Level: ${dog.energyLevel}</p>
    <p>Affection Needs: ${dog.affectionneeds}</p>

    </div>
    `;
  }
}

typeSelect.addEventListener('change', function() {
  const selectedBreed = typeSelect.value;
  const filteredDogs = dogs.filter(function(dog) {
    return selectedBreed === 'all' || dog.type === selectedBreed;
  });
  renderDogs(filteredDogs);
});


sizeSelect.addEventListener('change', function() {
  const selectedSize = sizeSelect.value;
  const filteredDogs = dogs.filter(function(dog) {
    return selectedSize === 'all' || dog.size === selectedSize;
  });
  renderDogs(filteredDogs);
});

energySelect.addEventListener('change', function() {
  const selectedEnergy = energySelect.value;
  const filteredDogs = dogs.filter(function(dog) {
    return selectedEnergy === 'all' || dog.energyLevel === selectedEnergy;
  });
  renderDogs(filteredDogs);
});


renderDogs(dogs);
</script>
</body>
</html>