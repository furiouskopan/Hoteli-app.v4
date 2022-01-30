<template>
    <div
     style="background-image: url('https://i.redd.it/umhuar4xaxd81.jpg');
            height: 100vh; background-size: cover">
            
    <div class="d-flex justify-content-center aling-items-center" id="login_form">
        <div id="text" style="text-align:center" ><h1>Најавете се:</h1><hr>
          <form action="">
            <input type="text" placeholder="Корисничко име" class="transparent-input" style="width:249px" > <br>
            <input type="password" placeholder="Лозинка" class="transparent-input" style="width:249px">
          </form>
          <div class="d-grid gap-2">
          <button class="btn btn-primary mt-2" type="button">Најава</button>
        </div>
        <a href="#" style="color: #062687">Креирај нов профил</a>   
        </div>
    </div>
    
</div>
</template>

<script>


export default {
 
}
</script>

<style>
    
  #text{
    padding-top: 30vh;
  }
  input.transparent-input{
    background-color:rgba(0,0,0,0) !important;
    border:none !important;     
  }
  textarea:focus, input:focus{
    outline: none;
    }
  hr{
    border-top: 3px solid rgb(0, 0, 0)
    }
  ::placeholder { 
    color: rgba(0, 0, 0, 0.753);
    opacity: 1; 
  }

</style>
