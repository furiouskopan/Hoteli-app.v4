<template>
<!-- Navbar  -->
<div>
    <div> 
      <nav class="navbar navbar-expand-lg navbar-default bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.vecteezy.com%2Fsystem%2Fresources%2Fpreviews%2F000%2F627%2F584%2Foriginal%2Fvector-hotel-icon-symbol-sign.jpg&f=1&nofb=1" height="42" alt="HoteliMK" />
            </a>  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                  <a href="/login">
                    <button id = "button" class="btn btn-outline-primary ms-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                      </svg>
                      | Log out</button></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Cards -->

    <!-- Searchbar -->
    
<!-- 
    <div class="hotel-card  card ms-5 me-5 mt-4">
        <div class="card-body">
          <h4 class="card-title">Hotel Title</h4>
          <p class="card-text">Some example text. Some example text.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
          <div class="wrapper">
            <a href="#" class="button_book">Book now!</a>
          </div>
        </div>
        
      </div>
      <div class="hotel-card  card ms-5 me-5 mt-4">
        <div class="card-body">
          <h4 class="card-title">Hotel Title</h4>
          <p class="card-text">Some example text. Some example text.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
          <div class="wrapper">
            <a href="#" class="button_book">Book now!</a>
          </div>
        </div>
        
      </div> -->
    </div>

</div>
</template>

<script>
 
export default  {
 data(){
   return {
   }
 }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

.hotel-card {
  &__img {
    height: 100%;
    object-fit: cover;
    
  }
}
.card-body{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}
.card-body:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

// Button

$color: #2194E0;

@keyframes sheen {
  0% {
    transform: skewY(-45deg) translateX(0);
  }
  100% {
    transform: skewY(-45deg) translateX(12.5em);
  }
}
.wrapper {
  display: flex;
  position: absolute;
  top: 50%;
  left: 91%;
  transform: translate(-50%, -50%);
}
.button_book {
  padding: 0.65em 1em;
  // text-align: center;
  text-decoration: none;
  color: $color;
  border: 2px solid $color;
  font-size: 18px;
  display: inline-block;
  border-radius: 0.4em;
  transition: all 0.2s ease-in-out;
  position: relative;
  overflow: hidden;
  &:before {
    content: "";
    background-color: rgba(255,255,255,0.5);
    height: 100%;
    width: 3em;
    display: block;
    position: absolute;
    top: 0;
    left: -4.5em;
    transform: skewX(-45deg) translateX(0);
    transition: none;
  }
  &:hover {
    background-color: $color;
    color: #fff;
    border-bottom: 4px solid darken($color, 10%);
    &:before {
      transform: skewX(-45deg) translateX(13.5em);
     transition: all 0.5s ease-in-out;
    }
  }
}

</style>

