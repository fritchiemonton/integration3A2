<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Image Gallery</title>
<style>
  * {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
  }

  .gallery-item {
    flex-basis: 300px;
    text-align: center;
    background-color: #f9f9f9;
    padding: 10px;
    border-radius: 5px;
  }

  .gallery-item img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
  }

  .gallery-item p {
    margin-top: 10px;
    font-size: 14px;
  }

  .scrollable-content {
    max-height: 300px; /* Adjust the maximum height as needed */
    overflow-y: auto;
    padding: 10px;
  }
</style>
</head>
<body>

<div class="gallery">
  <div class="gallery-item">
    <img src="{{ asset('img/nani3.jpg')}}" alt="Image 1">
    <div class="scrollable-content">
      <h2>I.F.I</h2>
      <p>Detailed information about image 1 goes here. This can be a description, caption, or any relevant details.</p>
    </div>
  </div>

  <div class="gallery-item">
    <img src="{{ asset('img/nani2.jpg')}}" alt="Image 2">
    <div class="scrollable-content">
      <h2>I.F.I</h2>
      <p>Detailed information about image 2 goes here. This can be a description, caption, or any relevant details.</p>
    </div>
  </div>

  <!-- Add more gallery items as needed -->

</div>

</body>
</html>
